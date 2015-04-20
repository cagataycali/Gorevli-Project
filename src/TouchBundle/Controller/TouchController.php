<?php

namespace TouchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TouchBundle\Entity\User;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\RedirectResponse;


class TouchController extends Controller //Ziyaretci
    //TODO : kayıt sayfası yeniden yapılandırılacak,role öğretmen olarak kayıt olunacak
{
    public function indexAction(Request $request)
    {
        $session = $request->getSession(); //session değerini al


        $securityContext = $this->container->get('security.context');
        $router = $this->container->get('router');

        if ($securityContext->isGranted('ROLE_LEADER')) {
            return new RedirectResponse($router->generate('dashboard'), 307);
        }

        if ($securityContext->isGranted('ROLE_MEMBER')) {
            return new RedirectResponse($router->generate('own_anasayfa'), 307);
        }


        return $this->render('TouchBundle:Anasayfa:index.html.twig');
    }
    public function regAction()
    {
        return $this->render('TouchBundle:Anasayfa:register.html.twig');
    }
    public function registerationAction(Request $request) //TODO role ogretmen olarak kayıt et.
    {
        $em = $this->getDoctrine()->getManager();


        $kullaniciAdi  = $request->request->get('username');
        $kullaniciSifre  = $request->request->get('userpass');
        $kullaniciMail  = $request->request->get('usermail');


        $user = new User();
        $user->setUsername($kullaniciAdi);
        $user->setEmail($kullaniciMail);
        $user->setPlainPassword($kullaniciSifre);
        $user->setEnabled(true);
        $user->setRoles(array("ROLE_LEADER"));

        $em->persist($user);
        $em->flush();

        return $this->redirect($this->generateUrl('fos_user_security_login'));
    }
}
