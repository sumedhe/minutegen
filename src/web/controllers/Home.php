<?php

// Home controller
class Home extends Controller
{
  // Default controller method
  public function index()
  {
    // Generate view
    $this->view('layouts/header');
    $this->view('layouts/top-bar');
    $this->view('layouts/sideNav');
    $this->view('layouts/hovSideNav');
    $this->view('pages/dash-board');
    $this->view('layouts/test'); // test
    $this->view('layouts/pages');
    $this->view('layouts/footer');
  }

}

?>
