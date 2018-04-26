<?php

namespace NejmeddineBundle\Controller;

use NejmeddineBundle\Entity\News;
use NejmeddineBundle\Entity\Publicite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * News controller.
 *
 */
class NewsController extends Controller
{
    /**
     * Lists all news entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository('NejmeddineBundle:News')->findAll();

        return $this->render('NejmeddineBundle:ViewsNews:index.html.twig', array(
            'news' => $news
        ));
    }
    public function indexCAction()
    {
        $em = $this->getDoctrine()->getManager();

        $news = $em->getRepository('NejmeddineBundle:News')->findAll();
        $publicites = $em->getRepository('NejmeddineBundle:Publicite')->findAll();
        $pub=$publicites[0];
        return $this->render('RUSSIA2PIBundle:Default:index.html.twig', array(
            'news' => $news,
            'pub'=> $pub
        ));
    }
    /**
     * Creates a new news entity.
     *
     */
    public function newAction(Request $request)
    {
        $news = new News();
        $form = $this->createForm('NejmeddineBundle\Form\NewsType', $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush();

            return $this->redirectToRoute('admin_manage_news_show', array('idNews' => $news->getIdnews()));
        }

        return $this->render('NejmeddineBundle:ViewsNews:new.html.twig', array(
            'news' => $news,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a news entity.
     *
     */
    public function showAction(News $news)
    {
        $deleteForm = $this->createDeleteForm($news);

        return $this->render('NejmeddineBundle:ViewsNews:show.html.twig', array(
            'news' => $news,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    public function showNewsAction(News $news1)
    {
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository('NejmeddineBundle:News')->findAll();
        $publicites = $em->getRepository('NejmeddineBundle:Publicite')->findAll();
        $pub=$publicites[0];
        return $this->render('RUSSIA2PIBundle:Default:layoutArticle.html.twig', array(
            'news1' => $news1,
            'news' => $news,
            'pub'=> $pub
        ));
    }
    /**
     * Displays a form to edit an existing news entity.
     *
     */
    public function editAction(Request $request, News $news)
    {
        $deleteForm = $this->createDeleteForm($news);
        $editForm = $this->createForm('NejmeddineBundle\Form\NewsType', $news);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_manage_news_edit', array('idNews' => $news->getIdnews()));
        }

        return $this->render('NejmeddineBundle:ViewsNews:edit.html.twig', array(
            'news' => $news,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a news entity.
     *
     */
    public function deleteAction(Request $request, News $news)
    {
        $form = $this->createDeleteForm($news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($news);
            $em->flush();
        }

        return $this->redirectToRoute('admin_manage_news_index');
    }

    /**
     * Creates a form to delete a news entity.
     *
     * @param News $news The news entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(News $news)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_manage_news_delete', array('idNews' => $news->getIdnews())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
