<?php
class DB {
  protected $database;
  protected $conn;
  protected $sql;

  public function __construct() {
    $this->database = $GLOBALS['database'];

    $this->conn = mysqli_connect(
      $this->database['host'],
      $this->database['user'],
      $this->database['pass'],
      $this->database['db']) or
      die('Database connection error' . mysqli_connect_error());

    // echo 'Conneted successfully';
  }

  public function query($sql) {
    $this->sql = $sql;
    $result = $this->conn->query($sql);
    $item = $result->fetch_assoc();

    if ($result->num_rows > 0) {
        
    }
    return $item;
  }

  public function getAll($sql) {
    $this->ssql = $sql;
    $result = $this->conn->query($sql);
    $list = array();
    while($row = $result->fetch_assoc()) {
      $list[] = $row;
    }
    return $list;
  }
}
