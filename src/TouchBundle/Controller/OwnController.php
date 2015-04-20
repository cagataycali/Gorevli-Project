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

        /*
         * KUllanıcının member bilgisini çeker.İsim,grup id vs.Ve buradan dahil olduğu grupları listeler.
         */
        $em = $this->getDoctrine()->getManager();
        $user  = $this->getUser()->getId();
        $member = $em->getRepository('TouchBundle:member')->findBy(array('user'=>$user));



        $grup_id=$em->getRepository('TouchBundle:member')->findBy(array('user'=>$user));

        foreach($grup_id as $g)
        {
            $grup_id = $g->getGrup()->getId();
        }



        $announcement = $em->getRepository('TouchBundle:announcement')->findBy(array('grup'=>$grup_id));


        return $this->render('@Touch/Own/index.html.twig',array('member'=>$member,'duyuru'=>$announcement));
    }
    public function groupAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $user  = $this->getUser()->getId();
        $member = $em->getRepository('TouchBundle:member')->findBy(array('user'=>$user));

        /*
         * Grubu çek
         */
        $groups = $em->getRepository('TouchBundle:grup')->findBy(array('id'=>$id));

        $announcement = $em->getRepository('TouchBundle:announcement')->findBy(array('grup'=>$id));

        return $this->render('TouchBundle:Own/List:group.html.twig',array('grup'=>$groups,'duyuru'=>$announcement,'member'=>$member));

    }
}
