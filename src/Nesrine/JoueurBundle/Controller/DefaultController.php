<?php

namespace Nesrine\JoueurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultController extends Controller
{
    public function indexAction(){
        return $this->render('NesrineJoueurBundle:Default:index.html.twig');
    }


}

