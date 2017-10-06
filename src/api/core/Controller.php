<?php
// The controller class for api
class Controller {
  // Load model
  public function model($model) {
    require_once $GLOBALS['path']['API_ROOT'] . '/models/' . $model . '.php';     // Create new model
    return new $model;
  }

  public function view($viewName, $data = []) {
    // Parse a new view
    $view = new View($viewName);
    $view->parseView();
  }
}
