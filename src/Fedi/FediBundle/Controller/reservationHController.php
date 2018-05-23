<?php

namespace Fedi\FediBundle\Controller;

use Fedi\FediBundle\Entity\Hotel;
use Fedi\FediBundle\FediFediBundle;
use Fedi\FediBundle\Form\HotelType;
use Fedi\FediBundle\Form\ReservationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Fedi\FediBundle\Entity\Reservation;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\User;

class reservationHController extends Controller
{
    public function AjoutRAction(Request $request)
    {
        $user=new User();
        $hotel = new Hotel();
        $reservation = new Reservation();
        $s = $request->get('s');
        $form = $this->createForm(ReservationType::class, $reservation);
        $form2 = $this->createForm(HotelType::class, $hotel);
        if ($form->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $hotel = $em->getReposito__ry('FediFediBundle:Hotel')->find($s);
            $reservation->setidHotel($hotel);
            $reservation->setetatReservation("non_confirmer");
            $em->persist($reservation);
            $em->flush();
            return new Response('Ajout avec succées');
        }

        return $this->render('FediFediBundle:reservation:ajout.html.twig', array('f' => $form->createView()
        ));
    }
    public function hoteladminAction()
    {
        $em=$this->getDoctrine()->getManager();
        $ev=$em->getRepository("FediFediBundle:Reservation")->findAll();
        return$this->render('FediFediBundle:reservation:affichereservation.html.twig',array('reservations'=>$ev));
    }
    public function ModifierAction($s,Request $request)
    {

        $reservation=new Reservation();
        $s = $request->get('s');


        if($request->getMethod()=="POST") {
            $em = $this->getDoctrine()->getManager();
            $reservation=$em->getRepository('FediFediBundle:Reservation')->find($s);
            $x=$request->get('etatReservation');
            $reservation->setetatReservation($x);



            $em->persist($reservation);
            $em->flush();
            return new Response('Ajout avec succées');

        }
        return $this->render('FediFediBundle:reservation:etathotel.html.twig',array());
        }
}
