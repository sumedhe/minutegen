<?php
// The application class
class App
{
  // Set default controller
  protected $controller = 'home';
  protected $method = 'index';
  protected $args = [];

  public function __construct()
  {
    // Get broken up url and set parameters
    $url = $this->parse_url();
    $this->args = $url ? array_values($url) : [];

    // Require default controller
    require_once INC_ROOT . '/web/controllers/' . $this->controller . '.php';
    // Call the default method of the default controller
    $this->controller = new $this->controller();
    call_user_func_array([$this->controller, $this->method], $this->args);
  }

  public function parse_url()
  {
    if (isset($_GET['url']))
    {
      // Explode a trimmed and sanitized URL by /
      return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
    }
  }

}
