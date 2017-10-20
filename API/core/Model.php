<?php
abstract class Model {
    protected $db;
    protected $dbTools;
    protected $request;

    protected $table;
    protected $selectQuery;
    protected $fieldTypes;
    protected $searchFields;

    public function __construct($table, $field_types, $request) {
        $this->db = new DB();
        $this->table = $table;
        $this->selectQuery = "SELECT * FROM $table";
        $this->request = $request;
        $this->formatRequestFields();
        $this->dbTools = new DBTools($table, $field_types);
    }


    public function select(){
        $this->dbTools->setSql($this->selectQuery);
        $this->dbTools->appendSqlWhere($this->request['opts']);

        $this->_printQuery();
        return $this->executeQuery();
    }

    public function insert(){
        $this->dbTools->setSql("INSERT INTO $this->table VALUES");
        $this->dbTools->appendSqlInsert($this->request['data']);

        $this->_printQuery();
        return $this->executeQuery();
    }

    public function update(){
        $this->dbTools->setSql("UPDATE $this->table");
        $this->dbTools->appendSqlUpdate($this->request['data']);
        $this->dbTools->appendSqlWhere($this->request['opts']);

        $this->_printQuery();
        return $this->executeQuery();
    }

    public function delete(){
        $this->dbTools->setSql("DELETE FROM $this->table");
        $this->dbTools->appendSqlWhere($this->request['opts']);

        $this->_printQuery();
        return $this->executeQuery();
    }

    public function search(){
        $this->dbTools->setSql($this->selectQuery);
        $this->dbTools->appendSqlSearch($this->request['opts']['search'], $this->searchFields);

        $this->_printQuery();
        return $this->executeQuery();
    }





    public function executeQuery(){
        $sql = $this->dbTools->getSql();
        $params = $this->dbTools->getParams();
        return $this->db->execute($sql, $params);
    }


    public function formatRequestFields(){
        foreach ($this->request['opts'] as $key => $value){
            if (isset($this->fieldTypes[$key])){
                if ($this->fieldTypes[$key] == 'i') $this->request['opts'][$key] = intval($value);
            }
        }

        foreach ($this->request['data'] as $key => $value){
            if (isset($this->fieldTypes[$key])){
                if ($this->fieldTypes[$key] == 'i') $this->request['data'][$key] = intval($value);
            }
        }
    }

    private function _printQuery(){
        echo "<br>",$this->dbTools->getSql(), "<br>";
        var_dump($this->dbTools->getParams());
        echo "<br>";
    }


}
