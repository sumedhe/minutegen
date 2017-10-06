<?php

// Home controller
class Home extends Controller
{
  // Default controller method
  public function index()
  {
    // Generate view
    $this->view('layouts/header');
    $this->view('layouts/sideNav');
    $this->view('layouts/topBar');
    $this->view('layouts/hovSideNav');
    $this->view('layouts/searchBar');
    $this->view('layouts/test'); // test
    $this->view('layouts/pages');
    $this->view('pages/minutes');
    $this->view('layouts/footer');
  }

}

?>
