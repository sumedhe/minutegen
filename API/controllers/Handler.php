<?php
// Exception controller
class Handler extends Controller {

    public function __construct(){

    }

    public function error(){
        echo "ERROR IN PROCESS!";
    }

    public function invalid(){
        echo "INVALID API CALL";
    }
}
