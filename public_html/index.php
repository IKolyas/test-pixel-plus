<?php

use base\Application;
use services\Autoloader;

include $_SERVER['DOCUMENT_ROOT'] . '/../services/Autoloader.php';
spl_autoload_register([new Autoloader(), 'loadClass']);

$config = include $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
Application::getInstance()->run($config);
