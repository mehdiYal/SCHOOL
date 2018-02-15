<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SchoolBundle\Entity\Ecole;
use UserBundle\Entity\Eleve;
use SchoolBundle\Form\EcoleType;
use SchoolBundle\Form\EcoleEditType;
use SchoolBundle\Form\PaymentEcoleType;
use Symfony\Component\HttpFoundation\Request;

/**
 * School controller.
 *
 * @Route("/school")
 */
class SchoolController extends Controller
{
    /**
     * @Route("/add", name="addSchool")
     */
    public function addAction(Request $request)
    {
        $ecole = new Ecole();
        $form=$this->createForm(EcoleType::class,$ecole);
        $form->handleRequest($request);

        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        if($form->isSubmitted() && $form->isValid()){
             if($ecole->getLogo() !=null){
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $ecole->getLogo();

                $fileName = md5(uniqid()).'.'.$file->guessExtension();

                $file->move(
                    $this->getParameter('logo_directory'),
                    $fileName
                );

                
                $ecole->setLogo($fileName);
             }

            $em=$this->getDoctrine()->getManager();
            $em->persist($ecole);
            $em->flush();
            return $this->redirectToRoute('listSchools');
        }

        return $this->render('schoolsViews/addSchool.html.twig',array("edit"=>false,"form"=>$form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }

     /**
     * @Route("/list", name="listSchools")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("SchoolBundle:Ecole");
        $ecoles=$repository->findAll();

        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        return $this->render('schoolsViews/listSchools.html.twig',array("ecoles"=>$ecoles,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }


     /**
     * @Route("/edit/{id}", name="editSchool")
     */
    public function editAction(Request $request,Ecole $ecole)
    {
        $form=$this->createForm(EcoleType::class,$ecole);
        $form->handleRequest($request);

        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        if($form->isSubmitted() && $form->isValid()){
             if($ecole->getLogo() !=null){
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $ecole->getLogo();

                $fileName = md5(uniqid()).'.'.$file->guessExtension();

                $file->move(
                    $this->getParameter('logo_directory'),
                    $fileName
                );

                
                $ecole->setLogo($fileName);
             }

            $em=$this->getDoctrine()->getManager();
            $em->persist($ecole);
            $em->flush();
            return $this->redirectToRoute('listSchools');
        }

        return $this->render('schoolsViews/addSchool.html.twig',array("edit"=>false,"form"=>$form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }

    /**
     * @Route("/editFrais", name="editFrais")
     */
    public function editFraisAction(Request $request)
    {
        $ecole=$this->getUser()->getEcole();
        $form=$this->createForm(PaymentEcoleType::class,$ecole);
        $form->handleRequest($request);

        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($ecole);
            $em->flush();
            return $this->redirectToRoute('mySchool');
        }

        return $this->render('schoolsViews/editFrais.html.twig',array("edit"=>false,"form"=>$form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }

    /**
     * @Route("/editMy/{id}", name="editMySchool")
     */
    public function editMyAction(Request $request,Ecole $ecole)
    {
        $form=$this->createForm(EcoleEditType::class,$ecole);
        $form->handleRequest($request);

        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        if($form->isSubmitted() && $form->isValid()){
             if($ecole->getLogo() !=null){
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $ecole->getLogo();

                $fileName = md5(uniqid()).'.'.$file->guessExtension();

                $file->move(
                    $this->getParameter('logo_directory'),
                    $fileName
                );

                
                $ecole->setLogo($fileName);
             }

            $em=$this->getDoctrine()->getManager();
            $em->persist($ecole);
            $em->flush();
            return $this->redirectToRoute('listSchools');
        }

        return $this->render('schoolsViews/editSchool.html.twig',array("edit"=>false,"form"=>$form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }

     /**
     * @Route("/remove/{id}", name="removeSchool")
     */
    public function removeAction(Ecole $ecole)
    {
         $em=$this->getDoctrine()->getManager();
        $em->remove($ecole);
        $em->flush();
        return $this->redirectToRoute('listSchools'); 
    }


     /**
     * @Route("/profile/{id}", name="profileSchool")
     */
    public function profileAction(Ecole $ecole)
    {
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        return $this->render('SchoolsViews/profileSchool.html.twig',array("ecole"=>$ecole,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }


    /**
     * @Route("/mySchool", name="mySchool")
     */
    public function mySchoolAction()
    {
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        return $this->render('SchoolsViews/profileSchool.html.twig',array("ecole"=>$this->getUser()->getEcole(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }

    /**
     * @Route("/cantineTrans/{id}", name="ecole_cantineTrans")
     */
    public function cantineTransAction(Ecole $ecole)
    {
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        return $this->render('schoolsViews/cantineTrans.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,"ecole"=>$ecole));
    }
}
