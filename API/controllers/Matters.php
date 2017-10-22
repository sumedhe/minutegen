<?php
class Matters extends Controller {

    public function __construct($request) {
        parent::__construct($request);
    }

    public function main(){

        $this->setModel('Matter');
        // CHECK FOR OVERRIDES //
        $this->default();
    }

}
