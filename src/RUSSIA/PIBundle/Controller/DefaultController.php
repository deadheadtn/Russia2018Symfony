<?php

namespace RUSSIA\PIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RUSSIAPIBundle:Default:index.html.twig');
    }
}
