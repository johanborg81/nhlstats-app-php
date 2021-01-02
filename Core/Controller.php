<?php

namespace nhl\core;

use nhl\Core\Application;

/**
 * Class Controller
 * 
 * @author Johan Borg <johanborg81@hotmail.com>
 * @package nhl\core
 */
class Controller {
    /**
     * Returns the view from the Application class
     * 
     * @access protected
     * @author Johan Borg <johanborg81@hotmail.com>
     * @param [type] $view
     * @param array $params
     * @return void
     */
    protected function render($view, $params = []) {
        return Application::$app->router->render_view($view, $params);
    }
}