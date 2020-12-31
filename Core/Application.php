<?php

namespace nhl\Core;

/**
 * Class Application
 * 
 * @author Johan Borg <johanborg81@hotmail.com>
 * @package nhl\Core
 */
class Application {
    public $router;
    public $request;

    public function __construct() {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run() {
        $this->router->resolve();
    }
}