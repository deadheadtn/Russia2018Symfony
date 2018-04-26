<?php

namespace NejmeddineBundle\Controller;

use NejmeddineBundle\Entity\Publicite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Publicite controller.
 *
 */
class PubliciteController extends Controller
{
    /**
     * Lists all publicite entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $publicites = $em->getRepository('NejmeddineBundle:Publicite')->findAll();

        return $this->render('NejmeddineBundle:publicite:index.html.twig', array(
            'publicites' => $publicites,
        ));
    }
    public function indexfAction()
    {
        $em = $this->getDoctrine()->getManager();

        $publicites = $em->getRepository('NejmeddineBundle:Publicite')->findAll();
        $pub=$publicites[0];
        return $this->render('RUSSIA2PIBundle:Default:pub.html.twig', array(
            'pub' => $pub
        ));
    }
    /**
     * Creates a new publicite entity.
     *
     */
    public function newAction(Request $request)
    {
        $publicite = new Publicite();
        $form = $this->createForm('NejmeddineBundle\Form\PubliciteType', $publicite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($publicite);
            $em->flush();

            return $this->redirectToRoute('admin_manage_publicite_show', array('id' => $publicite->getId()));
        }

        return $this->render('NejmeddineBundle:publicite:new.html.twig', array(
            'publicite' => $publicite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a publicite entity.
     *
     */
    public function showAction(Publicite $publicite)
    {
        $deleteForm = $this->createDeleteForm($publicite);

        return $this->render('NejmeddineBundle:publicite:show.html.twig', array(
            'publicite' => $publicite,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing publicite entity.
     *
     */
    public function editAction(Request $request, Publicite $publicite)
    {
        $deleteForm = $this->createDeleteForm($publicite);
        $editForm = $this->createForm('NejmeddineBundle\Form\PubliciteType', $publicite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_manage_publicite_edit', array('id' => $publicite->getId()));
        }

        return $this->render('NejmeddineBundle:publicite:edit.html.twig', array(
            'publicite' => $publicite,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a publicite entity.
     *
     */
    public function deleteAction(Request $request, Publicite $publicite)
    {
        $form = $this->createDeleteForm($publicite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($publicite);
            $em->flush();
        }

        return $this->redirectToRoute('admin_manage_publicite_index');
    }

    /**
     * Creates a form to delete a publicite entity.
     *
     * @param Publicite $publicite The publicite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Publicite $publicite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_manage_publicite_delete', array('id' => $publicite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
