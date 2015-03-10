<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/channels')) {
            // channels
            if (rtrim($pathinfo, '/') === '/channels') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'channels');
                }

                return array (  '_controller' => 'ChannelBundle\\Controller\\ChannelsController::indexAction',  '_route' => 'channels',);
            }

            // channels_show
            if (preg_match('#^/channels/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'channels_show')), array (  '_controller' => 'ChannelBundle\\Controller\\ChannelsController::showAction',));
            }

            // channels_new
            if ($pathinfo === '/channels/new') {
                return array (  '_controller' => 'ChannelBundle\\Controller\\ChannelsController::newAction',  '_route' => 'channels_new',);
            }

            // channels_create
            if ($pathinfo === '/channels/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_channels_create;
                }

                return array (  '_controller' => 'ChannelBundle\\Controller\\ChannelsController::createAction',  '_route' => 'channels_create',);
            }
            not_channels_create:

            // channels_edit
            if (preg_match('#^/channels/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'channels_edit')), array (  '_controller' => 'ChannelBundle\\Controller\\ChannelsController::editAction',));
            }

            // channels_update
            if (preg_match('#^/channels/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_channels_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'channels_update')), array (  '_controller' => 'ChannelBundle\\Controller\\ChannelsController::updateAction',));
            }
            not_channels_update:

            // channels_delete
            if (preg_match('#^/channels/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_channels_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'channels_delete')), array (  '_controller' => 'ChannelBundle\\Controller\\ChannelsController::deleteAction',));
            }
            not_channels_delete:

        }

        if (0 === strpos($pathinfo, '/users')) {
            // users
            if (rtrim($pathinfo, '/') === '/users') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'users');
                }

                return array (  '_controller' => 'ChannelBundle\\Controller\\UsersController::indexAction',  '_route' => 'users',);
            }

            // users_show
            if (preg_match('#^/users/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_show')), array (  '_controller' => 'ChannelBundle\\Controller\\UsersController::showAction',));
            }

            // users_new
            if ($pathinfo === '/users/new') {
                return array (  '_controller' => 'ChannelBundle\\Controller\\UsersController::newAction',  '_route' => 'users_new',);
            }

            // users_create
            if ($pathinfo === '/users/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_users_create;
                }

                return array (  '_controller' => 'ChannelBundle\\Controller\\UsersController::createAction',  '_route' => 'users_create',);
            }
            not_users_create:

            // users_edit
            if (preg_match('#^/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_edit')), array (  '_controller' => 'ChannelBundle\\Controller\\UsersController::editAction',));
            }

            // users_update
            if (preg_match('#^/users/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_users_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_update')), array (  '_controller' => 'ChannelBundle\\Controller\\UsersController::updateAction',));
            }
            not_users_update:

            // users_delete
            if (preg_match('#^/users/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_users_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_delete')), array (  '_controller' => 'ChannelBundle\\Controller\\UsersController::deleteAction',));
            }
            not_users_delete:

            if (0 === strpos($pathinfo, '/users/log')) {
                // users_login
                if ($pathinfo === '/users/loginuser') {
                    return array (  '_controller' => 'ChannelBundle\\Controller\\UsersController::loginAction',  '_route' => 'users_login',);
                }

                // users_logout
                if ($pathinfo === '/users/logout') {
                    return array (  '_controller' => 'ChannelBundle\\Controller\\UsersController::logoutAction',  '_route' => 'users_logout',);
                }

            }

        }

        // channel_mapping
        if (0 === strpos($pathinfo, '/mapping') && preg_match('#^/mapping/(?P<mapid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'channel_mapping')), array (  '_controller' => 'ChannelBundle\\Controller\\DefaultController::mappingAction',));
        }

        // channel_homepage
        if ($pathinfo === '/packages') {
            return array (  '_controller' => 'ChannelBundle\\Controller\\DefaultController::indexAction',  '_route' => 'channel_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'ChannelBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
