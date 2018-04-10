<?php

namespace Fedi\FediBundle\Controller;

use Fedi\FediBundle\Form\ReservationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Fedi\FediBundle\Entity\Reservation;
use Symfony\Component\HttpFoundation\Response;

class reservationHController extends Controller
{
    public function AjoutRAction(Request $request)
    {
        $reservation=new Reservation();
        $form=$this->createForm(ReservationType::class,$reservation);
        if($form->handleRequest($request)->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();
            return new Response('Ajout avec succées');
        }
        return$this->render('FediFediBundle:reservation:ajout.html.twig',array('f'=>$form->createView()
        ));
    }
}
