<?php

namespace nhl\Controllers;
use nhl\Core\Application;

/**
 * Class PagesController
 * 
 * @author Johan Borg <johanborg81@hotmail.com>
 * @package nhl\controllers
 */
class PagesController {
    /**
     * Handles the get request for the home page
     * and renders the view.
     *
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     * @return void
     */
    public function home() {
        $params = [
            'name' => "Johan"
        ];
        return Application::$app->router->render_view('home', $params);
    }

    /**
     * Handles the get request for the about page
     * and renders the view
     * 
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     */
    public function about() {
        return Application::$app->router->render_view('about');
    }
}