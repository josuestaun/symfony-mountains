<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/mountains' => [[['_route' => 'mountains_index', '_controller' => 'App\\Controller\\MountainsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/mountains/new' => [[['_route' => 'mountains_new', '_controller' => 'App\\Controller\\MountainsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/usuario/sube' => [[['_route' => 'usuario_sube_index', '_controller' => 'App\\Controller\\UsuarioSubeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/usuario/sube/new' => [[['_route' => 'usuario_sube_new', '_controller' => 'App\\Controller\\UsuarioSubeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/usuarios' => [[['_route' => 'usuarios_index', '_controller' => 'App\\Controller\\UsuariosController::index'], null, ['GET' => 0], null, true, false, null]],
        '/usuarios/new' => [[['_route' => 'usuarios_new', '_controller' => 'App\\Controller\\UsuariosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/zonas' => [[['_route' => 'zonas_index', '_controller' => 'App\\Controller\\ZonasController::index'], null, ['GET' => 0], null, true, false, null]],
        '/zonas/new' => [[['_route' => 'zonas_new', '_controller' => 'App\\Controller\\ZonasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/mountains/([^/]++)(?'
                    .'|(*:64)'
                    .'|/edit(*:76)'
                    .'|(*:83)'
                .')'
                .'|/usuario(?'
                    .'|/sube/([^/]++)(?'
                        .'|(*:119)'
                        .'|/edit(*:132)'
                        .'|(*:140)'
                    .')'
                    .'|s/([^/]++)(?'
                        .'|(*:162)'
                        .'|/edit(*:175)'
                        .'|(*:183)'
                    .')'
                .')'
                .'|/zonas/([^/]++)(?'
                    .'|(*:211)'
                    .'|/edit(*:224)'
                    .'|(*:232)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'mountains_show', '_controller' => 'App\\Controller\\MountainsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        76 => [[['_route' => 'mountains_edit', '_controller' => 'App\\Controller\\MountainsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        83 => [[['_route' => 'mountains_delete', '_controller' => 'App\\Controller\\MountainsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        119 => [[['_route' => 'usuario_sube_show', '_controller' => 'App\\Controller\\UsuarioSubeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        132 => [[['_route' => 'usuario_sube_edit', '_controller' => 'App\\Controller\\UsuarioSubeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        140 => [[['_route' => 'usuario_sube_delete', '_controller' => 'App\\Controller\\UsuarioSubeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        162 => [[['_route' => 'usuarios_show', '_controller' => 'App\\Controller\\UsuariosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        175 => [[['_route' => 'usuarios_edit', '_controller' => 'App\\Controller\\UsuariosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        183 => [[['_route' => 'usuarios_delete', '_controller' => 'App\\Controller\\UsuariosController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        211 => [[['_route' => 'zonas_show', '_controller' => 'App\\Controller\\ZonasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        224 => [[['_route' => 'zonas_edit', '_controller' => 'App\\Controller\\ZonasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        232 => [
            [['_route' => 'zonas_delete', '_controller' => 'App\\Controller\\ZonasController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
