<?php

namespace nhl\Controllers;
use nhl\Core\Application;
use nhl\Core\Controller;

/**
 * Class PagesController
 * 
 * @author Johan Borg <johanborg81@hotmail.com>
 * @package nhl\controllers
 */
class PagesController extends Controller {
    /**
     * Handles the get request for the home page
     * and renders the view.
     *
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     * @return void
     */
    public function home() {
        return $this->render('home');
    }

    /**
     * Handles the get request for the about page
     * and renders the view
     * 
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     */
    public function about() {
        return $this->render('about');
    }

    /**
     * Handles the get request for the player page
     * and renders the view
     * 
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     */
    public function player() {
        return $this->render('player');
    }

    /**
     * Handles the get request for the player page
     * and renders the view
     * 
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     */
    public function team() {
        return $this->render('team');
    }
}