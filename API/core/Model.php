<?php
abstract class Model {
    protected $db;
    protected $dbTools;
    protected $request;

    protected $table;
    protected $selectQuery;
    protected $searchFields;

    public function __construct($table, $request) {
        $this->db = new DB();
        $this->table = $table;
        $this->selectQuery = "SELECT * FROM $table";
        $this->request = $request;
        $this->formatRequestFields();
        $this->dbTools = new DBTools($table);
    }


    public function select(){
        $this->dbTools->setSql($this->selectQuery);
        $this->dbTools->appendSqlWhere($this->request['conditions']);
        $this->dbTools->appendSort($this->request['opts']);
        $this->dbTools->appendLimit($this->request['opts']);

        return $this->executeQuery();
    }

    public function insert(){
        $this->dbTools->setSql("INSERT INTO $this->table VALUES");
        $this->dbTools->appendSqlInsert($this->request['data']);

        return $this->executeQuery();
    }

    public function update(){
        $this->dbTools->setSql("UPDATE $this->table");
        $this->dbTools->appendSqlUpdate($this->request['data']);
        $this->dbTools->appendSqlWhere($this->request['conditions']);

        return $this->executeQuery();
    }

    public function delete(){
        $this->dbTools->setSql("DELETE FROM $this->table");
        $this->dbTools->appendSqlWhere($this->request['conditions']);

        return $this->executeQuery();
    }

    public function search(){
        $this->dbTools->setSql($this->selectQuery);
        $this->dbTools->appendSqlSearch($this->request['opts']['search'], $this->searchFields);
        $this->dbTools->appendSort($this->request['opts']);
        $this->dbTools->appendLimit($this->request['opts']);

        return $this->executeQuery();
    }

    public function query($sql, $sql_params){
        $this->dbTools->setSql($sql);
        $this->dbTools->setSqlParams($sql_params);

        return $this->executeQuery();
    }


    public function executeQuery(){
        $this->dbTools->printQuery();

        $sql = $this->dbTools->getSql();
        $sql_params = $this->dbTools->getSqlParams();
        return $this->db->execute($sql, $sql_params);
    }


    public function formatRequestFields(){
        foreach ($this->request['conditions'] as $key => $value){
            if (isset($this->fieldTypes[$key])){
                if ($this->fieldTypes[$key] == 'i') $this->request['conditions'][$key] = intval($value);
            }
        }

        foreach ($this->request['data'] as $key => $value){
            if (isset($this->fieldTypes[$key])){
                if ($this->fieldTypes[$key] == 'i') $this->request['data'][$key] = intval($value);
            }
        }
    }




}
