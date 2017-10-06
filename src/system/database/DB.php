<?php
class DB
{
  protected $database;
  protected $conn;

  public function __construct()
  {
    $this->database = $GLOBALS['database'];

    $this->conn = mysqli_connect(
      $this->database['host'],
      $this->database['user'],
      $this->database['pass']) or
      die('Database connection error' . mysqli_connect_error());

    echo 'Conneted successfully';

  }



}
