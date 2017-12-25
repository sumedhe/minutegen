<?php

// Home controller
class Home extends Controller
{
  // Default controller method
  public function index()
  {
    // Generate view
    $this->view('layouts/header');
    $this->view('layouts/searchBar');
    $this->view('layouts/pages');
    $this->view('layouts/footer');
    $this->view('layouts/topBar');
  }

}

?>
