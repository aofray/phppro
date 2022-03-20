<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/sort' => [[['_route' => 'app_sort_ticket', '_controller' => 'App\\Controller\\CommentTicketController::sort'], null, ['GET' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LogoutController::index'], null, null, null, false, false, null]],
        '/requests' => [[['_route' => 'app_new_post', '_controller' => 'App\\Controller\\NewPostController::postTicket'], null, ['POST' => 0], null, false, false, null]],
        '/reg' => [[['_route' => 'app_reg', '_controller' => 'App\\Controller\\RegController::registration'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'secure', '_controller' => 'App\\Controller\\index::index'], null, null, ['https' => 0], false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/requests/([^/]++)(*:60)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        60 => [
            [['_route' => 'app_comment_ticket', '_controller' => 'App\\Controller\\CommentTicketController::index'], ['id'], ['PUT' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
