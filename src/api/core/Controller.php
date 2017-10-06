<?php
// The controller class for api
class Controller {
  // Load model
  public function model($model) {
    require_once ROOT . '/api/models/' . $model . '.php';     // Create new model
    return new $model;
  }

  public function view($viewName, $data = []) {
    // Parse a new view
    $view = new View($viewName);
    $view->parseView();
  }
}
