<?php

namespace nhl\Core;

/**
 * Class Request
 * 
 * @author Johan Borg <johanborg81@hotmail.com>
 * @package nhl/Core
 */
class Request {
    public function get_path() {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');

        if ($position === false) {
            return $path;
        }
        return $path = substr($path, 0, $position);
    }

    public function get_method() {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}