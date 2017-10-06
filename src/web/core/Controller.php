<?php
// The controller class
class Controller
{
  public function model($model)   // Load a model
  {
    // Create new model
    require_once ROOT . '/web/models/' . $model . ".php";
    return new $model();
  }

  // Render a view
  public function view($viewName, $data = [])
  {
    // Parse a new view
    $view = new View($viewName); // viewName is the name of the view file in apps/views/
    $view->parseView();
  }
}
