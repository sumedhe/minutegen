<?php
defined('BASEURL') OR exit('Direct script access is not allowed');

class Controller {
    public function loadView($view_name){
        // Load view
        include_once(path('views', $view_name));
    }
}
