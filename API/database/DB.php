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
            respondError('Connection failed', $e->getMessage());
        }
    }

    public function setStmt($sql, $sql_params){
        $this->stmt = $this->conn->prepare($sql);
        foreach ($sql_params as $key => &$value){
            $this->stmt->bindParam($key, $value);
        }
    }

    public function execute($sql, $sql_params) {
        $this->setStmt($sql, $sql_params);
        try {
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            respondError('Input Error', $e->getMessage());
        }
    }

    public function __destruct(){
        $this->stmt = null;
        $this->conn = null;
    }
}
