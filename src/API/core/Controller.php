<?php
// The controller class for api
class Controller {
  // Load model
  public function model($model) {
    require_once $GLOBALS['path']['models'] . '/' . $model . '.php';     // Create new model
    return new $model;
  }

  public function view($view, $data = []) {
    require_once $GLOBALS['path']['views'] . '/' . $view . '.php';    // Parse a new view
  }
}
