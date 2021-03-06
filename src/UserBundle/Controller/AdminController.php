<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\Admin;
use SchoolBundle\Entity\Ecole;
use UserBundle\Form\AdminType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Admin controller.
 *
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * @Route("/add", name="addAdmin")
     */
    public function addAction(Request $request)
    {
        $admin = new Admin();
        $form=$this->createForm(AdminType::class,$admin);
        $form->handleRequest($request);

        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        if($form->isSubmitted() && $form->isValid()){
             if($admin->getPhoto() !=null){
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $admin->getPhoto();

                $fileName = md5(uniqid()).'.'.$file->guessExtension();

                $file->move(
                    $this->getParameter('photo_directory'),
                    $fileName
                );

                
                $admin->setphoto($fileName);
             }
            $admin->addRole("ROLE_ADMIN");
            $em=$this->getDoctrine()->getManager();
            $em->persist($admin);
            $em->flush();
            return $this->redirectToRoute('listAdmins');
        }

        return $this->render('adminsViews/addAdmin.html.twig',array("edit"=>false,"form"=>$form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }


     /**
     * @Route("/edit/{id}", name="editAdmin")
     */
    public function editAction(Request $request,Admin $admin)
    {

        $form=$this->createForm(AdminType::class,$admin);
        $form->handleRequest($request);

        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        if($form->isSubmitted() && $form->isValid()){
             if($admin->getPhoto() !=null){
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $admin->getPhoto();

                $fileName = md5(uniqid()).'.'.$file->guessExtension();

                $file->move(
                    $this->getParameter('photo_directory'),
                    $fileName
                );

                
                $admin->setphoto($fileName);
             }
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            if($this->getUser()==$admin) return $this->redirectToRoute('myProfileAdmin');
             else return $this->redirectToRoute('listAdmins');
        }
        if($this->getUser()==$admin)return $this->render('adminsViews/editMyAdmin.html.twig',array("edit"=>true,"form"=>$form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
        else return $this->render('adminsViews/addAdmin.html.twig',array("edit"=>true,"form"=>$form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }


    /**
     * @Route("/remove/{id}", name="removeAdmin")
     */
    public function removeAction(Admin $admin)
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($admin);
        $em->flush();
        return $this->redirectToRoute('listAdmins'); 
    }


    /**
     * @Route("/profile/{id}", name="profileAdmin")
     */
    public function profileAction(Admin $admin)
    {
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        return $this->render('adminsViews/profileAdmin.html.twig',array("admin"=>$admin,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }

     /**
     * @Route("/myProfileAdmin", name="myProfileAdmin")
     */
    public function myProfileAction()
    {
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        return $this->render('adminsViews/myProfileAdmin.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }


    /**
     * @Route("/list", name="listAdmins")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("UserBundle:Admin");
        $admins=$repository->findAll();

        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        return $this->render('adminsViews/listAdmins.html.twig',array("admins"=>$admins,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }


    /**
     * @Route("/school/{id}", name="schoolAdmin")
     */
    public function schoolAction(Admin $admin)
    {
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        if ($admin->getEcole()==null) {
            $repository=$this->getDoctrine()->getRepository("SchoolBundle:Ecole");
            $schools=$repository->findAll();
            return $this->render('adminsViews/schoolAdmin.html.twig',array("ecoles"=>$schools,"admin"=>$admin));
        }
        return $this->redirectToRoute('profileSchool',array('id' => $admin->getEcole()->getId(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }

    /**
     * @Route("/asso/{id}/{idp}", name="assoSchool")
     */
    public function assoSchoolAction(Admin $admin,$idp)
    {
        $ecole = new Ecole();
        $repository=$this->getDoctrine()->getRepository("SchoolBundle:Ecole");
        $ecole=$repository->findOneById($idp);
        if($ecole==null) return new Response("il n'existe pas un ecole avec les donnees envoyé");
        $admin->setEcole($ecole);
        $em=$this->getDoctrine()->getManager();
        $em->flush();   
        return $this->redirectToRoute('listAdmins');      
    }
}

