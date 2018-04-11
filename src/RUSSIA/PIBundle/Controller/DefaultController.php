<?php

namespace RUSSIA\PIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller

{

    public function indexAction()
    {
        return $this->render('RUSSIAPIBundle:Default:index.html.twig');
    }
<<<<<<< Updated upstream
=======
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/admin",name="russiapi_homepage")
     * @Security("has_role('ROLE_ADMIN')")
     **/

    public function AdminAction()
    {
        return $this->render('RUSSIAPIBundle:Default:index.html.twig');
    }

>>>>>>> Stashed changes

}


