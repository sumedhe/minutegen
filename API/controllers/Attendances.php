<?php
class Attendances extends Controller {

    public function __construct($request) {
        parent::__construct($request);
    }

    public function main(){

        $this->setModel('Attendance');
        // CHECK FOR OVERRIDES //
        $this->default();
    }

}
