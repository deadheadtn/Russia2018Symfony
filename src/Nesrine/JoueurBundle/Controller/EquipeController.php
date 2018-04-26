<?php

namespace Nesrine\JoueurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nesrine\JoueurBundle\Entity\Equipe;
use Nesrine\JoueurBundle\Entity\Joueur;
use Symfony\Component\HttpFoundation\Request;
use Nesrine\JoueurBundle\Form\EquipeType;
use Nesrine\JoueurBundle\Form\JoueurType;
class EquipeController extends Controller
{
    public function affichageAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $a=$em->getRepository('NesrineJoueurBundle:Equipe')->findBy(array('groupe'=>'A'));
        $b=$em->getRepository('NesrineJoueurBundle:Equipe')->findBy(array('groupe'=>'B'));
        $c=$em->getRepository('NesrineJoueurBundle:Equipe')->findBy(array('groupe'=>'C'));
        $d=$em->getRepository('NesrineJoueurBundle:Equipe')->findBy(array('groupe'=>'D'));
        $e=$em->getRepository('NesrineJoueurBundle:Equipe')->findBy(array('groupe'=>'E'));
        $f=$em->getRepository('NesrineJoueurBundle:Equipe')->findBy(array('groupe'=>'F'));
        $g=$em->getRepository('NesrineJoueurBundle:Equipe')->findBy(array('groupe'=>'G'));
        $h=$em->getRepository('NesrineJoueurBundle:Equipe')->findBy(array('groupe'=>'H'));
        $equipes=$em->getRepository('NesrineJoueurBundle:Equipe')->findAll();
        return $this->render('NesrineJoueurBundle:Equipe:affichage.html.twig', array(
            'm'=>$equipes,'a'=>$a,'b'=>$b,'c'=>$c,'d'=>$d,'e'=>$e,'f'=>$f,'g'=>$g,'h'=>$h));
    }
    public function affichageFrontAction(Request $request)
    {

        $em=$this->getDoctrine()->getManager();
        $ListEquipes=$em->getRepository('NesrineJoueurBundle:Equipe')->findAll();
        $equipes  = $this->get('knp_paginator')->paginate(
            $ListEquipes,
            $request->query->get('page', 1) /*current page number*/,
            3 /*images per page*/
        );

        return $this->render('NesrineJoueurBundle:Equipe:affichageFront.html.twig', array(
            'm'=>$equipes));
    }

    public function deleteAction($Id)
    {
        $em=$this->getDoctrine()->getManager();
        $equipe=$em->find(Equipe::class,$Id);
        $em->remove($equipe);
        $em->flush();
        return $this->redirectToRoute('PageAffichageEquipe');
    }
    public function ajoutAction(Request $request)
    {
        $equipe = new Equipe();

        $Form = $this->createForm(EquipeType::class,$equipe);
        $Form->handleRequest($request);
        if($Form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $equipe->uploadProfilePicture();
            $em->persist($equipe);
            $em->flush();
            return $this->redirectToRoute('PageAffichageEquipe');


        }

        return $this->render('NesrineJoueurBundle:Equipe:ajout.html.twig',
            array('form'=>$Form->createView()));

    }
    function updateAction($id,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $equipe=$em->getRepository('NesrineJoueurBundle:Equipe')->find($id);
        $Form=$this->createForm(EquipeType::class,$equipe);
        if($Form->handleRequest($request)->isValid())
        {
            $em->persist($equipe);
            $em->flush();
            return $this->redirectToRoute('PageAffichageEquipe');
        }
        return $this->render('NesrineJoueurBundle:Equipe:ajout.html.twig'
            ,array('form'=>$Form->createView()));

    }



}
