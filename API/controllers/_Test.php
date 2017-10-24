<?php
// Exception controller
class _Test extends Controller {

    public function __construct($request){
        parent::__construct($request);
    }

    public function main(){
        $this->setModel('MatterLog');
        // CHECK FOR OVERRIDES //
        $this->default();
    }

}
