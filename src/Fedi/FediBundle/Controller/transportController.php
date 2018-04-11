<?php

namespace Fedi\FediBundle\Controller;

use Fedi\FediBundle\Entity\Transport;
use Fedi\FediBundle\Form\TransportType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class transportController extends Controller
{
    public function transportAction()
    {
        $em=$this->getDoctrine()->getManager();
        $ev=$em->getRepository("FediFediBundle:Transport")->findAll();
        return$this->render('FediFediBundle:transport:transport.html.twig',array('transports'=>$ev));
    }
    public function Ajout2Action(Request $request)
    {
        $transport=new Transport();
        $form=$this->createForm(TransportType::class,$transport);
        if($form->handleRequest($request)->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($transport);
            $em->flush();
            return new Response('Ajout avec succées');
        }
        return$this->render('FediFediBundle:transport:ajout.html.twig',array('f'=>$form->createView()
        ));
    }
    public function DeleteAction($s)
    {
        $em=$this->getDoctrine()->getManager();
        $transport=$em->getRepository('FediFediBundle:Transport')->find($s);
        $em->remove($transport);
        $em->flush();
        return $this->redirectToRoute('transport');
    }
    public function ModifierAction($s,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $transport=$em->getRepository('FediFediBundle:Transport')->find($s);

        $form=$this->createForm(TransportType::class,$transport);
        if($form ->handleRequest($request)->isValid())
        {
            $em->persist($transport);
            $em->flush();
            return $this->redirectToRoute('transport');
        }
        return $this->render('FediFediBundle:transport:ajout.html.twig',array('f'=>$form->createView()
        ));
    }
}
