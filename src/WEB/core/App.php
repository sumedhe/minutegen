<?php
// Main class
class App {
  protected $config;
  protected $routes;

  protected $controller;
  protected $method;
  protected $args = [];

  public function __construct() {
    // Load configurations
    $this->config = $GLOBALS[config];
    $this->routes = $GLOBALS['routes'];

    $this->setRoute();  // Set rout
    $this->run();  // Run the app
  }

  public function run(){
      isset($this->controller) OR $this->setRoute();

      // Import controller
      require_once $GLOBALS['path']['app'] . '/controllers/' . $this->controller . '.php';
      $this->controller = new $this->controller();

      // Method call of the controller
      call_user_func_array([$this->controller, $this->method], $this->args);
  }

  public function setRoute() {
    if (isset($_GET['url'])) {
      // Sanitize URL
      $url = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);

      // Get route
      $route = isset($this->routes[$url]) ? $this->routes[$url] : $this->routes['default'];
    } else {
      // Default route
      $route = $this->routes['default'];
    }

    // Set controller and method
    $route = explode('/', $route);
    $this->controller = $route[0];
    $this->method = $route[1] ? $route[1] : 'index';
  }

}
