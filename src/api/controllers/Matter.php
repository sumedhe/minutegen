<?php
class Matter extends Controller {

  public function __construct() {

  }

  public function getAll(){
    $model = $this->model('MatterModel');
    $matters = $model->selectAll();
    var_dump($matters);
  }


}
