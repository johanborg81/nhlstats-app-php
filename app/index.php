<?php

// include php scripts
require_once '../Config/init.php';

use nhl\Core\Application;

$app = new Application();

// Pages
$app->router->get('/', function() {
    return 'Hello';
});

$app->router->get('/contact', function() {
    return 'Contact';
});

$app->run();
