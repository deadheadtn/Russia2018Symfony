<?php

namespace NejmeddineBundle\Controller;

use NejmeddineBundle\Entity\News;
use NejmeddineBundle\Form\NewsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class NewsController extends Controller
{
    public function AffichageNewsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $news= $em->getRepository('NejmeddineBundle:News')->findAll();
        return $this->render('NejmeddineBundle:ViewsNews:News.html.twig',array('liste'=>$news));
    }
    public function modifierNewsAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        var_dump($id);
       $news=$em->getRepository('NejmeddineBundle:News')->find($id);
        $form= $this->createForm(NewsType::class,$news);
        if($form->handleRequest($request)->isValid()){
            $em->persist($news);
            $em->flush();
        }
        return $this->render('NejmeddineBundle:ViewsNews:ModifierNews.html.twig',array('f'=>$form->createView()));
    }
}
