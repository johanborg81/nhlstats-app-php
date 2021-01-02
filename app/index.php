<?php

// include php scripts
require_once __DIR__. '/../Config/init.php';

use nhl\Controllers\PagesController;
use nhl\Core\Application;

$app = new Application(dirname(__DIR__));

// Pages
$app->router->get('/', [PagesController::class, 'home']);

$app->router->get('/about', 'about');

$app->run();
