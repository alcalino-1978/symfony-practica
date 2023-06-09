<?php

namespace ContainerVmd8Kxh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GvPlhrRService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.gvPlhrR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gvPlhrR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'animal' => ['privates', '.errored..service_locator.gvPlhrR.App\\Entity\\Animal', NULL, 'Cannot autowire service ".service_locator.gvPlhrR": it needs an instance of "App\\Entity\\Animal" but this type has been excluded in "config/services.yaml".'],
        ], [
            'animal' => 'App\\Entity\\Animal',
        ]);
    }
}
