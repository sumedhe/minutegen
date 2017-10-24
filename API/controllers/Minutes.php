<?php
class Minutes extends Controller {

    public function __construct($request) {
        parent::__construct($request);
    }

    public function main(){

        $this->setModel('Minute');
        // CHECK FOR OVERRIDES //
        $this->default();
    }

}
