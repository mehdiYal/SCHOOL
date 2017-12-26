<?php

namespace UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use UserBundle\Entity\Thread;



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
        return $this->render('message/show.html.twig',array('thread'=>$thread,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
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
        return $this->render('message/inbox.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
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
        return $this->render('message/sentbox.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }


    /**
     * @Route("/new", name="message_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {   
    	$provider = $this->container->get('fos_message.provider');
		$inbox = $provider->getInboxThreads();
		$sentbox = $provider->getSentThreads();
		$nb=$provider->getNbUnreadMessages();
    	return $this->render('message/new.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
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

    	$provider = $this->container->get('fos_message.provider');
		$inbox = $provider->getInboxThreads();
		$sentbox = $provider->getSentThreads();
		$nb=$provider->getNbUnreadMessages();
    	return $this->render('message/new.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }

}
 