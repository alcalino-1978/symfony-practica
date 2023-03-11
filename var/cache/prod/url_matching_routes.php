<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/v1/animales' => [
            [['_route' => 'api_v1_animales_list', '_controller' => 'App\\Controller\\API\\AnimalesController::list'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'api_v1_animales_crear', '_controller' => 'App\\Controller\\API\\AnimalesController::crear'], null, ['POST' => 0], null, true, false, null],
        ],
        '/animales' => [[['_route' => 'app_animales', '_controller' => 'App\\Controller\\AnimalesController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/gatitos' => [[['_route' => 'app_gatitos', '_controller' => 'App\\Controller\\DefaultController::gatitos'], null, null, null, false, false, null]],
        '/sitios' => [[['_route' => 'app_sitios', '_controller' => 'App\\Controller\\SitiosController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi/v1/animales/([^/]++)(?'
                        .'|(*:38)'
                    .')'
                    .'|nimales/(?'
                        .'|borrar/([^/]++)(*:72)'
                        .'|editar(?:/([^/]++))?(*:99)'
                        .'|guardar(?:/([^/]++))?(*:127)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [
            [['_route' => 'api_v1_animales_animal', '_controller' => 'App\\Controller\\API\\AnimalesController::detalle'], ['animal'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_v1_animales_editar', '_controller' => 'App\\Controller\\API\\AnimalesController::editar'], ['animal'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_v1_animales_eliminar', '_controller' => 'App\\Controller\\API\\AnimalesController::borrar'], ['animal'], ['DELETE' => 0], null, false, true, null],
        ],
        72 => [[['_route' => 'app_animales_borrar', '_controller' => 'App\\Controller\\AnimalesController::borrar'], ['animal'], null, null, false, true, null]],
        99 => [[['_route' => 'app_animales_editar', 'animal' => null, '_controller' => 'App\\Controller\\AnimalesController::editar'], ['animal'], null, null, false, true, null]],
        127 => [
            [['_route' => 'app_animales_guardar', 'animal' => null, '_controller' => 'App\\Controller\\AnimalesController::guardar'], ['animal'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
