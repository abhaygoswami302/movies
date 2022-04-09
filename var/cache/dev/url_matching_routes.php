<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/movies123' => [[['_route' => 'app_movies123', '_controller' => 'App\\Controller\\MoviesBACKUPController::index'], null, null, null, false, false, null]],
        '/movies' => [[['_route' => 'movies', '_controller' => 'App\\Controller\\MoviesController::index'], null, null, null, false, false, null]],
        '/movies/create' => [[['_route' => 'create', '_controller' => 'App\\Controller\\MoviesController::create'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/movies/(?'
                    .'|edit/([^/]++)(*:31)'
                    .'|([^/]++)(*:46)'
                    .'|delete/([^/]++)(*:68)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:104)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\MoviesController::edit'], ['id'], null, null, false, true, null]],
        46 => [[['_route' => 'show', '_controller' => 'App\\Controller\\MoviesController::show'], ['id'], null, null, false, true, null]],
        68 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\MoviesController::delete'], ['id'], null, null, false, true, null]],
        104 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
