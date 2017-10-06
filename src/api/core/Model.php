<?php
class Model
{
  protected $db;
  protected $table;
  protected $fields;

  public function __construct($table)
  {
    $this->table = $table; // Set database table

    $this->db = new DB();
  }
}
