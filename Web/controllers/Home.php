<?php
defined('BASEURL') OR exit('Direct script access is not allowed');

class Home extends Controller {
    // Home page
    public function index(){
        // Generate Home page
        $this->loadView('layouts/header');
        $this->loadView('layouts/navbar');
        $this->loadView('layouts/sidebar');
        $this->loadView('layouts/content');
        $this->loadView('layouts/matter-editor');
        $this->loadView('layouts/footer');
    }

    // Page not found
    public function pageNotFound(){
        echo 'Page Not Found!';
    }
}
