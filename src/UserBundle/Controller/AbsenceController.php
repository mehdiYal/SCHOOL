<?php

namespace UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use UserBundle\Entity\Absence;
use UserBundle\Form\AbsenceType;
use SchoolBundle\Entity\Classe;

/**
 * Absence controller.
 *
 * @Route("/absence")
 */
class AbsenceController extends Controller
{
    /**
     * @Route("/", name="absence_index")
     * @Method({"GET", "POST"})
     */
    public function indexAction(Request $request)
    {   
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        $em = $this->getDoctrine()->getManager();
        $absences=null;
        $classe=null;
        $form = $this->createFormBuilder()
            ->add('classe', EntityType::class,
                array( 'required' => false,
                    'class' => 'SchoolBundle:Classe','choice_label' => 'nom'))
             ->getForm();
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {

            $classeF=$form->get('classe')->getData();

            $eleve=$em->getRepository('UserBundle:Eleve')->findBy(array('classe'=>$classeF));
            $absences=$em->getRepository('UserBundle:Absence')->findBy(array('eleve'=>$eleve));
            return $this->render('absence/index.html.twig',array(
            'absences'=> $absences,
            'classe'=> $classe,
            'form' => $form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
        }
        return $this->render('absence/index.html.twig',array(
            'absences'=> $absences,
            'classe'=> $classe,
            'form' => $form->createView(),
            'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }

     /**
     * @Route("/new/{id}", name="absence_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {   
        // Connection BDD
        $em = $this->getDoctrine()->getManager();
        $absences=null;
       
        //Initialisation des ids
        $idClasse=$request->attributes->get('id');

        $absence= new Absence();
        $classe=new Classe();

        $form=$this->createForm(AbsenceType::class,$absence,array('idClasse'=>$idClasse));
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($absence);
            $em->flush($absence);
            
            return $this->redirectToRoute('absence_index');
      
        }
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        return $this->render('absence/add.html.twig',array(
            'absences'=> $absences,
            'form' => $form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }

    /**
     * @Route("/delete/{id}", name="delete_absence")
     */
    public function deleteAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $id=$request->attributes->get('id');
        $absence=$em->getRepository('UserBundle:Absence')->findOneBy(array('id'=> $id));
        $em->remove($absence);
        $em->flush();
        
        $referer = $request->headers->get('referer');
     
        return $this->redirect($referer);  
    }

    /**
     * @Route("/{id}/edit/{idClasse}", name="edit_absence")
     */
    public function editAction(Request $request, Absence $absence)
    {
        $em=$this->getDoctrine()->getManager();
        $id=$request->attributes->get('idClasse');
       
        $editForm = $this->createForm('UserBundle\Form\AbsenceType', $absence,array('idClasse'=>$id));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('absence_index');
        }

         $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        return $this->render('absence/edit.html.twig', array(
            'absence' => $absence,
            'edit_form' => $editForm->createView(),
            'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox)
        );
    }

}

