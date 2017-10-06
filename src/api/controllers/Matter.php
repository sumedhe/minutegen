<?php
class Matter extends Controller
{
  public function __construct()
  {

  }

  public function getAll(){
    $this->model('MatterModel');
  }
}
