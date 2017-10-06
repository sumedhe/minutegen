<?php
require_once $path['API_ROOT'] . '/init.php';

class API extends App {

  public function __construct() {
    parent::__construct();

    $this->setRoute();  // Set route
    // args
    $this->run();  // Run the app
  }
}
