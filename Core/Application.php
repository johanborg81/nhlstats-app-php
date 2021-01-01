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
    public $response; // Response
    public static $app; // Application

    /**
     * Get the path to the root when calling the application in the router class
     * we pass in the root directory.
     * 
     * @param mixed $root_path
     */
    public function __construct($root_path) {
        self::$ROOT_DIR = $root_path;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run() {
        echo $this->router->resolve();
    }
}