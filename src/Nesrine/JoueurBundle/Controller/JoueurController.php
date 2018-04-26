<?php

namespace Nesrine\JoueurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Nesrine\JoueurBundle\Entity\Joueur;
use Symfony\Component\HttpFoundation\Request;
use Nesrine\JoueurBundle\Form\JoueurType;
use Symfony\Component\HttpFoundation\Response;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;



class JoueurController extends Controller
{

    public function IndexAction()
    {
        {
            $pieChart = new PieChart();
            $em= $this->getDoctrine();
            $joueurs = $em->getRepository(Joueur::class)->findAll();
            $totalButs=0;
            foreach($joueurs as $joueur) {
                $totalButs=$totalButs+$joueur->getnbbutsJ();
            }
            $data= array();
            $stat=['joueur', 'nbbutsJ'];
            $nb=0;
            array_push($data,$stat);
            foreach($joueurs as $joueur) {
                $stat=array();
                array_push($stat,$joueur->getnomEquipe(),(($joueur->getnbbutsJ()) *100)/$totalButs);
                $nb=($joueur->getnbbutsJ() *100)/$totalButs;
                $stat=[$joueur->getnomEquipe(),$nb];
                array_push($data,$stat);
            }
            $pieChart->getData()->setArrayToDataTable(
                $data
            );
            $pieChart->getOptions()->setTitle('Pourcentages de nombre de buts par equipe');
            $pieChart->getOptions()->setHeight(500);
            $pieChart->getOptions()->setWidth(900);
            $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
            $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
            $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
            $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
            $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);
            return $this->render('NesrineJoueurBundle:Joueur:Index.html.twig', array('piechart' =>
                $pieChart));
        }
    }

    public function affichageAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $nom=$request->get('nom');
        $joueurs=$em->getRepository("NesrineJoueurBundle:Joueur")->findbyJoueur($nom);
        $gardiens=$em->getRepository('NesrineJoueurBundle:Joueur')->findBy(array('emplacementJ'=>'Gardien'));
        $milieux=$em->getRepository('NesrineJoueurBundle:Joueur')->findBy(array('emplacementJ'=>'Milieu'));
        $attaquants=$em->getRepository('NesrineJoueurBundle:Joueur')->findBy(array('emplacementJ'=>'Attaquant'));
        $defenseurs=$em->getRepository('NesrineJoueurBundle:Joueur')->findBy(array('emplacementJ'=>'Défenseur'));
        $excellent=$em->getRepository('NesrineJoueurBundle:Joueur')->findBy(array('appreciationJ'=>'Excellent'));
        $bonne=$em->getRepository('NesrineJoueurBundle:Joueur')->findBy(array('appreciationJ'=>'Bonne'));
        $moyen=$em->getRepository('NesrineJoueurBundle:Joueur')->findBy(array('appreciationJ'=>'Moyen'));
        $mauvais=$em->getRepository('NesrineJoueurBundle:Joueur')->findBy(array('appreciationJ'=>'Mauvais'));
        return $this->render('NesrineJoueurBundle:Joueur:affichage.html.twig', array(
            'm'=>$joueurs,'g'=>$gardiens,'b'=>$milieux,'a'=>$attaquants,'d'=>$defenseurs,'f'=>$excellent,'g'=>$bonne,'h'=>$moyen,'i'=>$mauvais));
    }

    public function affichageFrontAction(Request $request)
    {

        $em=$this->getDoctrine()->getManager();
        $ListJoueurs=$em->getRepository('NesrineJoueurBundle:Joueur')->findAll();
        $joueurs  = $this->get('knp_paginator')->paginate(
            $ListJoueurs,
            $request->query->get('page', 1) /*current page number*/,
            3 /*images per page*/
        );

        return $this->render('NesrineJoueurBundle:Joueur:affichageFront.html.twig', array(
            'm'=>$joueurs));
    }


    public function deleteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $joueur=$em->find(Joueur::class,$id);
        $em->remove($joueur);
        $em->flush();
        return $this->redirectToRoute('PageAffichage');
    }
    public function ajoutAction(Request $request)
    {
        $joueur = new Joueur();

        $Form = $this->createForm(JoueurType::class,$joueur);
        $Form->handleRequest($request);
        if($Form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $joueur->uploadProfilePicture();
            $em->persist($joueur);
            $em->flush();
            return $this->redirectToRoute('PageAffichage');


        }

        return $this->render('NesrineJoueurBundle:Joueur:ajout.html.twig',
            array('form'=>$Form->createView()));

    }

    function updateAction($id,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $joueur=$em->getRepository('NesrineJoueurBundle:Joueur')->find($id);
        $Form=$this->createForm(JoueurType::class,$joueur);
        if($Form->handleRequest($request)->isValid())
        {
            $em->persist($joueur);
            $em->flush();
            return $this->redirectToRoute('PageAffichage');
        }
        return $this->render('NesrineJoueurBundle:Joueur:ajout.html.twig'
            ,array('form'=>$Form->createView()));

    }

    public function rechercheAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $joueurs=$em->getRepository("NesrineJoueurBundle:Joueur")->findAll();
        if($request->isMethod('POST')){
            $nomEquipe=$request->get('nomEquipe');
            $joueurs=$em->getRepository("NesrineJoueurBundle:Joueur")->findBy(array("nomEquipe"=>$nomEquipe));
        }
        return $this->render("NesrineJoueurBundle:Joueur:affichage.html.twig", array('joueurs'=>$joueurs));

}


}
