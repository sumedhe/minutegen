<?php
// Main class
class Api {
    private $_url;

    protected $controller;
    protected $method;
    protected $url;
    protected $gets;

    protected $opts;
    protected $data;
    protected $conditions;

    public function __construct() {
        $this->parseUrl();
        $this->setRoute();  // Set rout
        $this->setOpts();
        $this->setData();
        $this->setConditions();
        $this->run();  // Run the app
    }

    public function run(){
        isset($this->controller) OR $this->setRoute();

        // Import controller
        require_once $GLOBALS['path']['app'] . '/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller($this->packRequest());

        // Method call of the controller
        call_user_func_array([$this->controller, $this->method], []);
    }

    public function parseUrl(){
        // Sanitize URL
        if (isset($_GET['url'])){
            $this->url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        } else {
            $this->url = [];
        }

        // Store get data
        $this->gets = $_GET;
        if (isset($this->gets['url'])) unset($this->gets['url']);
    }


    public function setRoute() {
        // Get route
        $routes = $GLOBALS['routes'];
        if (isset($routes[$this->url[0]])){
            $route = $routes[$this->url[0]];
        } else {
            respond('NOT_FOUND', null, 'Re-check the request url');
        }

        // Set controller and method
        $route = explode('/', $route);
        $this->controller = $route[0];
        $this->method = isset($route[1]) ? $route[1] : 'main';
    }

    public function setOpts(){
        $this->opts = array();
        $optList = array('url', 'sort', 'search', 'offset', 'limit');
        foreach ($this->gets as $key => $value){
            if (in_array($key, $optList)){
                $this->opts[$key] = $value;
                unset($this->gets[$key]);
            }
        }
    }

    public function setConditions(){
        $this->conditions = $this->gets;
        if (isset($this->url[1])){
            $this->conditions['id'] = intval($this->url[1]);
        }
    }

    public function setData() {
        $this->data = json_decode(file_get_contents("php://input"), true);
        if (!$this->data) $this->data = array();
    }

    public function packRequest(){
        $request = array(
            'method'     => $_SERVER['REQUEST_METHOD'],
            'opts'       => $this->opts,
            'data'       => $this->data,
            'conditions' => $this->conditions,
            'url'        => $this->url
        );
        return $request;

    }



}
