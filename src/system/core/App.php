<?php
// Main class
class App
{
  protected $config = array();
  protected $db = array();
  protected $routes = array();

  protected $path = '';
  protected $controller = '';
  protected $method = '';
  protected $args = [];

  public function __construct()
  {
    // Load configurations
    $this->config = include(ROOT_PATH . '/system/config/config.php');
    $this->db = include(ROOT_PATH . '/system/database/db.php');
  }

  public function setRoute()
  {
    if (isset($_GET['url']))
    {
      // Sanitize URL
      $url = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);

      // Get route
      $route = isset($this->routes[$url]) ? $this->routes[$url] : $this->routes['default'];
    } else {
      // Default route
      $route = $this->routes['default'];
    }

    // Split contrller and method names
    $route = explode('/', $route);

    // Set controller and method
    $this->controller = $route[0];
    $this->method = $route[1] ? $route[1] : 'index';
  }

  public function run(){
    // Set route to run
    $this->setRoute();

    // Require default controller
    require_once $this->path . '/controllers/' . $this->controller . '.php';

    // Call the default method of the default controller
    $this->controller = new $this->controller();
    call_user_func_array([$this->controller, $this->method], $this->args);
  }
}
