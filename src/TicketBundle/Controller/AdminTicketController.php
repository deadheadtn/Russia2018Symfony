<?php

namespace TicketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminTicketController extends Controller
{
    public function AffichageAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository("AppBundle:Tickets")->findAll();
        return $this->render("TicketBundle:AdminTicket:affichage.html.twig", array('tickets'=>$ticket)
            // ...
        );
    }

    public function AjoutAction()
    {
        return $this->render('TicketBundle:AdminTicket:ajout.html.twig', array(
            // ...
        ));
    }

    public function ModifAction()
    {
        return $this->render('TicketBundle:AdminTicket:modif.html.twig', array(
            // ...
        ));
    }

    public function DeleteAction()
    {
        return $this->render('TicketBundle:AdminTicket:delete.html.twig', array(
            // ...
        ));
    }

    public function RechercheAction()
    {
        return $this->render('TicketBundle:AdminTicket:recherche.html.twig', array(
            // ...
        ));
    }

}
