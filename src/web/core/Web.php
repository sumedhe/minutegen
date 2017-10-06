<?php
class Web extends App
{
  public function __construct()
  {
    parent::__construct();

    // Load required
    require_once ROOT_PATH . '/web/core/Controller.php';
    require_once ROOT_PATH . '/web/core/View.php';

    // Set attributes
    $this->path = ROOT_PATH . '/web';
    $this->routes = include(ROOT_PATH . '/web/core/Router.php');
    // $this->args = '';

    // Run the app
    $this->run();
  }
}
