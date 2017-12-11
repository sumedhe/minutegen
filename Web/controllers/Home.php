<?php
defined('BASEURL') OR exit('Direct script access is not allowed');

class Home extends Controller {
    // Home page
    public function index(){
        session_start();
        // Generate Home page
        // echo $_SESSION['user'];
        // if (isset($_SESSION['user'])){
            $this->loadView('layouts/header');
            $this->loadView('layouts/navbar');
            $this->loadView('layouts/sidebar');
            $this->loadView('layouts/content');
            $this->loadView('layouts/matter-editor');
            $this->loadView('layouts/popup');
            $this->loadView('layouts/footer');
        // } else {
        //     $this->login();
        // }
    }

    public function test(){
        $this->loadView('layouts/header');
        $this->loadView('members');
        $this->loadView('layouts/footer');
    }

    // Login page
    public function login(){
        $this->loadView('login');
    }

    // Page not found
    public function pageNotFound(){
        echo 'Page Not Found!';
    }
}
