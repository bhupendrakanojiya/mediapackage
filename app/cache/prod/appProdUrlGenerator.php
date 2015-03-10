<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'channels' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\ChannelsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/channels/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'channels_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\ChannelsController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/channels',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'channels_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\ChannelsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/channels/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'channels_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\ChannelsController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/channels/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'channels_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\ChannelsController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/channels',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'channels_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\ChannelsController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/channels',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'channels_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\ChannelsController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/channels',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\UsersController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\UsersController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\UsersController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\UsersController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\UsersController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\UsersController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\UsersController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\UsersController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/loginuser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\UsersController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'channel_mapping' => array (  0 =>   array (    0 => 'mapid',  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\DefaultController::mappingAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mapid',    ),    1 =>     array (      0 => 'text',      1 => '/mapping',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'channel_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/packages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ChannelBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
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
