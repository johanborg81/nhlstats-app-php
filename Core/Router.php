<?php

namespace nhl\Core;

/**
 * Class Router
 * 
 * @author Johan Borg <johanborg81@hotmail.com>
 */

class Router {
    public $request;
    public $response; // Response
    public $getRoutes = [];

    /**
     * Router constructor
     *
     * @author Johan Borg <johanborg81@hotmail.com>
     * @param Request $request
     * @param Response $response
     */
    public function __construct(Request $request, Response $response) {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback) {
        return $this->getRoutes['get'][$path] = $callback;
    }

    public function resolve() {
        $path = $this->request->get_path();
        $method = $this->request->get_method();
        $callback = $this->getRoutes[$method][$path] ?? false;

        if ($callback === false) {
            $this->response->set_status_code(404);
            return $this->render_view("_404");
        }

        if (is_string($callback)) {
            return $this->render_view($callback);
        }

        if (is_array($callback)) {
            return call_user_func([new $callback[0], $callback[1]]);
        }
    }

    /**
     * Render the view of the page.
     * Calls the layout_content method to render a specific layout.
     * Calls the render_only_view to render a specific page.
     * 
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     * @method mixed layout_content()
     * @method mixed render_only_view()
     * @param mixed $view
     */
    public function render_view($view, $params = []) {
        $layout_content = $this->layout_content();
        $view_content = $this->render_only_view($view, $params);
        return str_replace('{{content}}', $view_content, $layout_content);
    }

    /**
     * Renders the layout content.
     * 
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     * @param mixed $view_content
     * @return void
     */
    public function render_content($view_content) {
        $layout_content = $this->layout_content();
        return str_replace('{{content}}', $view_content, $layout_content);
    }

    /**
     * Renders the main layout in the view.
     * This is called in the render_view method.
     * 
     * @access protected
     * @author Johan Borg <johanborg81@hotmail.com>
     * 
     */
    protected function layout_content() {
        ob_start();
        include_once Application::$ROOT_DIR."/views/layouts/main.php";
        return ob_get_clean();
    }

    /**
     * This method will be called in render_view method.
     * Will render a specific page.
     * 
     * @access protected
     * @author Johan Borg <johanborg81@hotmail.com>
     * @param mixed $view
     */
    protected function render_only_view($view, $params) {
        extract($params);
        ob_start();
        include_once Application::$ROOT_DIR . "/views/$view.php";
        return ob_get_clean();
    }
}