<?php
class Matter extends Controller {

  public function __construct() {

  }

  public function getAll(){
    $model = $this->model('MatterModel');
    // $matters = $model->selectAll();
    $matters = $model->selectById(1);

    $this->view('json', $matters);
  }


}
