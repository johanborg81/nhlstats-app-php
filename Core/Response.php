<?php

namespace nhl\core;

/**
 * Class Response
 * 
 * @author Johan Borg <johanborg81@hotmail.com>
 * @package nhl\core
 */
class Response {
    /**
     * Sets teh http status code
     * 
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     * @param int $code
     */
    public function set_status_code(int $code) {
        http_response_code($code);
    }
}