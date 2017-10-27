<?php
class Notifications extends Controller {

    public function __construct($request) {
        parent::__construct($request);
    }

    public function main(){

        $this->setModel('Notification');
        // CHECK FOR OVERRIDES //
        $this->default();
    }

}
