<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use SchoolBundle\Entity\Bulletin;
use SchoolBundle\Form\BulletinType;
use Symfony\Component\HttpFoundation\Request;


/**
 * Bulletin controller.
 *
 * @Route("/bulletin")
 */
class BulletinController extends Controller
{
    /**
     * @Route("/eleve/{id}", name="get_bulletin")
     * @Method({"GET", "POST"})
     */
    public function getAction(Request $request)
    {   
        $user = $this->getUser();
        $provider = $this->container->get('fos_message.provider');
        $inbox = $provider->getInboxThreads();
        $sentbox = $provider->getSentThreads();
        $nb=$provider->getNbUnreadMessages();

        $id=$request->attributes->get('id');

        $em=$this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $eleve=$em->getRepository('UserBundle:Eleve')->findOneBy(array('id'=> $id));
        
        $statement = $connection->prepare("SELECT * FROM matiere_eleve AS m WHERE eleve_id = :eleve_id");
        $statement->bindValue('eleve_id', $id);
        $statement->execute();
        $notes = $statement->fetchAll();

        $arrayMatieres= array_reduce($notes, 
        function($list, $note)
        {
            $list[$note['matiere_id']][] = $note;
            return $list;
        }, []);
        $data = array();
         $j=0;
        foreach ($arrayMatieres as $matiere) {
            $m=$em->getRepository('SchoolBundle:Matiere')->findOneBy(array('id'=> $matiere[$j]['matiere_id']));
            $data[$j]['matiere']=$m->getNom();
            for($i=0;$i<count($matiere);$i++){
                $data[$j][$i]=array();
                $data[$j][$i]['note']=$matiere[$i]['note'];
                $ev=$em->getRepository('SchoolBundle:Evaluation')->findOneBy(array('id'=> $matiere[$i]['evaluation_id']));
                $data[$j][$i]['evaluation']=$ev->getNom();
            }
            $j++;
        }
        
        return $this->render('bulletin/show.html.twig',array("data"=>$data,"eleve" => $eleve,'newMessages'=>$nb,'inbox'=>$inbox,"sentbox"=>$sentbox));
    
        
    }
}
