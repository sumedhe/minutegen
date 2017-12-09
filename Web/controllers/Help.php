<?php
defined('BASEURL') OR exit('Direct script access is not allowed');

class Help extends Controller {
    public function index(){
        // Generate Help page
        $this->loadView('help/help');
    }

    public function getstarted(){
        $this->loadView('help/getstarted');
    }

    public function matters(){
        $this->loadView('help/matters_help');
    }

    public function members(){
        $this->loadView('help/members_help');
    }

    public function minutes(){
        $this->loadView('help/minutes_help');
    }

    public function notification(){
        $this->loadView('help/notification_help');
    }

    public function searching(){
        $this->loadView('help/searching_process');
    }

    public function settings(){
        $this->loadView('help/settings_help');
    }




}
