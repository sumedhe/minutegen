<?php
abstract class Model {
    public $request;
    protected $db;
    protected $dbTools;

    protected $table;
    protected $view;
    protected $columns;
    protected $columnsToSearch;
    // protected $columnOverrides;

    public function __construct($table, $request) {
        $this->table = $table;
        $this->request = $request;
    }

    public function prepare(){
        if (!isset($this->view)) $this->view = $this->table;
        $this->setColumnTypes();
        // $this->overrideColumns();
        $this->db = new DB();
        $this->dbTools = new DBTools($this->table, $this->columns);
    }


    public function select(){
        $this->dbTools->setSql("SELECT * FROM $this->view");
        $this->dbTools->appendSqlWhere($this->request['conditions']);
        $this->dbTools->appendSort($this->request['opts']);
        $this->dbTools->appendLimit($this->request['opts']);

        return $this->executeQuery();
    }

    public function insert(){
        $this->dbTools->setSql("INSERT INTO $this->table");
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
        $this->dbTools->setSql("SELECT * FROM $this->view");
        $this->dbTools->appendSqlSearch($this->request['opts']['search'], $this->columnsToSearch);
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
        $sql = $this->dbTools->getSql();
        $sql_params = $this->dbTools->getSqlParams();
        // Execute and return if GET
        return $this->db->execute($sql, $sql_params, $this->request['method'] != 'GET');
    }



    public function setColumnTypes(){
        foreach ($this->request['data'] as $key => $value){
            if (array_key_exists($key, $this->columns)){
                if ($this->columns[$key] == 'int'){
                    $this->request['data'][$key] = intval($this->request['data'][$key]);
                }
            }
        }

        foreach ($this->request['conditions'] as $key => $value){
            if (array_key_exists($key, $this->columns)){
                if ($this->columns[$key] == 'int'){
                    $this->request['conditions'][$key] = intval($this->request['conditions'][$key]);
                }
            }
        }
    }

    public function overrideColumns(){
        if (!isset($this->columnOverrides)){
            return;
        }
        foreach ($this->request['conditions'] as $key => $value){
            if (array_key_exists($key, $this->columnOverrides)){
                $this->request['conditions'][$this->columnOverrides[$key]] = $value;
                unset($this->request['conditions'][$key]);
            }
        }
    }


    public static function getModel($model, $request){
        // Return model
        require_once $GLOBALS['path']['models'] . '/' . $model . '.php';     // Create new model
        return new $model($request);
    }


}
