<?php
defined('BASEURL') OR exit('Direct script access is not allowed');

class Login extends Controller {
    // Login page
    public function index(){
        // Generate Home page
        $this->loadView('login');
    }
}
