<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use SchoolBundle\Entity\TravailaFaire;
use SchoolBundle\Entity\Classe;
use UserBundle\Entity\Enseignant;
use SchoolBundle\Form\TravailaFaireType;
use Symfony\Component\HttpFoundation\Request;


/**
 * TravailaFaire controller.
 *
 * @Route("/travailaFaire")
 */
class TravailaFaireController extends Controller
{
    /**
     * @Route("/new", name="new_travailafaire")
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

        $travailafaire= new TravailaFaire();
        $statement = $connection->prepare("SELECT matiere_id FROM ens_mat WHERE enseignant_id = :enseignant_id");
        $statement->bindValue('enseignant_id', $id);
        $statement->execute();
        $matieres=$statement->fetchAll();
        $j=0;
        foreach ($matieres as $row) {
            $arrayId[$j]=$row['matiere_id'];
            $j++;
        }

        $form=$this->createForm(TravailaFaireType::class,$travailafaire,array('idEnseignant'=>$id,'idMatiere'=> $arrayId));
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            extract($_POST);
            
            $uploaded_file = $form['travail']->getData();
            if(!empty($travailafaire->getTravail()) && $uploaded_file)
            {
                $file = $travailafaire->getTravail();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('uploads_homework'),
                    $fileName
                );
                $travailafaire->setTravail($fileName);
            }
            $travailafaire->setEnseignant($user);
            $classe=$form['classe']->getData();
            $travailafaire->setAnnee($classe->getAnnee());
            $em->persist($travailafaire);
            $em->flush();
             $travailafaire=$em->getRepository('SchoolBundle:TravailaFaire')->findAll(array('enseignant_id'=> $id));
        
        return $this->render('travailafaire/show.html.twig',array("data"=>$travailafaire,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
        }
        return $this->render('travailafaire/add.html.twig',array("form"=>$form->createView(),"data"=>$matieres,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
    }

    /**
     * @Route("/show/{id}", name="show_travailafaire")
     * @Method({"GET", "POST"})
     */
    public function showAction(Enseignant $enseignant,Request $request){

        $user=$this->getUser();
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        $em = $this->getDoctrine()->getManager();
            
        $travailafaire=$em->getRepository('SchoolBundle:TravailaFaire')->findBy(array('enseignant'=> $enseignant));
        
        return $this->render('travailafaire/show.html.twig',array("data"=>$travailafaire,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
    
    }

    /**
     * @Route("/show/classe/{id}", name="show_travailafaire_class")
     * @Method({"GET", "POST"})
     */
    public function showClassAction(Classe $classe,Request $request){

        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        $em = $this->getDoctrine()->getManager();

            
        $travailafaire=$em->getRepository('SchoolBundle:TravailaFaire')->findBy(array('classe'=> $classe));
        
        return $this->render('travailafaire/show.html.twig',array("data"=>$travailafaire,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    
    }

    /**
     * @Route("/delete/{id}", name="delete_travailafaire")
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
        $travailafaire=$em->getRepository('SchoolBundle:TravailaFaire')->findOneBy(array('id'=> $id));

        $devoir=$this->getParameter('uploads_homework').'/'.$travailafaire->getTravail();
        unlink($devoir);

        $em->remove($travailafaire);
        $em->flush();
        
        $referer = $request->headers->get('referer');
     
        return $this->redirect($referer,array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));  
    }

    /**
     * Displays a form to edit an existing "travail a faire" entity.
     *
     * @Route("/{id}/edit", name="edit_travailafaire")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TravailaFaire $travailafaire){
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

        $edit_form=$this->createForm(TravailaFaireType::class,$travailafaire,array('idEnseignant'=>$id,'idMatiere'=> $arrayId));
        $edit_form->handleRequest($request);
        
        if($edit_form->isSubmitted() && $edit_form->isValid()){
            extract($_POST);
            
            $uploaded_file = $edit_form['travail']->getData();

            if($uploaded_file != null)
            {
                $file = $travailafaire->getTravail();

                $em->clear();
                $travailafaire_tmp = $em->getRepository('SchoolBundle:TravailaFaire')->findOneBy(array('id'=>$travailafaire->getId()));
                $devoir=$this->getParameter('uploads_homework').'/'.$travailafaire_tmp->getTravail();
                unlink($devoir);
        
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move( $this->getParameter('uploads_homework'),
                    $fileName
                );
                $travailafaire->setTravail($fileName);
            }else{
                $em->clear();
                $travailafaire_tmp = $em->getRepository('SchoolBundle:TravailaFaire')->findOneBy(array('id'=>$travailafaire->getId()));
                $travailafaire->setTravail($travailafaire_tmp->getTravail());

            }

            $em->merge($travailafaire);
            $em->flush();
            return $this->render('travailafaire/edit.html.twig',array("edit_form"=>$edit_form->createView(),"data"=>$matieres,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
        }

        return $this->render('travailafaire/edit.html.twig',array("edit_form"=>$edit_form->createView(),"data"=>$matieres,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
   
    }


}
