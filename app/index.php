<?php

// include php scripts
require_once '../Config/init.php';

use nhl\Core\Application;

$app = new Application(dirname(__DIR__));

// Pages
$app->router->get('/', 'home');

$app->router->get('/about', 'about');

$app->run();
