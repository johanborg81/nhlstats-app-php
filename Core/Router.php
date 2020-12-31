<?php

namespace nhl\Core;

/**
 * Class Router
 * 
 * @author Johan Borg <johanborg81@hotmail.com>
 */

class Router {
    public $request;
    public $getRoutes = [];

    public function __construct($request) {
        $this->request = $request;
    }

    public function get($path, $callback) {
        return $this->getRoutes['get'][$path] = $callback;
    }

    public function resolve() {
        $path = $this->request->get_path();
        $method = $this->request->get_method();
        $callback = $this->getRoutes[$method][$path] ?? false;

        if ($callback === false) {
            echo "Page not found";
            exit;
        }

        echo call_user_func($callback);
    }
}