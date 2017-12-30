<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
       return $this->redirectToRoute('fos_user_security_login');
    }


    /**
     * @Route("/logpage", name="logpage")
     */
    public function dashAction(Request $request)
    {
        $user= $this->getUser();
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        if($user->hasRole('ROLE_SUPER_ADMIN')){
            return $this->render('default/dashSuperAdmin.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR));
        }else if($user->hasRole('ROLE_ADMIN')){
            return $this->render('default/dashAdmin.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR));
        }else if ($user->hasRole('ROLE_PARENT')){
            return $this->render('default/dashParent.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR));
        }else{
            return $this->render('default/dashAdmin.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR));
        }
        
    }


    /**
     * @Route("/lockScreen", name="lockScreen")
     */
    public function lockAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/lock.html.twig');
    }
}
