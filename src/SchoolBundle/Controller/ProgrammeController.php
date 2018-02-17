<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use SchoolBundle\Entity\Programme;
use UserBundle\Entity\Enseignant;
use SchoolBundle\Entity\Matiere;
use SchoolBundle\Entity\Salle;
use SchoolBundle\Entity\Classe;
use SchoolBundle\Entity\Jour;
use SchoolBundle\Entity\Horraire;
use SchoolBundle\Form\ProgrammeType;
use Symfony\Component\HttpFoundation\Request;


/**
 * Programme controller.
 *
 * @Route("/program")
 */
class ProgrammeController extends Controller
{
     /**
     * Creates a new artwork entity.
     *
     * @Route("/new", name="program_new")
     * @Method({"GET", "POST"})
     */
  /*  public function newAction(Request $request)
    {
       /* $programme= new Programme();
       
        $em = $this->getDoctrine()->getManager();
        $enseignant= $em->getRepository('UserBundle:Enseignant')->findOneBy(array('id'=>64));
        $matiere= $em->getRepository('SchoolBundle:Matiere')->findOneBy(array('id'=>2));
        $salle= $em->getRepository('SchoolBundle:Salle')->findOneBy(array('id'=>2));
        $classe= $em->getRepository('SchoolBundle:Classe')->findOneBy(array('id'=>2));
        $horraire=$em->getRepository('SchoolBundle:Horraire')->findOneBy(array('id'=>1));
        $jour=$em->getRepository('SchoolBundle:Jour')->findOneBy(array('id'=>1));

        $programme->setEnseignant($enseignant);
        $programme->setMatiere($matiere);
        $programme->setSalle($salle);
        $programme->setClasse($classe);
        $programme->setHorraire($horraire);
        $programme->setJour($jour);

        $em->persist($programme);
        $em->flush();
    } */

     /**
     * @Route("/new", name="programme_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {   
        // Connection BDD
        $em = $this->getDoctrine()->getManager();
        $programmes=null;
       
        //Initialisation des ids
       // $idClasse=$request->attributes->get('id');

        $programme= new Programme();
        $classe=new Classe();
        $horraire=$em->getRepository('SchoolBundle:Horraire')->findAll();

        $form=$this->createForm(ProgrammeType::class,$programme);
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($programme);
            $em->flush($programme);
            
          //  return $this->redirectToRoute('programme_index');
            $provider = $this->container->get('fos_message.provider');
            $inbox = $provider->getInboxThreads();
            $sentbox = $provider->getSentThreads();
            $nb=$provider->getNbUnreadMessages();
            return $this->render('programme/add.html.twig',array(
            'programmes'=> $programmes,
            'form' => $form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'horraire'=>$horraire));

      
        }
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        return $this->render('programme/add.html.twig',array(
            'programmes'=> $programmes,
            'form' => $form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'horraire'=>$horraire));
    }

     /**
     * @Route("/show/class/{id}", name="program_show_class")
     */
    public function showClasseAction(Request $request)
    {   
        $user=$this->getUser();
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        $em = $this->getDoctrine()->getManager();
        $id=$request->attributes->get('id');
        $data['programme']= $em->getRepository('SchoolBundle:Programme')->findBy(array('classe'=>$id));
        $data['jour']= $em->getRepository('SchoolBundle:Jour')->findAll();
        $data['horraire']= $em->getRepository('SchoolBundle:Horraire')->findAll();

        return $this->render('programme/show2.html.twig',array("data"=>$data,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
      
    }   

    /**
     * @Route("/show/enseignant/{id}", name="program_show_enseignant")
     */
    public function showEnseignantAction(Request $request)
    {
        $user=$this->getUser();
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        $em = $this->getDoctrine()->getManager();
        $id=$request->attributes->get('id');
        $data['programme']= $em->getRepository('SchoolBundle:Programme')->findBy(array('enseignant'=>$id));
        $data['jour']= $em->getRepository('SchoolBundle:Jour')->findAll();
        $data['horraire']= $em->getRepository('SchoolBundle:Horraire')->findAll();

        return $this->render('programme/show2.html.twig',array("data"=>$data,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
      
    }

    /**
     * @Route("/show/list/{id}", name="program_list")
     */
    public function showListAction(Request $request)
    {
        $user=$this->getUser();
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        $em = $this->getDoctrine()->getManager();
        $id=$request->attributes->get('id');
        $data['classes']= $em->getRepository('SchoolBundle:Classe')->findBy(array('ecole'=> $id));

        return $this->render('programme/list.html.twig',array("data"=>$data,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
      
    }

       /**
     * @Route("/delete/{id}", name="delete_programme")
     */
    public function deleteAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $id=$request->attributes->get('id');
        $programme=$em->getRepository('SchoolBundle:Programme')->findOneBy(array('id'=> $id));


        $em->remove($programme);
        $em->flush();
        
        $referer = $request->headers->get('referer');
     
        return $this->redirect($referer);  
    }



}
