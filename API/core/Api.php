<?php
// Main class
class Api {
    private $_url;

    protected $controller;
    protected $method;
    protected $opts;

    public function __construct() {
        $url = $this->parseUrl();
        $this->setRoute($url);  // Set rout
        $this->setOpts($url);
        $this->setData($url);
        $this->run();  // Run the app
    }

    public function run(){
        isset($this->controller) OR $this->setRoute();

        // Import controller
        require_once $GLOBALS['path']['app'] . '/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller($this->getRequestData());

        // Method call of the controller
        call_user_func_array([$this->controller, $this->method], []);
    }

    public function parseUrl(){
        if (isset($_GET['url'])){
            // Sanitize URL
            $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        } else {
            $url = [];
        }

        return $url;
    }


    public function setRoute($url) {
        // Get route
        $routes = $GLOBALS['routes'];
        $route = isset($routes[$url[0]]) ? $routes[$url[0]] : $routes['invalid'];

        // Set controller and method
        $route = explode('/', $route);
        $this->controller = $route[0];
        $this->method = isset($route[1]) ? $route[1] : 'main';
    }

    public function setOpts($url){
        $this->opts = array();
        if (isset($url[1])){
            $this->opts['id'] = intval($url[1]);
        }
        $this->opts = array_merge($this->opts, $_GET);
        if (isset($this->opts['url'])) unset($this->opts['url']);
    }

    public function setData($url) {
        $this->data = json_decode(file_get_contents("php://input"), true);
        if (!$this->data) $this->data = array();
    }

    public function getRequestData(){
        $request = array(
            'method' => $_SERVER['REQUEST_METHOD'],
            'opts' => $this->opts,
            'data' => $this->data,
        );
        return $request;
    }



}
