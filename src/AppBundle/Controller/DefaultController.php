<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    public function indexJsonAction(Request $request)
    {
        $user = new User();
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->find($request->get('id_user'));
        $repository=array('id_user'=> '1');
        $serializer = $this->get('jms_serializer');
        $response = $serializer->serialize(array($repository),'json');
        return new Response($response);
    }
}
