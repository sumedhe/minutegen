<?php
// The controller class
class Controller {
  // Render a view
  public function view($viewName, $data = []) {
    // Parse a new view
    $view = new View($viewName); // viewName is the name of the view file in apps/views/
    $view->parseView();
  }
}
