<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/client')) {
            // russia2_pi_homepage
            if ('/client' === $pathinfo) {
                return array (  '_controller' => 'NejmeddineBundle\\Controller\\NewsController::indexCAction',  '_route' => 'russia2_pi_homepage',);
            }

            // ViewArticle
            if (0 === strpos($pathinfo, '/client/news') && preg_match('#^/client/news/(?P<idNews>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_ViewArticle;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ViewArticle')), array (  '_controller' => 'NejmeddineBundle\\Controller\\NewsController::showNewsAction',));
            }
            not_ViewArticle:

            // Reclamation
            if ('/client/reclamation/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_Reclamation;
                }

                return array (  '_controller' => 'NejmeddineBundle\\Controller\\ReclamationController::newfrontAction',  '_route' => 'Reclamation',);
            }
            not_Reclamation:

            // reservertransport
            if (0 === strpos($pathinfo, '/client/reservertransport') && preg_match('#^/client/reservertransport/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservertransport')), array (  '_controller' => 'Fedi\\FediBundle\\Controller\\reservationTController::AjoutR2Action',));
            }

            // PageAffichageFront
            if ('/client/affichageFront' === $pathinfo) {
                return array (  '_controller' => 'Nesrine\\JoueurBundle\\Controller\\JoueurController::affichageFrontAction',  '_route' => 'PageAffichageFront',);
            }

            // PageAffichageEquipeFront
            if ('/client/affichageEquipeFront' === $pathinfo) {
                return array (  '_controller' => 'Nesrine\\JoueurBundle\\Controller\\EquipeController::affichageFrontAction',  '_route' => 'PageAffichageEquipeFront',);
            }

            // Graphe
            if ('/client/graph' === $pathinfo) {
                return array (  '_controller' => 'Nesrine\\JoueurBundle\\Controller\\JoueurController::IndexAction',  '_route' => 'Graphe',);
            }

            if (0 === strpos($pathinfo, '/client/hotel')) {
                // hotelclient
                if ('/client/hotelclient' === $pathinfo) {
                    return array (  '_controller' => 'Fedi\\FediBundle\\Controller\\hotelController::hotelclientAction',  '_route' => 'hotelclient',);
                }

                // pagehotelclient
                if ('/client/hotel/map' === $pathinfo) {
                    return array (  '_controller' => 'Fedi\\FediBundle\\Controller\\hotelController::hotelclient2Action',  '_route' => 'pagehotelclient',);
                }

                // reserverhotel
                if ('/client/hotel/reserver' === $pathinfo) {
                    return array (  '_controller' => 'Fedi\\FediBundle\\Controller\\reservationHController::AjoutRAction',  '_route' => 'reserverhotel',);
                }

            }

            // transportclient
            if ('/client/transportclient' === $pathinfo) {
                return array (  '_controller' => 'Fedi\\FediBundle\\Controller\\transportController::transportclientAction',  '_route' => 'transportclient',);
            }

            if (0 === strpos($pathinfo, '/client/topic')) {
                // topic_index
                if ('/client/topic' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_topic_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'topic_index');
                    }

                    return array (  '_controller' => 'ForumBundle\\Controller\\TopicController::indexclientAction',  '_route' => 'topic_index',);
                }
                not_topic_index:

                // topic_show
                if (preg_match('#^/client/topic/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_topic_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_show')), array (  '_controller' => 'ForumBundle\\Controller\\TopicController::showclientAction',));
                }
                not_topic_show:

            }

            elseif (0 === strpos($pathinfo, '/client/commentaire')) {
                // commentaire_index
                if ('/client/commentaire' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_commentaire_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'commentaire_index');
                    }

                    return array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::indexclientAction',  '_route' => 'commentaire_index',);
                }
                not_commentaire_index:

                // commentaire_show
                if (preg_match('#^/client/commentaire/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_commentaire_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_show')), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::showAction',));
                }
                not_commentaire_show:

                // commentaire_new
                if (0 === strpos($pathinfo, '/client/commentaire/new') && preg_match('#^/client/commentaire/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_commentaire_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_new')), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::newclientAction',));
                }
                not_commentaire_new:

                // commentaire_edit
                if (preg_match('#^/client/commentaire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_commentaire_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_edit')), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::editclientAction',));
                }
                not_commentaire_edit:

                // commentaire_delete
                if (preg_match('#^/client/commentaire/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_commentaire_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_delete')), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::deleteAction',));
                }
                not_commentaire_delete:

            }

            elseif (0 === strpos($pathinfo, '/client/post')) {
                // post_index
                if ('/client/post' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_post_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'post_index');
                    }

                    return array (  '_controller' => 'ForumBundle\\Controller\\PostController::indexclientAction',  '_route' => 'post_index',);
                }
                not_post_index:

                // post_show
                if (preg_match('#^/client/post/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_post_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_show')), array (  '_controller' => 'ForumBundle\\Controller\\PostController::showAction',));
                }
                not_post_show:

                // post_new
                if (0 === strpos($pathinfo, '/client/post/new') && preg_match('#^/client/post/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_post_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_new')), array (  '_controller' => 'ForumBundle\\Controller\\PostController::newclientAction',));
                }
                not_post_new:

                // post_edit
                if (preg_match('#^/client/post/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_post_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_edit')), array (  '_controller' => 'ForumBundle\\Controller\\PostController::editclientAction',));
                }
                not_post_edit:

                // post_delete
                if (preg_match('#^/client/post/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_post_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_delete')), array (  '_controller' => 'ForumBundle\\Controller\\PostController::deleteAction',));
                }
                not_post_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // Page
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'RUSSIA\\PIBundle\\Controller\\DefaultController::indexAction',  '_route' => 'Page',);
            }

            if (0 === strpos($pathinfo, '/admin/manage')) {
                if (0 === strpos($pathinfo, '/admin/manage/news')) {
                    // admin_manage_news_index
                    if ('/admin/manage/news' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_manage_news_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'admin_manage_news_index');
                        }

                        return array (  '_controller' => 'NejmeddineBundle\\Controller\\NewsController::indexAction',  '_route' => 'admin_manage_news_index',);
                    }
                    not_admin_manage_news_index:

                    // admin_manage_news_show
                    if (preg_match('#^/admin/manage/news/(?P<idNews>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_manage_news_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manage_news_show')), array (  '_controller' => 'NejmeddineBundle\\Controller\\NewsController::showAction',));
                    }
                    not_admin_manage_news_show:

                    // admin_manage_news_new
                    if ('/admin/manage/news/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_manage_news_new;
                        }

                        return array (  '_controller' => 'NejmeddineBundle\\Controller\\NewsController::newAction',  '_route' => 'admin_manage_news_new',);
                    }
                    not_admin_manage_news_new:

                    // admin_manage_news_edit
                    if (preg_match('#^/admin/manage/news/(?P<idNews>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_manage_news_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manage_news_edit')), array (  '_controller' => 'NejmeddineBundle\\Controller\\NewsController::editAction',));
                    }
                    not_admin_manage_news_edit:

                    // admin_manage_news_delete
                    if (preg_match('#^/admin/manage/news/(?P<idNews>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_admin_manage_news_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manage_news_delete')), array (  '_controller' => 'NejmeddineBundle\\Controller\\NewsController::deleteAction',));
                    }
                    not_admin_manage_news_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/manage/reclamation')) {
                    // admin_manage_reclamation_index
                    if ('/admin/manage/reclamation' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_manage_reclamation_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'admin_manage_reclamation_index');
                        }

                        return array (  '_controller' => 'NejmeddineBundle\\Controller\\ReclamationController::indexAction',  '_route' => 'admin_manage_reclamation_index',);
                    }
                    not_admin_manage_reclamation_index:

                    // admin_manage_reclamation_show
                    if (preg_match('#^/admin/manage/reclamation/(?P<idReclamation>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_manage_reclamation_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manage_reclamation_show')), array (  '_controller' => 'NejmeddineBundle\\Controller\\ReclamationController::showAction',));
                    }
                    not_admin_manage_reclamation_show:

                    // admin_manage_reclamation_new
                    if ('/admin/manage/reclamation/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_manage_reclamation_new;
                        }

                        return array (  '_controller' => 'NejmeddineBundle\\Controller\\ReclamationController::newAction',  '_route' => 'admin_manage_reclamation_new',);
                    }
                    not_admin_manage_reclamation_new:

                    // admin_manage_reclamation_edit
                    if (preg_match('#^/admin/manage/reclamation/(?P<idReclamation>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_manage_reclamation_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manage_reclamation_edit')), array (  '_controller' => 'NejmeddineBundle\\Controller\\ReclamationController::editAction',));
                    }
                    not_admin_manage_reclamation_edit:

                    // admin_manage_reclamation_delete
                    if (preg_match('#^/admin/manage/reclamation/(?P<idReclamation>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_admin_manage_reclamation_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manage_reclamation_delete')), array (  '_controller' => 'NejmeddineBundle\\Controller\\ReclamationController::deleteAction',));
                    }
                    not_admin_manage_reclamation_delete:

                    // admin_manage_reclamation_changeetat
                    if (preg_match('#^/admin/manage/reclamation/(?P<idReclamation>[^/]++)/etat$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_manage_reclamation_changeetat;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manage_reclamation_changeetat')), array (  '_controller' => 'NejmeddineBundle\\Controller\\ReclamationController::deleteAction',));
                    }
                    not_admin_manage_reclamation_changeetat:

                }

                // recherche
                if ('/admin/manage/recherche' === $pathinfo) {
                    return array (  '_controller' => 'Nesrine\\JoueurBundle\\Controller\\JoueurController::rechercheAction',  '_route' => 'recherche',);
                }

                if (0 === strpos($pathinfo, '/admin/manage/publicite')) {
                    // admin_manage_publicite_index
                    if ('/admin/manage/publicite' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_manage_publicite_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'admin_manage_publicite_index');
                        }

                        return array (  '_controller' => 'NejmeddineBundle\\Controller\\PubliciteController::indexAction',  '_route' => 'admin_manage_publicite_index',);
                    }
                    not_admin_manage_publicite_index:

                    // admin_manage_publicite_show
                    if (preg_match('#^/admin/manage/publicite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_manage_publicite_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manage_publicite_show')), array (  '_controller' => 'NejmeddineBundle\\Controller\\PubliciteController::showAction',));
                    }
                    not_admin_manage_publicite_show:

                    // admin_manage_publicite_new
                    if ('/admin/manage/publicite/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_manage_publicite_new;
                        }

                        return array (  '_controller' => 'NejmeddineBundle\\Controller\\PubliciteController::newAction',  '_route' => 'admin_manage_publicite_new',);
                    }
                    not_admin_manage_publicite_new:

                    // admin_manage_publicite_edit
                    if (preg_match('#^/admin/manage/publicite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_manage_publicite_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manage_publicite_edit')), array (  '_controller' => 'NejmeddineBundle\\Controller\\PubliciteController::editAction',));
                    }
                    not_admin_manage_publicite_edit:

                    // admin_manage_publicite_delete
                    if (preg_match('#^/admin/manage/publicite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_admin_manage_publicite_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manage_publicite_delete')), array (  '_controller' => 'NejmeddineBundle\\Controller\\PubliciteController::deleteAction',));
                    }
                    not_admin_manage_publicite_delete:

                }

                elseif (0 === strpos($pathinfo, '/admin/manage/a')) {
                    if (0 === strpos($pathinfo, '/admin/manage/affichag')) {
                        // PageAffichage
                        if ('/admin/manage/affichage' === $pathinfo) {
                            return array (  '_controller' => 'Nesrine\\JoueurBundle\\Controller\\JoueurController::affichageAction',  '_route' => 'PageAffichage',);
                        }

                        // PageAffichageEquipe
                        if ('/admin/manage/affichagE' === $pathinfo) {
                            return array (  '_controller' => 'Nesrine\\JoueurBundle\\Controller\\EquipeController::affichageAction',  '_route' => 'PageAffichageEquipe',);
                        }

                        // PageAffichageStaff
                        if ('/admin/manage/affichagS' === $pathinfo) {
                            return array (  '_controller' => 'Nesrine\\JoueurBundle\\Controller\\StaffController::affichageAction',  '_route' => 'PageAffichageStaff',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/manage/ajout')) {
                        // ajoutJoueur
                        if ('/admin/manage/ajout' === $pathinfo) {
                            return array (  '_controller' => 'Nesrine\\JoueurBundle\\Controller\\JoueurController::ajoutAction',  '_route' => 'ajoutJoueur',);
                        }

                        // ajoutEquipe
                        if ('/admin/manage/ajoutE' === $pathinfo) {
                            return array (  '_controller' => 'Nesrine\\JoueurBundle\\Controller\\EquipeController::ajoutAction',  '_route' => 'ajoutEquipe',);
                        }

                        // ajoutStaff
                        if ('/admin/manage/ajoutS' === $pathinfo) {
                            return array (  '_controller' => 'Nesrine\\JoueurBundle\\Controller\\StaffController::ajoutAction',  '_route' => 'ajoutStaff',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/manage/admin/hotel')) {
                        // Pageaffichage
                        if ('/admin/manage/admin/hotel/affichage' === $pathinfo) {
                            return array (  '_controller' => 'Fedi\\FediBundle\\Controller\\hotelController::affichehotelAction',  '_route' => 'Pageaffichage',);
                        }

                        // ajout
                        if ('/admin/manage/admin/hotel/Ajout' === $pathinfo) {
                            return array (  '_controller' => 'Fedi\\FediBundle\\Controller\\hotelController::Ajout2Action',  '_route' => 'ajout',);
                        }

                        // supp
                        if (0 === strpos($pathinfo, '/admin/manage/admin/hotel/Delete') && preg_match('#^/admin/manage/admin/hotel/Delete/(?P<s>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp')), array (  '_controller' => 'Fedi\\FediBundle\\Controller\\hotelController::DeleteAction',));
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/manage/supprimer')) {
                    // delete
                    if (preg_match('#^/admin/manage/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'Nesrine\\JoueurBundle\\Controller\\JoueurController::deleteAction',));
                    }

                    // deletE
                    if (0 === strpos($pathinfo, '/admin/manage/supprimerE') && preg_match('#^/admin/manage/supprimerE/(?P<Id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletE')), array (  '_controller' => 'Nesrine\\JoueurBundle\\Controller\\EquipeController::deleteAction',));
                    }

                    // deletS
                    if (0 === strpos($pathinfo, '/admin/manage/supprimerS') && preg_match('#^/admin/manage/supprimerS/(?P<ID>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletS')), array (  '_controller' => 'Nesrine\\JoueurBundle\\Controller\\StaffController::deleteAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/manage/updat')) {
                    // modifierJoueur
                    if (0 === strpos($pathinfo, '/admin/manage/update') && preg_match('#^/admin/manage/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierJoueur')), array (  '_controller' => 'Nesrine\\JoueurBundle\\Controller\\JoueurController::updateAction',));
                    }

                    // modifierEquipe
                    if (0 === strpos($pathinfo, '/admin/manage/updatE') && preg_match('#^/admin/manage/updatE/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierEquipe')), array (  '_controller' => 'Nesrine\\JoueurBundle\\Controller\\EquipeController::updateAction',));
                    }

                    // modifierStaff
                    if (0 === strpos($pathinfo, '/admin/manage/updatS') && preg_match('#^/admin/manage/updatS/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifierStaff')), array (  '_controller' => 'Nesrine\\JoueurBundle\\Controller\\StaffController::updateAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/manage/hotel')) {
                    // hotel
                    if ('/admin/manage/hotel' === $pathinfo) {
                        return array (  '_controller' => 'Fedi\\FediBundle\\Controller\\hotelController::hotelAction',  '_route' => 'hotel',);
                    }

                    // modif
                    if (0 === strpos($pathinfo, '/admin/manage/hotel/Modifier') && preg_match('#^/admin/manage/hotel/Modifier/(?P<s>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'modif')), array (  '_controller' => 'Fedi\\FediBundle\\Controller\\hotelController::ModifierAction',));
                    }

                    // hoteladmin
                    if ('/admin/manage/hoteladmin' === $pathinfo) {
                        return array (  '_controller' => 'Fedi\\FediBundle\\Controller\\reservationHController::hoteladminAction',  '_route' => 'hoteladmin',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/manage/transport')) {
                    // transport
                    if ('/admin/manage/transport' === $pathinfo) {
                        return array (  '_controller' => 'Fedi\\FediBundle\\Controller\\transportController::transportAction',  '_route' => 'transport',);
                    }

                    // ajouttransport
                    if ('/admin/manage/transport/AjoutT' === $pathinfo) {
                        return array (  '_controller' => 'Fedi\\FediBundle\\Controller\\transportController::Ajout2Action',  '_route' => 'ajouttransport',);
                    }

                    // modiftransport
                    if (0 === strpos($pathinfo, '/admin/manage/transport/ModifierT') && preg_match('#^/admin/manage/transport/ModifierT/(?P<s>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'modiftransport')), array (  '_controller' => 'Fedi\\FediBundle\\Controller\\transportController::ModifierAction',));
                    }

                    // transportadmin
                    if ('/admin/manage/transportadmin' === $pathinfo) {
                        return array (  '_controller' => 'Fedi\\FediBundle\\Controller\\reservationTController::transportadminAction',  '_route' => 'transportadmin',);
                    }

                }

                // supptransport
                if (0 === strpos($pathinfo, '/admin/manage/DeleteT') && preg_match('#^/admin/manage/DeleteT/(?P<s>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supptransport')), array (  '_controller' => 'Fedi\\FediBundle\\Controller\\transportController::DeleteAction',));
                }

                // etatreshotel
                if (0 === strpos($pathinfo, '/admin/manage/etatreshotel') && preg_match('#^/admin/manage/etatreshotel/(?P<s>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'etatreshotel')), array (  '_controller' => 'Fedi\\FediBundle\\Controller\\reservationHController::modifierAction',));
                }

            }

            // _affichage
            if ('/admin/Tickets/Affichage' === $pathinfo) {
                return array (  '_controller' => 'TicketBundle\\Controller\\AdminTicketController::AffichageAction',  '_route' => '_affichage',);
            }

            // _recherche
            if ('/admin/Tickets/Recherche' === $pathinfo) {
                return array (  '_controller' => 'TicketBundle\\Controller\\AdminTicketController::RechercheAction',  '_route' => '_recherche',);
            }

            if (0 === strpos($pathinfo, '/admin/tickets')) {
                // _ajout
                if ('/admin/tickets/Ajout' === $pathinfo) {
                    return array (  '_controller' => 'TicketBundle\\Controller\\AdminTicketController::AjoutAction',  '_route' => '_ajout',);
                }

                // _modif
                if ('/admin/tickets/modif' === $pathinfo) {
                    return array (  '_controller' => 'TicketBundle\\Controller\\AdminTicketController::ModifAction',  '_route' => '_modif',);
                }

                // _delete
                if (0 === strpos($pathinfo, '/admin/tickets/supprimer?sup=') && preg_match('#^/admin/tickets/supprimer\\?sup\\=(?P<sup>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_delete')), array (  '_controller' => 'TicketBundle\\Controller\\AdminTicketController::DeleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/topic')) {
                // topic_indexadmin
                if ('/admin/topic' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_topic_indexadmin;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'topic_indexadmin');
                    }

                    return array (  '_controller' => 'ForumBundle\\Controller\\TopicController::indexadminAction',  '_route' => 'topic_indexadmin',);
                }
                not_topic_indexadmin:

                // topic_showadmin
                if (preg_match('#^/admin/topic/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_topic_showadmin;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_showadmin')), array (  '_controller' => 'ForumBundle\\Controller\\TopicController::showadminAction',));
                }
                not_topic_showadmin:

                // topic_newadmin
                if ('/admin/topic/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_topic_newadmin;
                    }

                    return array (  '_controller' => 'ForumBundle\\Controller\\TopicController::newAction',  '_route' => 'topic_newadmin',);
                }
                not_topic_newadmin:

                // topic_editadmin
                if (preg_match('#^/admin/topic/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_topic_editadmin;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_editadmin')), array (  '_controller' => 'ForumBundle\\Controller\\TopicController::editAction',));
                }
                not_topic_editadmin:

                // topic_delete
                if (preg_match('#^/admin/topic/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_topic_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_delete')), array (  '_controller' => 'ForumBundle\\Controller\\TopicController::deleteAction',));
                }
                not_topic_delete:

            }

            elseif (0 === strpos($pathinfo, '/admin/Match')) {
                // _affichage_standings
                if ('/admin/Match/Affichage' === $pathinfo) {
                    return array (  '_controller' => 'TicketBundle\\Controller\\AdminMatchController::AffichageStandingsAction',  '_route' => '_affichage_standings',);
                }

                // _ajout_standings
                if (0 === strpos($pathinfo, '/admin/Match/ajout') && preg_match('#^/admin/Match/ajout/(?P<s>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_ajout_standings')), array (  '_controller' => 'TicketBundle\\Controller\\AdminMatchController::AjoutAction',));
                }

                // _modif_standings
                if (0 === strpos($pathinfo, '/admin/Match/modif') && preg_match('#^/admin/Match/modif/(?P<s>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_modif_standings')), array (  '_controller' => 'TicketBundle\\Controller\\AdminMatchController::ModifierAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/commentaire')) {
                // commentaire_indexadmin
                if ('/admin/commentaire' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_commentaire_indexadmin;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'commentaire_indexadmin');
                    }

                    return array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::indexAction',  '_route' => 'commentaire_indexadmin',);
                }
                not_commentaire_indexadmin:

                // commentaire_showadmin
                if (preg_match('#^/admin/commentaire/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_commentaire_showadmin;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_showadmin')), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::showAction',));
                }
                not_commentaire_showadmin:

                // commentaire_newadmin
                if ('/admin/commentaire/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_commentaire_newadmin;
                    }

                    return array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::newAction',  '_route' => 'commentaire_newadmin',);
                }
                not_commentaire_newadmin:

                // commentaire_editadmin
                if (preg_match('#^/admin/commentaire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_commentaire_editadmin;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_editadmin')), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::editAction',));
                }
                not_commentaire_editadmin:

            }

            elseif (0 === strpos($pathinfo, '/admin/post')) {
                // post_indexadmin
                if ('/admin/post' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_post_indexadmin;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'post_indexadmin');
                    }

                    return array (  '_controller' => 'ForumBundle\\Controller\\PostController::indexAction',  '_route' => 'post_indexadmin',);
                }
                not_post_indexadmin:

                // post_showadmin
                if (preg_match('#^/admin/post/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_post_showadmin;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_showadmin')), array (  '_controller' => 'ForumBundle\\Controller\\PostController::showAction',));
                }
                not_post_showadmin:

                // post_newadmin
                if ('/admin/post/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_post_newadmin;
                    }

                    return array (  '_controller' => 'ForumBundle\\Controller\\PostController::newAction',  '_route' => 'post_newadmin',);
                }
                not_post_newadmin:

                // post_editadmin
                if (preg_match('#^/admin/post/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_post_editadmin;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_editadmin')), array (  '_controller' => 'ForumBundle\\Controller\\PostController::editAction',));
                }
                not_post_editadmin:

            }

        }

        // user_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'user_homepage');
            }

            return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        // _affichage_match
        if ('/AffichageMatch' === $pathinfo) {
            return array (  '_controller' => 'TicketBundle\\Controller\\ClientMatchControllerController::AffichageMatchAction',  '_route' => '_affichage_match',);
        }

        // _affichage_ticket
        if ('/Client/AffichageTicket' === $pathinfo) {
            return array (  '_controller' => 'TicketBundle\\Controller\\ClientTicketControllerController::AffichageTicketAction',  '_route' => '_affichage_ticket',);
        }

        // ajout_ticket
        if ('/Client/AjoutTicket' === $pathinfo) {
            return array (  '_controller' => 'TicketBundle\\Controller\\ClientTicketControllerController::AjoutTicketAction',  '_route' => 'ajout_ticket',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
