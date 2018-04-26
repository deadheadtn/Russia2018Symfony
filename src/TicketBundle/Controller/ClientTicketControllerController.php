<?php

namespace TicketBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;
use TicketBundle\Entity\Tickets;
use TicketBundle\Form\TicketsType;

class ClientTicketControllerController extends Controller
{
    public function AffichageTicketAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $type=$request->get('type');
        $ticket=$em->getRepository("TicketBundle:Tickets")->findbyType($type);
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $ticket,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',1)

        );
        return $this->render('TicketBundle:ClientTicketController:affichage_ticket.html.twig', array('ticket'=>$result
            // ...
        ));
    }
    public function AjoutTicketAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ticket = new tickets();
        $form = $this->createForm(TicketsType::class,$ticket);
        if($form->handleRequest($request)->isValid())
        {
            //var_dump($marque); afficher le contenu du $marque pour test
            $em=$this->getDoctrine()->getManager();
            $ticket->setDateAjout(new \DateTime('now')) ;
            $em->persist($ticket);
            $em->flush();
            return $this->redirectToRoute('_affichage_ticket');
        }
        return $this->render('TicketBundle:ClientTicketController:ajout_ticket.html.twig',array('f'=>$form->createView()));
    }

}
