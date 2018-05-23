<?php

namespace Fedi\FediBundle\Controller;

use Fedi\FediBundle\Entity\Hotel;
use Fedi\FediBundle\Entity\User ;
use Fedi\FediBundle\FediFediBundle;
use Fedi\FediBundle\Form\HotelType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class hotelController extends Controller
{
    public function hotelAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $ev=$em->getRepository("FediFediBundle:Hotel")->findAll();



        return$this->render('FediFediBundle:hotel:hotel.html.twig',array('hotels'=>$ev));
    }
    public function affichehotelAction()
    {
        $em=$this->getDoctrine()->getManager();
        $ev=$em->getRepository("FediFediBundle:Hotel")->findAll();
        return $this->render('FediFediBundle:hotel:hotel.html.twig', array('hotels'=>$ev));

    }
    public function AjoutAction(Request $request)
    {
        $hotel=new Hotel();
        if($request->getMethod()=="POST")
        {


            $x=$request->get('nomHotel');
            $y=$request->get('nbrEtoile');
            $z=$request->get('ville');
            $a=$request->get('description');
            $b=$request->get('service');
            $c=$request->get('adresse');



            $hotel->setnomHotel($x);
            $hotel->setnbrEtoile($y);
            $hotel->setville($z);
            $hotel->setdescription($a);
            $hotel->setservice($b);
            $hotel->setadresse($c);
            $em=$this->getDoctrine()->getManager();
            $em->persist($hotel);
            $em->flush();
            return $this->redirectToRoute('hotel');

        }
        return $this->render('FediFediBundle:hotel:ajout.html.twig', array(

        ));
    }
    public function DeleteAction($s)
    {
        $em=$this->getDoctrine()->getManager();
        $hotel=$em->getRepository('FediFediBundle:Hotel')->find($s);
        $em->remove($hotel);
        $em->flush();
        return $this->redirectToRoute('hotel');
    }
    public function ModifierAction($s,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $hotel=$em->getRepository('FediFediBundle:Hotel')->find($s);

        $form=$this->createForm(HotelType::class,$hotel);
        if($form ->handleRequest($request)->isValid())
        {
            $em->persist($hotel);
            $em->flush();
            return $this->redirectToRoute('hotel');
        }
        return $this->render('FediFediBundle:hotel:ajout.html.twig', array('f'=>$form->createView()
        ));
    }
    public function Ajout2Action(Request $request)
    {
        $hotel=new Hotel();
        $form=$this->createForm(HotelType::class,$hotel);
        if($form->handleRequest($request)->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($hotel);
            $em->flush();
            return $this->redirectToRoute('hotel');
        }
        return$this->render('FediFediBundle:hotel:ajout.html.twig',array('f'=>$form->createView()
        ));
    }
    public function hotelclientAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $ev=$em->getRepository("FediFediBundle:Hotel")->findAll();
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $ev,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',3)
        );
        return$this->render('FediFediBundle:hotel:hotelclient.html.twig',array('hotels'=>$result));
    }
    public function hotelclient2Action()
    {

        $latitude = '53.189776';
        $longitude = '45.012787';
        return $this->render('FediFediBundle:hotel:hotelinfo.html.twig',array('latitude' => $latitude,
            'longitude' => $longitude));

    }
}
