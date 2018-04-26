<?php

namespace TicketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TicketBundle\Entity\SituationEquipe;
use TicketBundle\Form\SituationEquipeType;

class AdminMatchController extends Controller
{
    public function AffichageStandingsAction()
    {

        $em = $this->getDoctrine()->getManager();
        $classement = $em->getRepository("TicketBundle:SituationEquipe")->findAll();

        return $this->render('TicketBundle:AdminMatch:affichage_standings.html.twig', array('classement'=>$classement)
            // ...
        );
    }
    function AjoutAction(Request $request)
    {
        $situation = new SituationEquipe();
        $form = $this->createForm(MarqueType::class,$situation);
        if($form->handleRequest($request)->isValid())
        {
            //var_dump($marque); afficher le contenu du $marque pour test
            $em=$this->getDoctrine()->getManager();
            $em->persist($situation);
            $em->flush();
            return new Response('Ajout avec succes');
        }
        return $this->render('TicketBundle:AdminMatch:Ajout.html.twig',array('f'=>$form->createView()));
    }
    public function ModifierAction($s,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $situation=$em->getRepository('TicketBundle:SituationEquipe')->find($s);

        $form=$this->createForm(SituationEquipeType::class,$situation);
        if($form ->handleRequest($request)->isValid())
        {
            $em->persist($situation);
            $em->flush();
            return $this->redirectToRoute('_affichage_standings');
        }
        return $this->render('@Ticket/AdminMatch/modifier',array('f'=>$form->createView()));
    }

}
