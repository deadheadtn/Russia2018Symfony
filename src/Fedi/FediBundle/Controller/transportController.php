<?php

namespace Fedi\FediBundle\Controller;

use Fedi\FediBundle\Entity\Reservationt;
use Fedi\FediBundle\Entity\Transport;
use Fedi\FediBundle\Form\TransportType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class transportController extends Controller
{
    public function transportAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $type=$request->get('type');
        $ev=$em->getRepository("FediFediBundle:Transport")->Searchtype($type);
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
    public function transportclientAction(Request $request)
    {
        $transport = new Transport();
        $reservationt = new Reservationt();
        if ($request->getMethod() == "POST") {


            $x = $request->get('type');
            $y = $request->get('depart');
            $z = $request->get('destination');
            $a = $request->get('dateDepart');
            $b = $request->get('dateArrivee');
            $c = $request->get('nbrVoyageurs');

            $reservationt->settype($x);
            $reservationt->setdepart($y);
            $reservationt->setdestination($z);
            $reservationt->setdateDepart($a);
            $reservationt->setdateArrivee($b);
            $reservationt->setnbrVoyageurs($c);


            $em = $this->getDoctrine()->getManager();
            $em->persist($reservationt);
            $em->flush();

            return $this->redirectToRoute('transport');
        }

        $em=$this->getDoctrine()->getManager();
        $ev=$em->getRepository("FediFediBundle:Transport")->findAll();
        return$this->render('FediFediBundle:transport:transportclient.html.twig',array('transports'=>$ev));
    }
}
