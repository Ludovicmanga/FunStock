<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'battle_accept_request' => [['battle'], ['_controller' => 'App\\Controller\\BattleController::accept'], [], [['variable', '/', '[^/]++', 'battle', true], ['text', '/battle/accept']], [], [], []],
    'battle_decline_request' => [['battle'], ['_controller' => 'App\\Controller\\BattleController::decline'], [], [['variable', '/', '[^/]++', 'battle', true], ['text', '/battle/decline']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/home']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];