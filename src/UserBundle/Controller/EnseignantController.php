<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\Enseignant;
use UserBundle\Form\EnseignantType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Enseignant controller.
 *
 * @Route("/enseignant")
 */
class EnseignantController extends Controller
{
    /**
     * @Route("/add", name="addEnseignant")
     */
    public function addAction(Request $request)
    {
        $enseignant = new Enseignant();
        $form=$this->createForm(EnseignantType::class,$enseignant);
        $form->handleRequest($request);

        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        if($form->isSubmitted() && $form->isValid()){
            if($enseignant->getPhoto() !=null){
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $enseignant->getPhoto();

                $fileName = md5(uniqid()).'.'.$file->guessExtension();

                $file->move(
                    $this->getParameter('photo_directory'),
                    $fileName
                );

                
                $enseignant->setphoto($fileName);
             }
             $enseignant->setEcole($this->getUser()->getEcole());
             $enseignant->addRole("ROLE_ENSEIGNANT");
            $em=$this->getDoctrine()->getManager();
            $em->persist($enseignant);
            $em->flush();
            return $this->redirectToRoute('listEnseignants');
        }

        return $this->render('enseignantsViews/addEnseignant.html.twig',array("edit"=>false,"form"=>$form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }


     /**
     * @Route("/edit/{id}", name="editEnseignant")
     */
    public function editAction(Request $request,Enseignant $enseignant)
    {

        $form=$this->createForm(EnseignantType::class,$enseignant);
        $form->handleRequest($request);

        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        if($form->isSubmitted() && $form->isValid()){
            if($enseignant->getPhoto() !=null){
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $enseignant->getPhoto();

                $fileName = md5(uniqid()).'.'.$file->guessExtension();

                $file->move(
                    $this->getParameter('photo_directory'),
                    $fileName
                );

                
                $enseignant->setphoto($fileName);
             }

            $em=$this->getDoctrine()->getManager();
            $em->flush();
            if($this->getUser()==$enseignant) return $this->redirectToRoute('myProfileEnseignant');
             else return $this->redirectToRoute('listEnseignants');
        }
        if($this->getUser()==$enseignant)return $this->render('enseignantsViews/editMyEnseignant.html.twig',array("edit"=>true,"form"=>$form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
        else return $this->render('enseignantsViews/addEnseignant.html.twig',array("edit"=>true,"form"=>$form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }


    /**
     * @Route("/remove/{id}", name="removeEnseignant")
     */
    public function removeAction(Enseignant $enseignant)
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($enseignant);
        $em->flush();
        return $this->redirectToRoute('listEnseignants');  
    }

    /**
     * @Route("/profile/{id}", name="profileEnseignant")
     */
    public function profileAction(Enseignant $enseignant)
    {
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        return $this->render('enseignantsViews/profileEnseignant.html.twig',array("enseignant"=>$enseignant,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }

     /**
     * @Route("/myProfile", name="myProfileEnseignant")
     */
    public function myProfileAction()
    {   
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        return $this->render('enseignantsViews/myProfileEnseignant.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }



    /**
     * @Route("/list", name="listEnseignants")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("UserBundle:Enseignant");
        $enseignants=$repository->findAll();

        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        return $this->render('enseignantsViews/listEnseignants.html.twig',array("enseignants"=>$enseignants,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }

    /**
     * @Route("/list/class/{id}", name="enseignant_liste_classes")
     */
    public function showClasseAction(Request $request)
    {
         if (!$this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            throw $this->createAccessDeniedException();
            }
        $user=$this->getUser();
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        
        $id= $request->attributes->get('id');
        $em = $this->getDoctrine()->getManager();
        $enseignant=$em->getRepository('UserBundle:Enseignant')->findOneBy(array('id'=>$id));
        $ensMatiere=$em->getRepository('SchoolBundle:EnsMat')->findBy(array('enseignant'=> $enseignant));
        
        $data['classes']=$em->getRepository('SchoolBundle:EnsMat')->findBy(array('enseignant'=> $enseignant ));
        $data['enseignant']=$enseignant;
        $data['ensMat']=$ensMatiere;
         return $this->render('enseignantsViews/listClasses.html.twig',array("data"=>$data,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
    }
}
