<?php

namespace UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use UserBundle\Entity\Thread;
use UserBundle\Entity\User;



/**
 * Message controller.
 *
 * @Route("/message")
 */
class MessageController extends Controller
{
    /**
     * @Route("/show/{id}", name="message_show")
     * @Method({"GET", "POST"})
     */
    public function showAction(Thread $thread)
    {   
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        return $this->render('message/show.html.twig',array('thread'=>$thread,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
    }

    /**
     * @Route("/inbox", name="message_inbox")
     * @Method({"GET", "POST"})
     */
    public function inboxAction(Request $request)
    {   
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        return $this->render('message/inbox.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
    }

    /**
     * @Route("/sentbox", name="message_sentbox")
     * @Method({"GET", "POST"})
     */
    public function sentboxAction(Request $request)
    {   
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        return $this->render('message/sentbox.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
    }

    /**
     * @Route("/adressBook", name="message_adressBook")
     * @Method({"GET", "POST"})
     */
    public function adressBookAction(Request $request)
    {  

        $repository=$this->getDoctrine()->getRepository("UserBundle:Parental");
        $parents=$repository->findBy(array('ecole'=>$this->getUser()->getEcole()));

        $repository=$this->getDoctrine()->getRepository("UserBundle:Enseignant");
        $ens=$repository->findBy(array('ecole'=>$this->getUser()->getEcole()));

        $repository=$this->getDoctrine()->getRepository("UserBundle:Eleve");
        $eleves=$repository->findBy(array('ecole'=>$this->getUser()->getEcole()));
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         *
         */
        $paginator=$this->get('knp_paginator');
        $resultParent=$paginator->paginate(
            $parents,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',8)
        );

        /**
         * @var $paginatorEns \Knp\Component\Pager\Paginator
         *
         */
        $paginatorEns=$this->get('knp_paginator');
        $resultEns=$paginatorEns->paginate(
            $ens,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',8)
        );

        /**
         * @var $paginatorEleve \Knp\Component\Pager\Paginator
         *
         */
        $paginatorEleve=$this->get('knp_paginator');
        $resultEleves=$paginatorEleve->paginate(
            $eleves,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',8)
        );

        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        return $this->render('message/adressBook.html.twig',array('eleves'=>$resultEleves,'ens'=>$resultEns,'parents'=>$resultParent,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }


    /**
     * @Route("/new/{id}", name="message_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(User $user)
    {   
    	$provider = $this->container->get('fos_message.provider');
		$inbox = $provider->getInboxThreads();
		$sentbox = $provider->getSentThreads();
		$nb=$provider->getNbUnreadMessages();
<<<<<<< Updated upstream
    	return $this->render('message/new.html.twig',array('recipient'=>$user,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
=======
    	return $this->render('message/new.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
>>>>>>> Stashed changes
    }

    /**
     * @Route("/send", name="message_send")
     * @Method({"GET", "POST"})
     */
    public function sendAction(Request $request)
    {   
    	extract($_POST);

    	$repository=$this->getDoctrine()->getRepository("UserBundle:User");
        $recipient=$repository->findOneById($_POST['recipient']);

    	$composer = $this->container->get('fos_message.composer');
		$message = $composer->newThread()
		    ->setSender($this->getUser())
		    ->addRecipient($recipient)
		    ->setSubject($subject)
		    ->setBody($msg)
		    ->getMessage();

	    $sender = $this->container->get('fos_message.sender');
		$sender->send($message);

<<<<<<< Updated upstream
        return $this->redirectToRoute('message_sentbox');
=======
    	$provider = $this->container->get('fos_message.provider');
		$inbox = $provider->getInboxThreads();
		$sentbox = $provider->getSentThreads();
		$nb=$provider->getNbUnreadMessages();
    	return $this->render('message/new.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
>>>>>>> Stashed changes
    }

}
 