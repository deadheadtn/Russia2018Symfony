<?php

namespace ForumBundle\Controller;

use ForumBundle\Entity\Post;
use ForumBundle\Entity\Topic;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Topic controller.
 *
 */
class TopicController extends Controller
{
    /**
     * Lists all topic entities.
     *
     */


    public function indexadminAction()
    {
        $em = $this->getDoctrine()->getManager();

        $topics = $em->getRepository('ForumBundle:Topic')->findAll();

        return $this->render('@Forum/topic/back/topicadmin.html.twig', array(
            'topics' => $topics,
        ));
    }



    public function indexclientAction()
    {
        $em = $this->getDoctrine()->getManager();

        $topics = $em->getRepository('ForumBundle:Topic')->findAll();

        return $this->render('@Forum/topic/Front/topicadmin.html.twig', array(
            'topics' => $topics,
        ));
    }
    /**
     * Creates a new topic entity.
     *
     */
    public function newAction(Request $request)
    {
        $topic = new Topic();
        $form = $this->createForm('ForumBundle\Form\TopicType', $topic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($topic);
            $em->flush();

            return $this->redirectToRoute('topic_show', array('id' => $topic->getId()));
        }

        return $this->render('@Forum/topic/back/new.html.twig', array(
            'topic' => $topic,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a topic entity.
     *
     */
    public function showadminAction(Topic $topic)
    {
        $deleteForm = $this->createDeleteForm($topic);

        return $this->render('@Forum/topic/back/show.html.twig', array(
            'topic' => $topic,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    public function showclientAction(Topic $topic)
    {
        $deleteForm = $this->createDeleteForm($topic);
        $posts = $this->getDoctrine()->getRepository(Post::class)->findBy(array('topic'=>$topic->getId()));

        return $this->render('@Forum/topic/Front/show.html.twig', array(
            'topic' => $topic,
            'posts' => $posts,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Displays a form to edit an existing topic entity.
     *
     */
    public function editAction(Request $request, Topic $topic)
    {
        $deleteForm = $this->createDeleteForm($topic);
        $editForm = $this->createForm('ForumBundle\Form\TopicType', $topic);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('topic_editadmin', array('id' => $topic->getId()));
        }

        return $this->render('@Forum/topic/back/edit.html.twig', array(
            'topic' => $topic,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a topic entity.
     *
     */
    public function deleteAction(Request $request, Topic $topic)
    {
        $form = $this->createDeleteForm($topic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($topic);
            $em->flush();
        }

        return $this->redirectToRoute('topic_indexadmin');
    }

    public function deleteadminAction(Request $request, Topic $topic)
    {
        $form = $this->createDeleteForm($topic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($topic);
            $em->flush();
        }

        return $this->redirectToRoute('topic_indexadmin');
    }

    /**
     * Creates a form to delete a topic entity.
     *
     * @param Topic $topic The topic entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Topic $topic)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('topic_delete', array('id' => $topic->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
