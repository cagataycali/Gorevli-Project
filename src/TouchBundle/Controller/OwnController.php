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

class OwnController extends Controller //ROLE_MEMBER
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
 //TODO üyenin bulunduğu grupları görüntüle ve bu gruplara gelen duyuruları görüntüle gelen özel mesajları görüntüle

        $user  = $this->getUser()->getId();

        $user1 = $em->getRepository('TouchBundle:User')->find($user);

        $member = $em->getRepository('TouchBundle:member')->findBy(array('user'=>$user));

        $groups = $em->getRepository('TouchBundle:grup')->findBy(array('member'=>$member));


        $member = $em->createQueryBuilder()
            ->select('g')
            ->from('TouchBundle:member','m')
            ->where('m.user = :user_id')
            ->setParameter('user_id',$user1)
            ->getQuery()->getResult();

        $member->getGrup();



        return $this->render('@Touch/Own/index.html.twig',array('grup'=>$groups));
    }
}
