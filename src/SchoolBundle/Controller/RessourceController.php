<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use SchoolBundle\Entity\Ressource;
use SchoolBundle\Form\RessourceType;
use Symfony\Component\HttpFoundation\Request;


/**
 * Ressource controller.
 *
 * @Route("/ressource")
 */
class RessourceController extends Controller
{
    /**
     * @Route("/new", name="new_ressource")
     * @Method({"GET", "POST"})
     */
    public function addAction(Request $request)
    {   
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
       
        $user=$this->get('security.token_storage')->getToken()->getUser();
        $id=$user->getId();
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $ressource= new Ressource();
        $statement = $connection->prepare("SELECT matiere_id FROM ens_mat WHERE enseignant_id = :enseignant_id");
        $statement->bindValue('enseignant_id', $id);
        $statement->execute();
        $matieres=$statement->fetchAll();
        $j=0;
        foreach ($matieres as $row) {
            $arrayId[$j]=$row['matiere_id'];
            $j++;
        }

        $form=$this->createForm(RessourceType::class,$ressource,array('idEnseignant'=>$id,'idMatiere'=> $arrayId));
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            extract($_POST);
            
            $uploaded_file = $form['cours']->getData();
            if(!empty($ressource->getCours()) && $uploaded_file)
            {
                $file = $ressource->getCours();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('uploads_ressource'),
                    $fileName
                );
                $ressource->setCours($fileName);
            }

            $uploaded_file2 = $form['ressource']->getData();
            if(!empty($ressource->getRessource()) && $uploaded_file2)
            {
                $file = $ressource->getRessource();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('uploads_ressource'),
                    $fileName
                );
                $ressource->setRessource($fileName);
            }

            $ressource->setEnseignant($user);
            $classe=$form['classe']->getData();
            $ressource->setAnnee($classe->getAnnee());
            $em->persist($ressource);
            $em->flush();
             $ressource=$em->getRepository('SchoolBundle:Ressource')->findAll(array('enseignant_id'=> $id));
        
        return $this->render('ressource/show.html.twig',array("data"=>$ressource,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
        }
        return $this->render('ressource/add.html.twig',array("form"=>$form->createView(),"data"=>$matieres,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
    }

    /**
     * @Route("/show/{id}", name="show_ressource")
     * @Method({"GET", "POST"})
     */
    public function showAction(Request $request){

        $user=$this->getUser();
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        $em = $this->getDoctrine()->getManager();
        $id=$request->attributes->get('id');
            
        $ressource=$em->getRepository('SchoolBundle:Ressource')->findAll(array('enseignant_id'=> $id));
        
        return $this->render('ressource/show.html.twig',array("data"=>$ressource,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
    
    }

    /**
     * @Route("/show/classe/{id}", name="show_ressource_class")
     * @Method({"GET", "POST"})
     */
    public function showClasseAction(Request $request){

        $user=$this->getUser();
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        $em = $this->getDoctrine()->getManager();
        $id=$request->attributes->get('id');
            
        $ressource=$em->getRepository('SchoolBundle:Ressource')->findAll(array('classe_id'=> $id));
        
        return $this->render('ressource/show.html.twig',array("data"=>$ressource,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
    
    }

    /**
     * @Route("/delete/{id}", name="delete_ressource")
     */
    public function deleteAction(Request $request)
    {   
        $user=$this->getUser();
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        $em=$this->getDoctrine()->getManager();
        $id=$request->attributes->get('id');
        $ressource=$em->getRepository('SchoolBundle:Ressource')->findOneBy(array('id'=> $id));

        $ress=$this->getParameter('uploads_ressource').'/'.$ressource->getRessource();
        unlink($ress);

        $cours=$this->getParameter('uploads_ressource').'/'.$ressource->getCours();
        unlink($cours);

        $em->remove($ressource);
        $em->flush();
        
        $referer = $request->headers->get('referer');
     
        return $this->redirect($referer,array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));  
    }

    /**
     * Displays a form to edit an existing "ressource" entity.
     *
     * @Route("/{id}/edit", name="edit_ressource")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ressource $ressource){
        $user=$this->get('security.token_storage')->getToken()->getUser();
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        
        $id=$user->getId();
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $statement = $connection->prepare("SELECT matiere_id FROM ens_mat WHERE enseignant_id = :enseignant_id");
        $statement->bindValue('enseignant_id', $id);
        $statement->execute();
        $matieres=$statement->fetchAll();
        $j=0;
        foreach ($matieres as $row) {
            $arrayId[$j]=$row['matiere_id'];
            $j++;
        }

        $edit_form=$this->createForm(RessourceType::class,$ressource,array('idEnseignant'=>$id,'idMatiere'=> $arrayId));
        $edit_form->handleRequest($request);
        
        if($edit_form->isSubmitted() && $edit_form->isValid()){
            extract($_POST);
            
            $uploaded_file = $edit_form['cours']->getData();

            if($uploaded_file != null)
            {
                $file = $ressource->getCours();

                $em->clear();
                $ressource_tmp = $em->getRepository('SchoolBundle:Ressource')->findOneBy(array('id'=>$ressource->getId()));
                $cours=$this->getParameter('uploads_ressource').'/'.$ressource_tmp->getCours();
                unlink($cours);
        
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move( $this->getParameter('uploads_ressource'),
                    $fileName
                );
                $ressource->setCours($fileName);
            }else{
                $em->clear();
                $ressource_tmp = $em->getRepository('SchoolBundle:Ressource')->findOneBy(array('id'=>$ressource->getId()));
                $ressource->setCours($ressource_tmp->getCours());

            }

            $uploaded_file2 = $edit_form['ressource']->getData();

            if($uploaded_file2 != null)
            {
                $file = $ressource->getRessource();

                $em->clear();
                $ressource_tmp = $em->getRepository('SchoolBundle:Ressource')->findOneBy(array('id'=>$ressource->getId()));
                $ress=$this->getParameter('uploads_ressource').'/'.$ressource_tmp->getRessource();
                unlink($ress);
        
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move( $this->getParameter('uploads_ressource'),
                    $fileName
                );
                $ressource->setRessource($fileName);
            }else{
                $em->clear();
                $ressource_tmp = $em->getRepository('SchoolBundle:Ressource')->findOneBy(array('id'=>$ressource->getId()));
                $ressource->setRessource($ressource_tmp->getRessource());

            }

            $em->merge($ressource);
            $em->flush();
            return $this->render('ressource/edit.html.twig',array("edit_form"=>$edit_form->createView(),"data"=>$matieres,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
        }

        return $this->render('ressource/edit.html.twig',array("edit_form"=>$edit_form->createView(),"data"=>$matieres,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
   
    }


}
