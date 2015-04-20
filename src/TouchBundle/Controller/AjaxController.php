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

class AjaxController extends Controller
{

    public function indexAction()
    {
        $request = $this->container->get('request');
        $em = $this->getDoctrine()->getManager();

        $user  = $this->get('security.context')->getToken()->getUser()->getId();

        $group = $em->createQueryBuilder()
            ->select('m')
            ->from('TouchBundle:member','m')
            ->where('g.user =:id')
            ->setParameter('id',$user)
            ->getQuery()
            ->getArrayResult();

        $response = new Response(json_encode($group));
        $response->headers->set('Content-type', 'application/json; charset=utf-8');
        return $response;
    }

}