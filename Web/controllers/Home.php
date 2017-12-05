<?php
defined('BASEURL') OR exit('Direct script access is not allowed');

class Home extends Controller {
    public function index(){
        // Generate Home page
        $this->loadView('layouts/header');
        $this->loadView('layouts/navbar');
        $this->loadView('layouts/sidebar');
        $this->loadView('layouts/content');
        $this->loadView('layouts/matter-editor');
        $this->loadView('layouts/footer');
    }
}
