<?php
class Matters extends Controller {

    public function __construct($request) {
        parent::__construct($request);
    }

    public function main(){
        $this->setModel('Matter');
        $this->default();
    }

    // Override post
    // public function post(){
    //     echo $this->request['data'];
    // }


}
