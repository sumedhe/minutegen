<?php
// The view clas
class View {
  private $file; // View file in /app/views
  private $data; // Data of the view

  public function __construct($file, $data = null) {
    $this->file = $file;
    $this->data = $data;
  }

  public function parseView() {
    include $GLOBALS['path']['app'] . '/views/' . $this->file . '.php';     // Include the view file
  }

}
