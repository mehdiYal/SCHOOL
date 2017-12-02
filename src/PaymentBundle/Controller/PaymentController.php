<?php

namespace PaymentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use PaymentBundle\Form\PaymentType;
use PaymentBundle\Entity\Payment;
use UserBundle\Entity\Eleve;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


/**
 * Annee controller.
 *
 * @Route("/payment")
 */
class PaymentController extends Controller
{
	/**
     * @Route("/payment", name="payment")
     */
    public function paymentAction()
    {
        $form = $this->get('form.factory')->createBuilder()
          ->add('classes', EntityType::class, array(
        'class' => 'SchoolBundle:Classe'
        ))->getForm();

        $payment = new Payment();
        $pay=$this->createForm(PaymentType::class,$payment);
        return $this->render('payment/payment.html.twig', array("form"=>$form->createView()
            ,"payment"=>$pay->createView()
        ));
    }

    /**
     * @Route("/getPayements", name="getPayements")
     */
    public function getPayementsAction(Request $request)
    {

        $repository=$this->getDoctrine()->getRepository("UserBundle:Eleve");
        $eleve = new Eleve();
        $eleve=$repository->find($request->get('id'));

        $response =new JsonResponse();
        $response->setContent($eleve);
        return $response;
    }

    /**
     * @Route("/init", name="addAnnee")
     */
    public function initAction()
    {

        return $this->render('PaymentBundle:PaymentController:init.html.twig', array(
            // ...
        ));
    }

}
