<?php
class MatterModel extends Model {

  public function __construct() {
    parent::__construct('matter_state'); // CHANGE TO MATTER

  }

  public function getMatters(){
    $sql = "select * from $this->table";
    $matters = $this->db->getAll($sql);
    return $matters;
  }
}
