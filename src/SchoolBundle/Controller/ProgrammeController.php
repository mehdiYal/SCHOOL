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
<<<<<<< HEAD
 * @Route("/program")
=======
 * @Route("/programme")
>>>>>>> 54cd4f900f4952129c238960f1824c2e2314b6df
 */
class ProgrammeController extends Controller
{
     /**
     * Creates a new artwork entity.
     *
<<<<<<< HEAD
     * @Route("/new", name="program_new")
=======
     * @Route("/new", name="programme_new")
>>>>>>> 54cd4f900f4952129c238960f1824c2e2314b6df
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
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
        $em->flush();*/
    }

     /**
<<<<<<< HEAD
     * @Route("/show/class/{id}", name="program_show_class")
=======
     * @Route("/show/classe/{id}", name="showClasse")
>>>>>>> 54cd4f900f4952129c238960f1824c2e2314b6df
     */
    public function showClasseAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager();
        $id=$request->attributes->get('id');
        $data['programme']= $em->getRepository('SchoolBundle:Programme')->findBy(array('classe'=>$id));
        $data['jour']= $em->getRepository('SchoolBundle:Jour')->findAll();
        $data['horraire']= $em->getRepository('SchoolBundle:Horraire')->findAll();
        return $this->render('programme/show.html.twig',array("data"=>$data));
      
    }   

    /**
<<<<<<< HEAD
     * @Route("/show/enseignant/{id}", name="program_show_enseignant")
=======
     * @Route("/show/enseignant/{id}", name="showEnseignant")
>>>>>>> 54cd4f900f4952129c238960f1824c2e2314b6df
     */
    public function showEnseignantAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id=$request->attributes->get('id');
        $data['programme']= $em->getRepository('SchoolBundle:Programme')->findBy(array('enseignant'=>$id));
        $data['jour']= $em->getRepository('SchoolBundle:Jour')->findAll();
        $data['horraire']= $em->getRepository('SchoolBundle:Horraire')->findAll();
        return $this->render('programme/show.html.twig',array("data"=>$data));
    }   

}
