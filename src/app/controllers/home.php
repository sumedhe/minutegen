<?php

// Home controller
class Home extends Controller
{
  // Default controller method
  public function index()
  {
    // Generate view
    $this->view('layouts/header');
    $this->view('pages/sidenav');
    $this->view('layouts/topBar');
    $this->view('layouts/searchBar');
    $this->view('layouts/pages');
    $this->view('pages/matters');
    $this->view('layouts/footer');
  }

}

?>
