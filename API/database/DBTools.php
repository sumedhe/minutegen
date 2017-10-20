<?php
class DBTools{
    protected $table;
    protected $fieldTypes;

    protected $sql;
    protected $params;

    public function __construct($table, $field_types){
        $this->table = $table;
        $this->fieldTypes = $field_types;
        $this->reset();
    }

    public function setSql($sql){
        $this->sql = $sql;
    }

    public function getSql(){
        return $this->sql;
    }

    public function setParams($params){
        $this->params = $params;
    }

    public function getParams(){
        return $this->params;
    }


    public function appendSqlWhere($arr){
        if (count($arr) > 0){
            $this->sql .= ' WHERE';
            foreach ($arr as $key => $value) {
                if (is_string($value)){
                    $this->sql = $this->sql . " $key like ? AND";
                } else {
                    $this->sql = $this->sql . " $key = ? AND";
                }
                array_push($this->params, $value);
            }
            $this->sql = substr($this->sql, 0, -4);
        }
    }

    public function appendSqlUpdate($arr){
        if (count($arr) > 0){
            $this->sql .= ' SET';
            foreach ($arr as $key => $value) {
                $this->sql = $this->sql . " $key = ?,";
                array_push($this->params, $value);
            }
            $this->sql = substr($this->sql, 0, -1);
        }
    }

    public function appendSqlInsert($arr){
        if (count($arr) > 0){
            $fields = array_keys($arr);

            $this->sql .= '(' . join(', ', $fields) . ') VALUES(';
            foreach ($arr as $key => $value){
                $this->sql .= '?, ';
                array_push($this->params, $value);
            }
            $this->sql = substr($this->sql, 0, -2) . ')';
        }
    }

    public function appendSqlSearch($words, $search_fields){
        if (strlen($words) > 0){
            $this->sql .= ' WHERE';
            $words = explode(' ', $words);
            foreach ($words as $w){
                $this->sql .= " CONCAT_WS(' ', $search_fields) LIKE '%$w%' AND";
            }
            $this->sql = substr($this->sql, 0, -4);
        }
    }




    public function reset(){
        $this->sql = '';
        $this->params = array();
    }

    private function _printQuery(){
        echo "<br>",$this->sql, "<br>";
        var_dump($this->params);
    }



}
