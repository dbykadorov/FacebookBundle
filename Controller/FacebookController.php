<?php

namespace Ailove\FacebookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FacebookController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AiloveFacebookBundle:Default:index.html.twig', array('name' => $name));
    }

    public function loginAction()
    {
        /**
         * @var \FOS\FacebookBundle\Facebook\FacebookSessionPersistence $fbApi
         */
        $fbApi = $this->get('fos_facebook.api');




        return new \Symfony\Component\HttpFoundation\RedirectResponse($fbApi->getLoginUrl(array('redirect_uri' => $this->generateUrl('_security_check', array(), true))));
    }

    public function connectAction()
    {

        die();
    }
}