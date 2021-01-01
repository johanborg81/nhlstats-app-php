<?php

namespace nhl\Core;

/**
 * Class Application
 * 
 * @author Johan Borg <johanborg81@hotmail.com>
 * @package nhl\Core
 */
class Application {
    public static $ROOT_DIR;
    public $router;
    public $request;

    /**
     * Get the path to the root when calling the application in the router class
     * we pass in the root directory.
     * 
     * @param mixed $root_path
     */
    public function __construct($root_path) {
        self::$ROOT_DIR = $root_path;
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run() {
        echo $this->router->resolve();
    }
}