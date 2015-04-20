<?php

namespace TouchBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

use TouchBundle\Entity\announcement;
use TouchBundle\Entity\message;
use TouchBundle\Entity\User;
use TouchBundle\Entity\grup;
use TouchBundle\Entity\member;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\QueryBuilder;
use Symfony\Component\Security\Core\SecurityContextInterface;


class DashboardController extends Controller //ROLE_USER
{
    public function indexAction() //TODO multiple selectden gelen veri nasıl veritabanına kaydedilir,
    {
        $em = $this->getDoctrine()->getManager();


        $member  = $this->getUser()->getId();
        $groups = $em->getRepository('TouchBundle:grup')->findBy(array('user'=>$member));

        

        return $this->render('TouchBundle:Dashboard:index.html.twig',array('grup'=>$groups));
    }
    public function addGroupFormAction()
    {
        return $this->render('TouchBundle:Dashboard/Add/group.html.twig:index.html.twig');
    }

    /*
     * Add group
     */
    public function addGroupAction(Request $request)
    {


        // Get's user id.
        $em = $this->getDoctrine()->getEntityManager();

        $grupAd  = $request->request->get('grupAd');
        $member  = $this->getUser()->getId();


        $user = $em->getRepository('TouchBundle:User')->find($member);


        $grup = new grup();
        $grup->setGrupAd($grupAd);
        $grup->setUser($user);

        $em->persist($grup);
        $em->flush();

        return $this->redirect($this->generateUrl('anasayfa'));
    }
    public function listGroupAction($id)
    {
        $em = $this->getDoctrine()->getManager();


        $member  = $this->getUser()->getId();

        /*
         * Grubu çek
         */
        $groups = $em->getRepository('TouchBundle:grup')->findBy(array('id'=>$id));

        $announcement = $em->getRepository('TouchBundle:announcement')->findBy(array('grup'=>$id));


        return $this->render('TouchBundle:Dashboard/List:group.html.twig',array('grup'=>$groups,'duyuru'=>$announcement));
    }

    /*
     * Add member
     */
    public function addMemberAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $username        = $request->request->get('kullaniciAdi'); //memberin user name'i
        $kullaniciSifre  = $request->request->get('kullaniciSifre'); //member pass
        $kullaniciMail   = $request->request->get('kullaniciMail');
        $kullaniciAd     = $request->request->get('kullaniciAd');
        $kullaniciGrup   = $request->request->get('grup');
        $leader          = $request->request->get('member_leader');



        $user = new User();
        $user->setUsername($username);
        $user->setEmail($kullaniciMail);
        $user->setPlainPassword($kullaniciSifre);
        $user->setEnabled(true);
        $user->setRoles(array("ROLE_MEMBER"));



        $em->persist($user);
        $em->flush();

        $user->getId(); //kayıt olan user'in id sini çek

        $group_who= $em->getRepository('TouchBundle:grup')->find($kullaniciGrup);

        $grup= new member();
        $grup->setUser($user); //fos_user_id
        $grup->setGrup($group_who); //group_id
        $grup->setMemberAd($kullaniciAd); //isim
        $em->persist($grup);
        $em->flush();



        return $this->redirect($this->generateUrl('group_list',array( 'id' => $kullaniciGrup )));
    }
    public function addMultipleMemberAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $username        = $request->request->get('kullaniciAdi'); //memberin user name'i
        $kullaniciSifre  = $request->request->get('kullaniciSifre'); //member pass
        $kullaniciMail   = $request->request->get('kullaniciMail');
        $kullaniciAd     = $request->request->get('kullaniciAd');
        $kullaniciGrup   = $request->request->get('secenekler');
        $leader  = $this->getUser()->getId();

        $user = new User();
        $user->setUsername($username);
        $user->setEmail($kullaniciMail);
        $user->setPlainPassword($kullaniciSifre);
        $user->setEnabled(true);
        $user->setRoles(array("ROLE_MEMBER"));



        $em->persist($user);
        $em->flush();

        $user->getId(); //kayıt olan user'in id sini çek
        $wuser = $em->getRepository('TouchBundle:User')->find($user);


        foreach($kullaniciGrup as $kg)
        {
            $group_who= $em->getRepository('TouchBundle:grup')->find($kg);

            $grup= new member();
            $grup->setUser($wuser); //fos_user_id
            $grup->setGrup($group_who); //group_id
            $grup->setMemberAd($kullaniciAd); //isim
            $em->persist($grup);
        }

        $em->flush();







        return $this->redirect($this->generateUrl('anasayfa'));
    }
    public function multipleAnnouncementAction(Request $request)
    {


        /*
         * $_POST ile gelen verileri al.
         */
        $baslik = $request->request->get('baslik');
        $duyuru = $request->request->get('duyuru');
        $secenekler   = $request->request->get('secenekler');
        $sahip  = $request->request->get('author');

        /*
           * Entitylerden ilişkisi olanlarla eşleştir.
         */
        $em = $this->getDoctrine()->getManager();

        $wsahip= $em->getRepository('TouchBundle:User')->find($sahip);



        foreach($secenekler as $s)
        {
            $wgrup= $em->getRepository('TouchBundle:grup')->find($s);

            $announcement = new announcement();
            $announcement->setAnnouncement($duyuru);
            $announcement->setUser($wsahip);
            $announcement->setGrup($wgrup);
            $announcement->setTitle($baslik);
            /*
             * Yeni bir satıra geç (persist),sorguyu çalıştır.(flush)
             */
            $em->persist($announcement);


        }
        /*
         * Ekle.
         */
        $em->flush();

        return $this->redirect($this->generateUrl('anasayfa'));

    }
    /*
     * Add Announcement
     */
    public function announcementAction(Request $request)
    {
        /*
         * $_POST ile gelen verileri al.
         */
        $baslik = $request->request->get('baslik');
        $duyuru = $request->request->get('duyuru');
        //$duyuru= htmlentities($duyuru);
        // yazdırırken echo htmlspecialchars_decode($duyuru);
        $grup   = $request->request->get('grup');
        $sahip  = $request->request->get('author');

        /*
         * Entitylerden ilişkisi olanlarla eşleştir.
         */
        $em = $this->getDoctrine()->getManager();
        $wgrup= $em->getRepository('TouchBundle:grup')->find($grup);
        $wsahip= $em->getRepository('TouchBundle:User')->find($sahip);

        $gun= date("d.m.Y H:i:s");
        $tarih=\DateTime::createFromFormat('Y-m-d H:m:s', $gun);

        /*
         * Ekle.
         */
        $announcement = new announcement();
        $announcement->setAnnouncement($duyuru);
        $announcement->setUser($wsahip);
        $announcement->setGrup($wgrup);
        $announcement->setTitle($baslik);
        /*
         * Yeni bir satıra geç (persist),sorguyu çalıştır.(flush)
         */
        $em->persist($announcement);
        $em->flush();

        return $this->redirect($this->generateUrl('group_list',array( 'id' => $grup )));
    }
    public function announcementDeleteAction(Request $request)
    {
        //TODO : duyuru silmeyi jquery ile yap.
        echo "hello";
        exit;
    }
    public function messageFormAction($id) //kime atılacağı bilgisi id de saklanıyor.
    {
        //todo date("Y/m/d G:i:s");

        /*
         * KUllanıcının gruplarını ekrana basar
         */
        $em = $this->getDoctrine()->getManager();
        $user  = $this->getUser()->getId();
        $groups = $em->getRepository('TouchBundle:grup')->findBy(array('user'=>$user));
        /*
         * Gönderen id'den tablodaki nesneye eriş.
         */
        $wuser= $em->getRepository('TouchBundle:User')->find($user);

        /*
         * Alan 'id sinden tablodaki nesneye eriş.
         */
        $member = $em->getRepository('TouchBundle:User')->findBy(array('id'=>$id));
        /*
         * $message = $em->getRepository('TouchBundle:message')->findBy(array('member'=>$id));
         */


        $messages = $em->createQueryBuilder()
            ->select('m')
            ->from('TouchBundle:message','m')
            ->where('m.user = :user_id AND m.member = :member_id')
            ->orWhere('m.user = :member_id AND m.member = :user_id')
            ->setParameter('user_id',$wuser)
            ->setParameter('member_id',$member)

            ->getQuery()->getResult();

        return $this->render('TouchBundle:Dashboard/Message:index.html.twig',array('grup'=>$groups,'mesaj'=>$messages,'user'=>$member));

    }
    public function addMessageAction(Request $request)
    { //message/1 e user entitty bas
        /*
         * gelen verileri değişkene ata.
         */
        $mesaj      = $request->request->get('mesaj');
        $gonderen   = $request->request->get('gonderen');
        $alan       = $request->request->get('alan');


        echo $alan;
        exit; //todo : alan kişi 2 şer kere yazılıyor. ve ardından 2211 oluyor
        /*
         * verileri tablolarla ilişkilendir
         */
        $em = $this->getDoctrine()->getManager();
        // Gönderici
        $user_id    = $em->getRepository('TouchBundle:User')->find($gonderen);
        $member_id  = $em->getRepository('TouchBundle:User')->find($alan);


        /*
         * Güncel saati ve tarihi çek.
         */
        $gun= date("d.m.Y H:i:s");
        $tarih=\DateTime::createFromFormat('Y-m-d H:m:s', $gun);

        $message = new message();
        $message->setUser($user_id); //gonderen
        $message->setMember($member_id); //alan
        $message->setMessage($mesaj);
        $message->setReaded('0');
        $message->setDeleted('0');

        $em->persist($message);
        $em->flush();

        return $this->redirect($this->generateUrl('messageForm',array( 'id' => $alan )));

 //TODO SORUN ÇÖZÜLECEK.
    }


}
