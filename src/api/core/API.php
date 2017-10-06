<?php
require_once API_ROOT . '/init.php';

class API extends App
{
  public function __construct()
  {
    parent::__construct();

    $this->setRoute();  // Set route
    // args
    $this->run();  // Run the app
  }
}
