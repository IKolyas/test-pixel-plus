<?php

use base\ComponentsFactory;
use base\Request;
use models\User;

return [
    'root_dir' => realpath(__DIR__ . '/../') . "/",
    'views_dir' => realpath(__DIR__ . '/../') . "/views/",
    'default_controller' => 'user',
    'default_action' => 'login',
    'controller_namespace' => 'controllers\\',
    'components' => [
        'request' => [
            'class' => Request::class,
        ],
        'session' => [
            'class' => \base\Session::class,
        ],
        'renderer' => [
            'class' => \services\renderers\TemplateRenderer::class,
        ],
        'db' => [
            'class' => \services\DataBase::class,
            'driver' => 'mysql',
            'host' => 'localhost',
            'login' => 'a0620868_test_work',
            'password' => 'testwork',
            'database' => 'a0620868_test_work',
            'charset' => 'utf8'
        ],
        'user' => [
            'class' => User::class,
        ],
        'userRepository' => [
            'class' => models\repositories\UserRepository::class,
        ],
        'componentsFactory' => [
            'class' => ComponentsFactory::class
        ],
        'path' => [
            'class' => \services\Path::class
        ]
    ]
];