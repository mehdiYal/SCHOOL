<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SchoolBundle\Entity\Classe;
use UserBundle\Entity\Eleve;
use SchoolBundle\Form\ClasseType;
use SchoolBundle\Entity\EnsMat;
use SchoolBundle\Form\EnsMatAddType;
use Symfony\Component\HttpFoundation\Request;


/**
 * Classe controller.
 *
 * @Route("/classe")
 */
class ClasseController extends Controller
{
    /**
     * @Route("/add", name="addClasse")
     */
    public function addAction(Request $request)
    {
        $classe = new Classe();
        $form=$this->createForm(ClasseType::class,$classe);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $classe->setEcole($this->getUser()->getEcole());
            $em=$this->getDoctrine()->getManager();
            $em->persist($classe);
            $em->flush();
            return $this->redirectToRoute('listClasses');
        }

        return $this->render('classesViews/addClasse.html.twig',array("edit"=>false,"form"=>$form->createView()));
    }


    /**
     * @Route("/list", name="listClasses")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("SchoolBundle:Classe");
        $classes=$repository->findAll();
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        return $this->render('classesViews/listClasses.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,"classes"=>$classes));
    }

     /**
     * @Route("/edit/{id}", name="editClasse")
     */
    public function editAction(Request $request,Classe $classe)
    {
        $form=$this->createForm(ClasseType::class,$classe);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listClasses');
        }

        return $this->render('classesViews/addClasse.html.twig',array("edit"=>true,"form"=>$form->createView()));
    }


     /**
     * @Route("/remove/{id}", name="removeClasse")
     */
    public function removeAction(Classe $classe)
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($classe);
        $em->flush();
        return $this->redirectToRoute('listClasses'); 
    }

    /**
     * @Route("/affectProf/{id}", name="affectProf")
     */
    public function affectProf(Request $request,Classe $classe)
    {
        $ensMat = new EnsMat();
        $form=$this->createForm(EnsMatAddType::class,$ensMat);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $ensMat->setClasse($classe);
            $em=$this->getDoctrine()->getManager();
            $em->persist($ensMat);
            $em->flush();
            return $this->redirectToRoute('affectProf',array('id'=>$classe->getId()));
        }
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        return $this->render('classesViews/affecterProf.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,"form"=>$form->createView(),"classe"=>$classe));
    }

    /**
     * @Route("/affectEleves/{id}", name="affectEleves")
     */
    public function affectEleves(Classe $classe)
    {
        $repository=$this->getDoctrine()->getRepository("UserBundle:Eleve");
        $eleves=$repository->findBy(array('classe'=>null,'ecole' => $classe->getEcole(),'annee'=>$classe->getAnnee()));
        return $this->render('classesViews/affecterEleve.html.twig',array("eleves"=>$eleves,"classe"=>$classe));
    }

    /**
     * @Route("/affectEleveClasse/{id}/{eleveID}", name="affectEleveClasse")
     */
    public function affectEleveClasse(Classe $classe,$eleveID)
    {
        $eleve = new Eleve();
        $repository=$this->getDoctrine()->getRepository("UserBundle:Eleve");
        $eleve=$repository->find($eleveID);
        $eleve->setClasse($classe);
        $em=$this->getDoctrine()->getManager();
        $em->persist($eleve);
        $em->flush();
        $eleves=$repository->findBy(array('classe'=>null,'ecole' => $classe->getEcole(),'annee'=>$classe->getAnnee()));
        return $this->render('classesViews/affecterEleve.html.twig',array("eleves"=>$eleves,"classe"=>$classe));
    }

    /**
     * @Route("/remettreEleveClasse/{id}/{eleveID}", name="remettreEleveClasse")
     */
    public function remettreEleveClasse(Classe $classe,$eleveID)
    {
        $eleve = new Eleve();
        $repository=$this->getDoctrine()->getRepository("UserBundle:Eleve");
        $eleve=$repository->find($eleveID);
        $eleve->setClasse(null);
        $em=$this->getDoctrine()->getManager();
        $em->persist($eleve);
        $em->flush();
        $eleves=$repository->findBy(array('classe'=>null,'ecole' => $classe->getEcole(),'annee'=>$classe->getAnnee()));
        return $this->render('classesViews/affecterEleve.html.twig',array("eleves"=>$eleves,"classe"=>$classe));
    }

    /**
     * @Route("/listeEns/{id}}", name="classe_listeEns")
     */
    public function listeEnsAction(Classe $classe)
    {
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();
        return $this->render('classesViews/listeEns.html.twig',array('newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,"classe"=>$classe));
    }

    


}