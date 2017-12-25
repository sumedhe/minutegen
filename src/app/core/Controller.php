<?php
// The controller class
class Controller
{
  // Load a model
  public function model($model)
  {
    // Create and return a model
    require_once INC_ROOT . '/app/models/' . $model . ".php";
    return new $model();
  }

  // Render a view
  public function view($viewName, $data = [])
  {
    // Parse a new view
    // viewName is the name of the view file in apps/views/
    $view = new View($viewName);
    $view->parseView();
  }
}

?>
