<?php

namespace NejmeddineBundle\Controller;

use NejmeddineBundle\Entity\Reclamation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
    /**
     * Finds and displays a reclamation entity.
     *
     */
    public function showAction(Reclamation $reclamation)
    {
        $deleteForm = $this->createDeleteForm($reclamation);

        return $this->render('NejmeddineBundle:Reclamationviews:show.html.twig', array(
            'reclamation' => $reclamation,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    public function changeetatAction(Request $request){

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
