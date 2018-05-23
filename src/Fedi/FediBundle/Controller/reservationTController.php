<?php

namespace Fedi\FediBundle\Controller;

use Fedi\FediBundle\Entity\Reservationt;
use Fedi\FediBundle\Entity\Transport;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class reservationTController extends Controller
{

    public function AjoutR2Action($id)
    {
        $em = $this->getDoctrine()->getManager();

        $transport = new Transport();
        $reservationt = new Reservationt();
        $transport= $em->getRepository('FediFediBundle:Transport')->find($id);

        $reservationt->settype($transport->gettype());
        $reservationt->setdateArrivee($transport->getdateArrivee());
        $reservationt->setdateDepart($transport->getdateDepart());
        $reservationt->setdepart($transport->getdepart());
        $reservationt->setnbrVoyageurs($transport->getnbrVoyageurs());
        $reservationt->setdestination($transport->getdestination());
        $reservationt->setidTransport($transport->getidTransport());

        $em->persist($reservationt);
            $em->flush();
            return new Response('Votre Reservation a ete effectue avec succee');


        return $this->render('FediFediBundle:reservation:ajouttransport.html.twig');

    }
    public function transportadminAction()
    {
        $em=$this->getDoctrine()->getManager();
        $ev=$em->getRepository("FediFediBundle:Reservationt")->findAll();
        return$this->render('FediFediBundle:reservation:affichereservationTran.html.twig',array('reservationts'=>$ev));
    }
}
