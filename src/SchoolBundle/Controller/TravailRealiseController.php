<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use SchoolBundle\Entity\TravailRealise;
use SchoolBundle\Entity\Classe;
use SchoolBundle\Form\TravailRealiseType;
use Symfony\Component\HttpFoundation\Request;


/**
 * TravailRealise controller.
 *
 * @Route("/travailrealise")
 */
class TravailRealiseController extends Controller
{
    /**
     * @Route("/new", name="new_travail")
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

        $travailrealise= new TravailRealise();
        $statement = $connection->prepare("SELECT matiere_id FROM ens_mat WHERE enseignant_id = :enseignant_id");
        $statement->bindValue('enseignant_id', $id);
        $statement->execute();
        $matieres=$statement->fetchAll();
        $j=0;
        foreach ($matieres as $row) {
            $arrayId[$j]=$row['matiere_id'];
            $j++;
        }

        $form=$this->createForm(TravailRealiseType::class,$travailrealise,array('idEnseignant'=>$id,'idMatiere'=> $arrayId));
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            extract($_POST);
            
            $uploaded_file = $form['travail']->getData();
            if(!empty($travailrealise->getTravail()) && $uploaded_file)
            {
                $file = $travailrealise->getTravail();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('uploads_devoir'),
                    $fileName
                );
                $travailrealise->setTravail($fileName);
            }
            $travailrealise->setEnseignant($user);
            $classe=$form['classe']->getData();
            $travailrealise->setAnnee($classe->getAnnee());
            $em->persist($travailrealise);
            $em->flush();

             $travailrealise=$em->getRepository('SchoolBundle:TravailRealise')->findBy(array('enseignant'=> $user));
        
        return $this->render('travailrealise/show.html.twig',array("data"=>$travailrealise,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
        }
        return $this->render('travailrealise/add.html.twig',array("form"=>$form->createView(),"data"=>$matieres,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
    }

    /**
     * @Route("/show/{id}", name="show_travail")
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
            
        $travailrealise=$em->getRepository('SchoolBundle:TravailRealise')->findBy(array('enseignant'=> $user));
        
        return $this->render('travailrealise/show.html.twig',array("data"=>$travailrealise,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
    
    }

     /**
     * @Route("/showClass/{id}", name="show_travail_class")
     * @Method({"GET", "POST"})
     */
    public function showClassAction(Classe $classe,Request $request){

        $user=$this->getUser();
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        $em = $this->getDoctrine()->getManager();
        $id=$request->attributes->get('id');
            
        $travailrealise=$em->getRepository('SchoolBundle:TravailRealise')->findBy(array('classe'=> $classe));
        
        return $this->render('travailrealise/show.html.twig',array("data"=>$travailrealise,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
    
    }

    /**
     * @Route("/delete/{id}", name="delete_travail")
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
        $travailrealise=$em->getRepository('SchoolBundle:TravailRealise')->findOneBy(array('id'=> $id));

        $devoir=$this->getParameter('uploads_devoir').'/'.$travailrealise->getTravail();
        unlink($devoir);

        $em->remove($travailrealise);
        $em->flush();
        
        $referer = $request->headers->get('referer');
     
        return $this->redirect($referer,array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));  
    }

    /**
     * Displays a form to edit an existing "travail realisé" entity.
     *
     * @Route("/{id}/edit", name="edit_travail")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TravailRealise $travailrealise){
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

        $edit_form=$this->createForm(TravailRealiseType::class,$travailrealise,array('idEnseignant'=>$id,'idMatiere'=> $arrayId));
        $edit_form->handleRequest($request);
        
        if($edit_form->isSubmitted() && $edit_form->isValid()){
            extract($_POST);
            
            $uploaded_file = $edit_form['travail']->getData();

            if($uploaded_file != null)
            {
                $file = $travailrealise->getTravail();

                $em->clear();
                $travailrealise_tmp = $em->getRepository('SchoolBundle:TravailRealise')->findOneBy(array('id'=>$travailrealise->getId()));
                $devoir=$this->getParameter('uploads_devoir').'/'.$travailrealise_tmp->getTravail();
                unlink($devoir);
        
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move( $this->getParameter('uploads_devoir'),
                    $fileName
                );
                $travailrealise->setTravail($fileName);
            }else{
                $em->clear();
                $travailrealise_tmp = $em->getRepository('SchoolBundle:TravailRealise')->findOneBy(array('id'=>$travailrealise->getId()));
                $travailrealise->setTravail($travailrealise_tmp->getTravail());

            }

            $em->merge($travailrealise);
            $em->flush();
            return $this->render('travailrealise/edit.html.twig',array("edit_form"=>$edit_form->createView(),"data"=>$matieres,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
        }

        return $this->render('travailrealise/edit.html.twig',array("edit_form"=>$edit_form->createView(),"data"=>$matieres,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
   
    }
    
     /**
     * @Route("/travailParent", name="travailParent")
     */
    public function travailParentAction()
    {
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        return $this->render('travailrealise/showParent.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));  
    }

    


}
