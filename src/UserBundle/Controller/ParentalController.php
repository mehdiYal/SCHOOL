<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\Parental;
use UserBundle\Form\ParentalType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Parental controller.
 *
 * @Route("/parental")
 */
class ParentalController extends Controller
{
    /**
     * @Route("/add", name="addParental")
     */
    public function addAction(Request $request)
    {
        $parental = new Parental();
        $form=$this->createForm(ParentalType::class,$parental);
        $form->handleRequest($request);

        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        if($form->isSubmitted() && $form->isValid()){
            $parental->setEcole($this->getUser()->getEcole());
            $parental->addRole("ROLE_PARENT");
            $em=$this->getDoctrine()->getManager();
            $em->persist($parental);
            $em->flush();
            return $this->redirectToRoute('listParentals');
        }

        return $this->render('parentsViews/addParent.html.twig',array("edit"=>false,"form"=>$form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }


     /**
     * @Route("/edit/{id}", name="editParental")
     */
    public function editAction(Request $request,Parental $parental)
    {

        $form=$this->createForm(ParentalType::class,$parental);
        $form->handleRequest($request);

        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            if($this->getUser()==$parental) return $this->redirectToRoute('myProfileParental');
            else return $this->redirectToRoute('listParentals');
        }
        if($this->getUser()==$parental)return $this->render('parentsViews/editMyParent.html.twig',array("edit"=>true,"form"=>$form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
        else return $this->render('parentsViews/addParent.html.twig',array("edit"=>true,"form"=>$form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }


    /**
     * @Route("/remove/{id}", name="removeParental")
     */
    public function removeAction(Parental $parental)
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($parental);
        $em->flush();
        return $this->redirectToRoute('listParentals');  
    }

    /**
     * @Route("/profile/{id}", name="profileParental")
     */
    public function profileAction(Parental $parental)
    {
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        return $this->render('parentsViews/profileParent.html.twig',array("parent"=>$parental,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }

     /**
     * @Route("/myProfile", name="myProfileParental")
     */
    public function myProfileAction()
    {   
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        return $this->render('parentsViews/myProfileParent.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }



    /**
     * @Route("/list", name="listParentals")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("UserBundle:Parental");
        $parentals=$repository->findAll();

        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        return $this->render('parentsViews/listParents.html.twig',array("parentals"=>$parentals,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }
}
