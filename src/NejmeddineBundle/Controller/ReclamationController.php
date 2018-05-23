<?php

namespace NejmeddineBundle\Controller;

use NejmeddineBundle\Entity\Reclamation;
use UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\JsonResponse;
use \Symfony\Component\HttpFoundation\Response;
/**
 * Reclamation controller.
 *
 */
class ReclamationController extends Controller
{
    /**
     * Lists all reclamation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reclamations = $em->getRepository('NejmeddineBundle:Reclamation')->findAll();

        return $this->render('NejmeddineBundle:Reclamationviews:index.html.twig', array(
            'reclamations' => $reclamations,
        ));
    }

    /**
     * Creates a new reclamation entity.
     *
     */

    public function newfrontAction(Request $request)
    {
        $reclamation = new Reclamation();

        $form = $this->createForm('NejmeddineBundle\Form\ReclamationType', $reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $Date = new \DateTime('now');
            $reclamation->setDateRec($Date->format('M-D-Y'));
            $user = $this->getUser();
            $reclamation->setIdUtilisateur($user);
            $reclamation->setEtatRec('0');
            $em->persist($reclamation);
            $em->flush();

            return $this->redirectToRoute('russia2_pi_homepage', array('idReclamation' => $reclamation->getIdreclamation()));
        }

        return $this->render('RUSSIA2PIBundle:Default:reclamation.html.twig', array(
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ));
    }
    public function newjsonAction(Request $request)
    {
        $reclamation = new Reclamation();
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->find($request->get('id_user'));
        $reclamation->setSujetRec($request->get('sujet'));
        $reclamation->setDescriptionRec($request->get('Description'));
        $Date = new \DateTime('now');
        $reclamation->setDateRec($Date->format('M-D-Y'));
        $reclamation->setIdUtilisateur($user);
        $reclamation->setEtatRec('0');
        $em->persist($reclamation);
        $em->flush();
        $serializer = $this->get('jms_serializer');
        $response = $serializer->serialize(array('ok'=>'success'),'json');
        return new Response($response);
    }
    public function indexJsonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Reclamation::class);
        $repository->findOneBy(
            ['idUtilisateur' => $request->get('id')]);
        $user=$repository->findAll();
        $serializer = $this->get('jms_serializer');
        $response = $serializer->serialize(array('Root'=>$user),'json');
        return new JsonResponse(json_decode($response));
    }

    public function editetatAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository('NejmeddineBundle:Reclamation')->find($id);
        $reclamation->setEtatRec("2");
        $em->persist($reclamation);
        $serializer = $this->get('jms_serializer');
        $response = $serializer->serialize(array('Root'=>'ok'),'json');
        return new JsonResponse(json_decode($response));
    }

    public function editAction(Request $request, Reclamation $reclamation)
    {
        $editForm = $this->createForm('NejmeddineBundle\Form\ReclamationType');
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $users=$em->getRepository('NejmeddineBundle:User')->find($reclamation->getIdUtilisateur());
            $message= \Swift_Message::newInstance()->setSubject($editForm->get('sujetRec')->getData())
                ->setFrom('russia2018.pi@gmail.com')
                ->setTo($users->getemail())->setBody(
                    $this->renderView(
                        'NejmeddineBundle:Reclamationviews:Reponse.twig.html',
                        array('name' => $users->getnom(),'text'=>$editForm->get('descriptionRec')->getData()), 'text/html'));
            $this->get('mailer')->send($message);
            return $this->redirectToRoute('admin_manage_reclamation_edit', array('idReclamation' => $reclamation->getIdreclamation()));
        }

        return $this->render('NejmeddineBundle:Reclamationviews:edit.html.twig', array(
            'edit_form' => $editForm->createView()
        ));
    }

    /**
     * Deletes a reclamation entity.
     *
     */
    public function deleteAction(Request $request, Reclamation $reclamation)
    {
        $form = $this->createDeleteForm($reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reclamation);
            $em->flush();
        }

        return $this->redirectToRoute('admin_manage_reclamation_index');
    }
    public function showAction(reclamation $reclamation)
    {
        $deleteForm = $this->createDeleteForm($reclamation);

        return $this->render('NejmeddineBundle:Reclamationviews:show.html.twig', array(
            'reclamation' => $reclamation,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Creates a form to delete a reclamation entity.
     *
     * @param Reclamation $reclamation The reclamation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reclamation $reclamation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_manage_reclamation_delete', array('idReclamation' => $reclamation->getIdreclamation())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
