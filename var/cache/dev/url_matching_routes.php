<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/clientes' => [[['_route' => 'listar_clientes', '_controller' => 'App\\Controller\\ClienteController::listarClientes'], null, null, null, false, false, null]],
        '/clientes/servidor' => [[['_route' => 'listar_clientes_servidor', '_controller' => 'App\\Controller\\ClienteController::listarClientesServidor'], null, null, null, false, false, null]],
        '/cliente/crear' => [[['_route' => 'crear_cliente', '_controller' => 'App\\Controller\\ClienteController::crearCliente'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/cliente/(?'
                    .'|editar/([^/]++)(*:195)'
                    .'|borrar/([^/]++)(*:218)'
                    .'|([^/]++)(*:234)'
                    .'|editar/([^/]++)(*:257)'
                    .'|borrar/([^/]++)(*:280)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        195 => [[['_route' => 'app_cliente_editarcliente', '_controller' => 'App\\Controller\\ClienteController::editarCliente'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'app_cliente_borrarcliente', '_controller' => 'App\\Controller\\ClienteController::borrarCliente'], ['id'], null, null, false, true, null]],
        234 => [[['_route' => 'ver_cliente', '_controller' => 'App\\Controller\\ClienteController::verCliente'], ['id'], null, null, false, true, null]],
        257 => [[['_route' => 'editar_cliente', '_controller' => 'App\\Controller\\ClienteController::editarCliente'], ['id'], null, null, false, true, null]],
        280 => [
            [['_route' => 'borrar_cliente', '_controller' => 'App\\Controller\\ClienteController::borrarCliente'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
