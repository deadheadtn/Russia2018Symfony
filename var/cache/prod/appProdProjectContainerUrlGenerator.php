<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'ticket_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TicketBundle\\Controller\\DefaultController::ticketAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tickets',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_affichage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TicketBundle\\Controller\\AdminTicketController::AffichageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/Tickets/Affichage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TicketBundle\\Controller\\AdminTicketController::AjoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/tickets/Ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_modif' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TicketBundle\\Controller\\AdminTicketController::ModifAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/tickets/modif',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TicketBundle\\Controller\\AdminTicketController::DeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/tickets/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_recherche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TicketBundle\\Controller\\AdminTicketController::RechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/Tickets/Recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'russia2_pi_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RUSSIA2\\PIBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'russiapi_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RUSSIA\\PIBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.change_password.controller:changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_manage_news_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NejmeddineBundle\\Controller\\NewsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/manage/news/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_manage_news_show' => array (  0 =>   array (    0 => 'idNews',  ),  1 =>   array (    '_controller' => 'NejmeddineBundle\\Controller\\NewsController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idNews',    ),    2 =>     array (      0 => 'text',      1 => '/admin/manage/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_manage_news_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NejmeddineBundle\\Controller\\NewsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/manage/news/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_manage_news_edit' => array (  0 =>   array (    0 => 'idNews',  ),  1 =>   array (    '_controller' => 'NejmeddineBundle\\Controller\\NewsController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idNews',    ),    2 =>     array (      0 => 'text',      1 => '/admin/manage/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_manage_news_delete' => array (  0 =>   array (    0 => 'idNews',  ),  1 =>   array (    '_controller' => 'NejmeddineBundle\\Controller\\NewsController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idNews',    ),    2 =>     array (      0 => 'text',      1 => '/admin/manage/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_manage_reclamation_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NejmeddineBundle\\Controller\\ReclamationController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/manage/reclamation/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_manage_reclamation_show' => array (  0 =>   array (    0 => 'idReclamation',  ),  1 =>   array (    '_controller' => 'NejmeddineBundle\\Controller\\ReclamationController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idReclamation',    ),    2 =>     array (      0 => 'text',      1 => '/admin/manage/reclamation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_manage_reclamation_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'NejmeddineBundle\\Controller\\ReclamationController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/manage/reclamation/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_manage_reclamation_edit' => array (  0 =>   array (    0 => 'idReclamation',  ),  1 =>   array (    '_controller' => 'NejmeddineBundle\\Controller\\ReclamationController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idReclamation',    ),    2 =>     array (      0 => 'text',      1 => '/admin/manage/reclamation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_manage_reclamation_delete' => array (  0 =>   array (    0 => 'idReclamation',  ),  1 =>   array (    '_controller' => 'NejmeddineBundle\\Controller\\ReclamationController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idReclamation',    ),    2 =>     array (      0 => 'text',      1 => '/admin/manage/reclamation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
