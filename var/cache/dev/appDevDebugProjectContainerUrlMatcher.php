<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // fedi_fedi_default_index
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'fedi_fedi_default_index');
            }

            return array (  '_controller' => 'Fedi\\FediBundle\\Controller\\DefaultController::indexAction',  '_route' => 'fedi_fedi_default_index',);
        }

<<<<<<< Updated upstream
        // hotel
        if ('/hotel' === $pathinfo) {
            return array (  '_controller' => 'Fedi\\FediBundle\\Controller\\hotelController::hotelAction',  '_route' => 'hotel',);
        }

        // Pageaffichage
        if ('/affichage' === $pathinfo) {
            return array (  '_controller' => 'Fedi\\FediBundle\\Controller\\hotelController::affichehotelAction',  '_route' => 'Pageaffichage',);
        }

        // Page
        if ('/admin' === $pathinfo) {
            return array (  '_controller' => 'RUSSIA\\PIBundle\\Controller\\DefaultController::indexAction',  '_route' => 'Page',);
        }

        if (0 === strpos($pathinfo, '/Ajout')) {
            // ajout
            if ('/Ajout' === $pathinfo) {
                return array (  '_controller' => 'Fedi\\FediBundle\\Controller\\hotelController::Ajout2Action',  '_route' => 'ajout',);
            }

            // ajouttransport
            if ('/AjoutT' === $pathinfo) {
                return array (  '_controller' => 'Fedi\\FediBundle\\Controller\\transportController::Ajout2Action',  '_route' => 'ajouttransport',);
            }

        }

        elseif (0 === strpos($pathinfo, '/Delete')) {
            // supp
            if (preg_match('#^/Delete/(?P<s>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp')), array (  '_controller' => 'Fedi\\FediBundle\\Controller\\hotelController::DeleteAction',));
            }

            // supptransport
            if (0 === strpos($pathinfo, '/DeleteT') && preg_match('#^/DeleteT/(?P<s>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supptransport')), array (  '_controller' => 'Fedi\\FediBundle\\Controller\\transportController::DeleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/Modifier')) {
            // modif
            if (preg_match('#^/Modifier/(?P<s>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modif')), array (  '_controller' => 'Fedi\\FediBundle\\Controller\\hotelController::ModifierAction',));
            }

            // modiftransport
            if (0 === strpos($pathinfo, '/ModifierT') && preg_match('#^/ModifierT/(?P<s>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modiftransport')), array (  '_controller' => 'Fedi\\FediBundle\\Controller\\transportController::ModifierAction',));
            }

        }

        // transport
        if ('/transport' === $pathinfo) {
            return array (  '_controller' => 'Fedi\\FediBundle\\Controller\\transportController::transportAction',  '_route' => 'transport',);
        }

        // russia2_pi_homepage
        if ('/client' === $pathinfo) {
            return array (  '_controller' => 'RUSSIA2\\PIBundle\\Controller\\DefaultController::indexAction',  '_route' => 'russia2_pi_homepage',);
=======
        if (0 === strpos($pathinfo, '/Admin')) {
            // _affichage
            if ('/Admin/Tickets/Affichage' === $pathinfo) {
                return array (  '_controller' => 'TicketBundle\\Controller\\AdminTicketController::AffichageAction',  '_route' => '_affichage',);
            }

            // _recherche
            if ('/Admin/Tickets/Recherche' === $pathinfo) {
                return array (  '_controller' => 'TicketBundle\\Controller\\AdminTicketController::RechercheAction',  '_route' => '_recherche',);
            }

            if (0 === strpos($pathinfo, '/Admin/tickets')) {
                // _ajout
                if ('/Admin/tickets/Ajout' === $pathinfo) {
                    return array (  '_controller' => 'TicketBundle\\Controller\\AdminTicketController::AjoutAction',  '_route' => '_ajout',);
                }

                // _modif
                if ('/Admin/tickets/modif' === $pathinfo) {
                    return array (  '_controller' => 'TicketBundle\\Controller\\AdminTicketController::ModifAction',  '_route' => '_modif',);
                }

                // _delete
                if ('/Admin/tickets/supprimer' === $pathinfo) {
                    return array (  '_controller' => 'TicketBundle\\Controller\\AdminTicketController::DeleteAction',  '_route' => '_delete',);
                }

            }

        }

        // russia2_pi_homepage
        if ('/client' === $pathinfo) {
            return array (  '_controller' => 'RUSSIA2\\PIBundle\\Controller\\DefaultController::indexAction',  '_route' => 'russia2_pi_homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // russiapi_homepage
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'RUSSIA\\PIBundle\\Controller\\DefaultController::indexAction',  '_route' => 'russiapi_homepage',);
            }

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

            }

>>>>>>> Stashed changes
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
