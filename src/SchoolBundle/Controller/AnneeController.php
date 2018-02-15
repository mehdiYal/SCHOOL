<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SchoolBundle\Entity\Annee;
use SchoolBundle\Form\AnneeType;
use Symfony\Component\HttpFoundation\Request;


/**
 * Annee controller.
 *
 * @Route("/annee")
 */
class AnneeController extends Controller
{
    /**
     * @Route("/add", name="addAnnee")
     */
    public function addAction(Request $request)
    {
        $annee = new Annee();
        $form=$this->createForm(AnneeType::class,$annee);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em=$this->getDoctrine()->getManager();
            $em->persist($annee);
            $em->flush();
            return $this->redirectToRoute('listAnnees');
        }
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        return $this->render('anneesViews/addAnnee.html.twig',array("edit"=>false,"form"=>$form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }


    /**
     * @Route("/list", name="listAnnees")
     */
    public function showAction(Request $request)
    {
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        $repository=$this->getDoctrine()->getRepository("SchoolBundle:Annee");
        $annees=$repository->findAll();
        return $this->render('anneesViews/listAnnees.html.twig',array("annees"=>$annees,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }

     /**
     * @Route("/edit/{id}", name="editAnnee")
     */
    public function editAction(Request $request,Annee $annee)
    {
        $form=$this->createForm(AnneeType::class,$annee);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listAnnees');
        }
$provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        return $this->render('anneesViews/addAnnee.html.twig',array("edit"=>false,"form"=>$form->createView(),'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    }


     /**
     * @Route("/remove/{id}", name="removeAnnee")
     */
    public function removeAction(Annee $annee)
    {
         $em=$this->getDoctrine()->getManager();
        $em->remove($annee);
        $em->flush();
        return $this->redirectToRoute('listAnnees'); 
    }


}
