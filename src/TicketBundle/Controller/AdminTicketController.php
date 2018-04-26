<?php

namespace TicketBundle\Controller;

use AppBundle\Entity\Tickets;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminTicketController extends Controller
{
    public function AffichageAction(Request $request)

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


        return $this->render("TicketBundle:AdminTicket:affichage.html.twig", array('tickets'=>$result)
            // ...
        );
    }

    public function AjoutAction(Request $request)
    {

        return $this->render('TicketBundle:AdminMatch:Ajout.html.twig',array());
    }


    public function ModifAction()
    {

    }

    public function DeleteAction($sup)
    {
        $em=$this->getDoctrine()->getManager();
        $ticket=$em->getRepository('AppBundle:Tickets')->find($sup);
        $em->remove($ticket);
        $em->flush();
        return $this->redirectToRoute('_affichage');

            // ...

    }

    public function RechercheAction()
    {
        return $this->render('TicketBundle:AdminTicket:recherche.html.twig', array(
            // ...
        ));
    }


}

