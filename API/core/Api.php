<?php
// Main class
class Api {
    private $_url;

    protected $controller;
    protected $method;
    protected $parameters;
    protected $url;
    protected $urls;
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

    // Initialize
    public function run(){
        isset($this->controller) OR $this->setRoute();

        // Import controller
        require_once $GLOBALS['path']['app'] . '/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller($this->packRequest());

        // Method call of the controller
        call_user_func_array([$this->controller, $this->method], []);
    }

    // Sanitize and Parse url
    public function parseUrl(){
        // Store get data
        $this->gets = $_GET;

        // Sanitize URL
        if (isset($this->gets['url'])){
            $this->url = filter_var(rtrim($this->gets['url'], '/'), FILTER_SANITIZE_URL);
            $this->urls = explode('/', $this->url);
            unset($this->gets['url']);
        }
    }

    // Set routes to controller and method
    public function setRoute() {
        // Get route
        $routes = $GLOBALS['routes'];
        if (isset($routes[$this->url])){
            $route = $routes[$this->url];
        } else {
            if (isset($routes[$this->urls[0]])){
                $route = $routes[$this->urls[0]];
            } else {
                respond('NOT_FOUND', null, 'Failed! Re-check the request url');
            }
        }

        // Set controller and method
        $route = explode('/', $route);
        $this->controller = $route[0];
        // var_dump($route);
        $this->method = isset($route[1]) ? $route[1] : 'main';
    }

    // Set options for filtering
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

    // Set conditions from GET data & url id
    public function setConditions(){
        $this->conditions = $this->gets;
        if (isset($this->urls[1]) && intval($this->urls[1]) > 0){
            $this->conditions['id'] = intval($this->urls[1]);
        }
    }

    // Load json data from the request
    public function setData() {
        $this->data = json_decode(file_get_contents("php://input"), true);
        if (!$this->data) $this->data = array();
    }

    // Create array of request information
    public function packRequest(){
        $request = array(
            'method'     => $_SERVER['REQUEST_METHOD'],
            'opts'       => $this->opts,
            'data'       => $this->data,
            'conditions' => $this->conditions,
            'url'        => $this->urls,
        );
        return $request;

    }



}
