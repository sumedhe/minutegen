<?php
class DB {
    protected $database;
    protected $conn;
    protected $stmt;

    public function __construct() {
        $this->database = $GLOBALS['database'];

        try {
            $this->conn = new PDO('mysql:host=' . $this->database['host'] . ';dbname=' . $this->database['db'], $this->database['user'], $this->database['pass']);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            respond('INTERNAL SERVER ERROR', null, 'Connection failed', e.getMessage());
        }
    }

    public function setStmt($sql, $sql_params){
        $this->stmt = $this->conn->prepare($sql);
        foreach ($sql_params as $key => &$value){
            if (is_int($value)){
                $this->stmt->bindParam($key, $value, PDO::PARAM_INT);
            } else {
                $this->stmt->bindParam($key, $value, PDO::PARAM_STR);
            }
        }
    }

    public function execute($sql, $sql_params = [], $state_only = false) {
        $this->setStmt($sql, $sql_params);
        try {
            $this->stmt->execute();
            if ($state_only){
                return [];
                // respond('ACCEPTED', null, 'Success!');
            } else {
                return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch(PDOException $e) {
            respond('INTERNAL_SERVER_ERROR', null, 'Internal Server Error!x', $e->getMessage() . ' q: ' . $sql);
        }
    }

    public function simpleExecute($sql){
        $conn = new mysqli($this->database['host'], $this->database['user'], $this->database['pass'], $this->database['db']);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if ($conn->query($sql) === FALSE) {
            respond('INTERNAL_SERVER_ERROR', null, 'Internal Server Error in update info', $conn->error . ' q: ' . $sql);
        }

        $conn->close();
    }

    public function __destruct(){
        $this->stmt = null;
        $this->conn = null;
    }
}
