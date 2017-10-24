<?php
class Members extends Controller {

    public function __construct($request) {
        parent::__construct($request);
    }

    public function main(){

        $this->setModel('Member');
        // CHECK FOR OVERRIDES //
        $this->default();
    }

}
