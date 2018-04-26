<?php

namespace TicketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientMatchControllerController extends Controller
{
    public function AffichageMatchAction()
    {
        $em = $this->getDoctrine()->getManager();
        $classement = $em->getRepository("TicketBundle:SituationEquipe")->findAll();

        return $this->render('TicketBundle:ClientMatchController:affichage_match.html.twig', array('classement'=>$classement
            // ...
        ));
    }

}
