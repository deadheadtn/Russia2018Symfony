<?php

namespace RUSSIA2\PIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RUSSIA2PIBundle:Default:index.html.twig');
    }
}
