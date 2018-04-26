<?php

namespace Nesrine\JoueurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nesrine\JoueurBundle\Entity\Staff;
use Symfony\Component\HttpFoundation\Request;
use Nesrine\JoueurBundle\Form\StaffType;

class StaffController extends Controller
{
    public function affichageAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $staffs=$em->getRepository('NesrineJoueurBundle:Staff')->findAll();
        return $this->render('NesrineJoueurBundle:Staff:affichage.html.twig', array(
            'm'=>$staffs));
    }
    public function deleteAction($ID)
    {
        $em=$this->getDoctrine()->getManager();
        $staff=$em->find(Staff::class,$ID);
        $em->remove($staff);
        $em->flush();
        return $this->redirectToRoute('PageAffichageStaff');
    }
    public function ajoutAction(Request $request)
    {
        $staff = new Staff();

        $Form = $this->createForm(StaffType::class,$staff);
        $Form->handleRequest($request);
        if($Form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($staff);
            $em->flush();
            return $this->redirectToRoute('PageAffichageStaff');


        }

        return $this->render('NesrineJoueurBundle:Staff:ajout.html.twig',
            array('form'=>$Form->createView()));

    }
    function updateAction($id,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $staff=$em->getRepository('NesrineJoueurBundle:Staff')->find($id);
        $Form=$this->createForm(StaffType::class,$staff);
        if($Form->handleRequest($request)->isValid())
        {
            $em->persist($staff);
            $em->flush();
            return $this->redirectToRoute('PageAffichageStaff');
        }
        return $this->render('NesrineJoueurBundle:Staff:ajout.html.twig'
            ,array('form'=>$Form->createView()));

    }
}
