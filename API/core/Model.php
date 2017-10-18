<?php
class Model
{
  protected $db;
  protected $table;
  protected $fields;

  public function __construct($table) {
    $this->table = $table; // Set database table

    $this->db = new DB();
    return $this;
  }

  public function selectAll() {
    $sql = "select * from $this->table";
    return $this->db->getAll($sql);
  }

  public function selectById($id){
      $sql = "select * from $this->table where id = $id";
      return $this->db->query($sql);
  }

}
