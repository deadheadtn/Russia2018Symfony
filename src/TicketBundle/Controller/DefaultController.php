<?php

namespace TicketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function ticketAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository("TicketBundle:Tickets")->findAll();
        return $this->render("TicketBundle:Ticket/Administration:AdminTicket.html.twig",array('tickets'=>$ticket ));
    }
}
