<?php
class DB {
    protected $database;
    protected $conn;
    protected $stmt;

    public function __construct() {
        $this->database = $GLOBALS['database'];

        $this->conn = new mysqli(
          $this->database['host'],
          $this->database['user'],
          $this->database['pass'],
          $this->database['db']);
          if ($this->conn->connect_error) die("Connection failed: " . $this->conn->connect_error);
          echo 'Conneted successfully';
    }

    public function setStmt($sql, $params){
        $this->stmt = $this->conn->prepare($sql) or die(returnError('Error in query'));
        // var_dump($this->stmt);

        $types = '';
        foreach ($params as $val){
          if (is_int($val)){
              $types .= 'i';
          } else {
              $types .= 's';
          }
        }
        if (count($params) > 0){
            try{
                echo $types;
                $this->stmt->bind_param($types, ...$params);
            } catch (Exception $e) {
                die("Invalid options");
            }
        }
    }

    public function execute($sql, $params) {
        try {
            $this->setStmt($sql, $params);
            $this->stmt->execute();// or trigger_error("ss", E_USER_ERROR);
            $result = $this->stmt->get_result();// or trigger_error($this->stmt->error, E_USER_ERROR);
            $list = array();
            while ($item = $result->fetch_assoc()){
                array_push($list, $item);
            }
            return $list;

        } catch (Exception $e) {
                echo 'xxx';
        }

    }

    public function __destruct(){
        if ($this->stmt) $this->stmt->close();
        if ($this->conn) $this->conn->close();
    }
}
