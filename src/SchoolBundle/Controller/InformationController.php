<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use SchoolBundle\Entity\TravailRealise;
use UserBundle\Entity\Eleve;
use SchoolBundle\Entity\Classe;
use SchoolBundle\Form\TravailRealiseType;
use Symfony\Component\HttpFoundation\Request;


/**
 * Information controller.
 *
 * @Route("/information")
 */
class InformationController extends Controller
{
    /**
     * @Route("/eleve/{id}", name="eleve_information")
     * @Method({"GET", "POST"})
     */
    public function showEleveAction(Classe $classe,Request $request)
    { 
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        $em = $this->getDoctrine()->getManager();

        $data['travailfait']=$em->getRepository('SchoolBundle:TravailRealise')->findBy(array('classe'=>$classe),array('date' => 'desc'));
        $data['travailafaire']=$em->getRepository('SchoolBundle:TravailaFaire')->findBy(array('classe'=>$classe),array('datelimite' => 'desc'));
               

        return $this->render('information/eleve.html.twig',array("data"=>$data,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));  
   
    }

    /**
     * @Route("/parent/", name="parent_information")
     * @Method({"GET", "POST"})
     */
    public function showParentAction(Request $request)
    { 
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        $em = $this->getDoctrine()->getManager();
        foreach ($this->getUser()->getEleves() as $eleve) {
            $data['travailfait'][]=$em->getRepository('SchoolBundle:TravailRealise')->findBy(array('classe'=>$eleve->getClasse()),array('date' => 'desc'));
            $data['travailafaire'][]=$em->getRepository('SchoolBundle:TravailaFaire')->findBy(array('classe'=>$eleve->getClasse()),array('datelimite' => 'desc'));
        }
               

        return $this->render('information/parent.html.twig',array("data"=>$data,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));  
   
    }


}
