<?php

namespace ContainerVmd8Kxh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSitiosControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\SitiosController' shared autowired service.
     *
     * @return \App\Controller\SitiosController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\SitiosController'] = $instance = new \App\Controller\SitiosController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\SitiosController', $container));

        return $instance;
    }
}
