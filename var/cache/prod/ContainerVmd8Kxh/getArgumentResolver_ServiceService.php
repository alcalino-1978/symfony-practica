<?php

namespace ContainerVmd8Kxh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\API\\AnimalesController::borrar' => ['privates', '.service_locator.UCZ7frx', 'get_ServiceLocator_UCZ7frxService', true],
            'App\\Controller\\API\\AnimalesController::crear' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\API\\AnimalesController::detalle' => ['privates', '.service_locator.gvPlhrR', 'get_ServiceLocator_GvPlhrRService', true],
            'App\\Controller\\API\\AnimalesController::editar' => ['privates', '.service_locator.UCZ7frx', 'get_ServiceLocator_UCZ7frxService', true],
            'App\\Controller\\API\\AnimalesController::list' => ['privates', '.service_locator.cwjrQ4b', 'get_ServiceLocator_CwjrQ4bService', true],
            'App\\Controller\\AnimalesController::borrar' => ['privates', '.service_locator.UCZ7frx', 'get_ServiceLocator_UCZ7frxService', true],
            'App\\Controller\\AnimalesController::guardar' => ['privates', '.service_locator.SucoC5x', 'get_ServiceLocator_SucoC5xService', true],
            'App\\Controller\\AnimalesController::index' => ['privates', '.service_locator.cwjrQ4b', 'get_ServiceLocator_CwjrQ4bService', true],
            'App\\Controller\\DefaultController::index' => ['privates', '.service_locator.cwjrQ4b', 'get_ServiceLocator_CwjrQ4bService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\API\\AnimalesController:borrar' => ['privates', '.service_locator.UCZ7frx', 'get_ServiceLocator_UCZ7frxService', true],
            'App\\Controller\\API\\AnimalesController:crear' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\API\\AnimalesController:detalle' => ['privates', '.service_locator.gvPlhrR', 'get_ServiceLocator_GvPlhrRService', true],
            'App\\Controller\\API\\AnimalesController:editar' => ['privates', '.service_locator.UCZ7frx', 'get_ServiceLocator_UCZ7frxService', true],
            'App\\Controller\\API\\AnimalesController:list' => ['privates', '.service_locator.cwjrQ4b', 'get_ServiceLocator_CwjrQ4bService', true],
            'App\\Controller\\AnimalesController:borrar' => ['privates', '.service_locator.UCZ7frx', 'get_ServiceLocator_UCZ7frxService', true],
            'App\\Controller\\AnimalesController:guardar' => ['privates', '.service_locator.SucoC5x', 'get_ServiceLocator_SucoC5xService', true],
            'App\\Controller\\AnimalesController:index' => ['privates', '.service_locator.cwjrQ4b', 'get_ServiceLocator_CwjrQ4bService', true],
            'App\\Controller\\DefaultController:index' => ['privates', '.service_locator.cwjrQ4b', 'get_ServiceLocator_CwjrQ4bService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\API\\AnimalesController::borrar' => '?',
            'App\\Controller\\API\\AnimalesController::crear' => '?',
            'App\\Controller\\API\\AnimalesController::detalle' => '?',
            'App\\Controller\\API\\AnimalesController::editar' => '?',
            'App\\Controller\\API\\AnimalesController::list' => '?',
            'App\\Controller\\AnimalesController::borrar' => '?',
            'App\\Controller\\AnimalesController::guardar' => '?',
            'App\\Controller\\AnimalesController::index' => '?',
            'App\\Controller\\DefaultController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\API\\AnimalesController:borrar' => '?',
            'App\\Controller\\API\\AnimalesController:crear' => '?',
            'App\\Controller\\API\\AnimalesController:detalle' => '?',
            'App\\Controller\\API\\AnimalesController:editar' => '?',
            'App\\Controller\\API\\AnimalesController:list' => '?',
            'App\\Controller\\AnimalesController:borrar' => '?',
            'App\\Controller\\AnimalesController:guardar' => '?',
            'App\\Controller\\AnimalesController:index' => '?',
            'App\\Controller\\DefaultController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]));
    }
}