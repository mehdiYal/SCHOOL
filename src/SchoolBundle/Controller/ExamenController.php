<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use SchoolBundle\Entity\Examen;
use SchoolBundle\Form\ExamenType;
use Symfony\Component\HttpFoundation\Request;


/**
 * Examen controller.
 *
 * @Route("/examen")
 */
class ExamenController extends Controller
{
    /**
     * @Route("/new", name="new_examen")
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

        $examen= new Examen();
        $statement = $connection->prepare("SELECT matiere_id FROM ens_mat WHERE enseignant_id = :enseignant_id");
        $statement->bindValue('enseignant_id', $id);
        $statement->execute();
        $matieres=$statement->fetchAll();
        $j=0;
        foreach ($matieres as $row) {
            $arrayId[$j]=$row['matiere_id'];
            $j++;
        }

        $form=$this->createForm(ExamenType::class,$examen,array('idEnseignant'=>$id,'idMatiere'=> $arrayId));
        $form->handleRequest($request);

        $examens=$em->getRepository('SchoolBundle:Examen')->findAll(array('enseignant_id'=> $id));
        
        if($form->isSubmitted() && $form->isValid()){
            extract($_POST);

            $timezoneDataStartPosDeb = strpos($heureDeb," GMT");
            $formattedStringDeb = substr($heureDeb, 0, $timezoneDataStartPosDeb);
            
            $timezoneDataStartPosFin = strpos($heureFin," GMT");
            $formattedStringFin = substr($heureFin, 0, $timezoneDataStartPosFin);
            
            $examen->setEnseignant($user);
            $classe=$form['classe']->getData();
            $examen->setAnnee($classe->getAnnee());
            $examen->setDate(new \DateTime($formattedStringDeb));
            $examen->setHeureDeb(new \DateTime($formattedStringDeb));
            $examen->setHeureFin(new \DateTime($formattedStringFin));
            $em->persist($examen);
            $em->flush();
           
            return $this->render('examen/add.html.twig',array("form"=>$form->createView(),"data"=>$examens,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
        }
        return $this->render('examen/add.html.twig',array("form"=>$form->createView(),"data"=>$examens,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
    }

    /**
     * @Route("/show/{id}", name="show_examen")
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
            
        $examen=$em->getRepository('SchoolBundle:Examen')->findAll(array('enseignant_id'=> $id));
        
        return $this->render('examen/show.html.twig',array("data"=>$examen,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox,'recipient'=>$user));
    
    }


}
