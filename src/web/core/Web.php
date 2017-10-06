<?php
require_once $path['WEB_ROOT'] . '/init.php';

class Web extends App
{
  public function __construct()
  {
    parent::__construct();

    $this->setRoute();  // Set route

    $this->run();  // Run the app
  }
}
