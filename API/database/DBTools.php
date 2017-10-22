<?php
class DBTools{
    protected $table;

    protected $sql;
    protected $sqlParams;

    public function __construct($table){
        $this->table = $table;
        $this->reset();
    }

    public function setSql($sql){
        $this->sql = $sql;
    }

    public function getSql(){
        return $this->sql;
    }

    public function setSqlParams($sql_params){
        $this->sqlParams = $sql_params;
    }

    public function getSqlParams(){
        return $this->sqlParams;
    }



    public function appendSqlWhere($conditions){
        if (count($conditions) > 0){
            $this->sql .= ' WHERE';
            foreach ($conditions as $key => $value) {
                if (is_string($value)){
                    $this->sql = $this->sql . " $key like :$key AND";
                } else {
                    $this->sql = $this->sql . " $key = :$key AND";
                }
                $this->sqlParams[":$key"] = $value;
            }
            $this->sql = substr($this->sql, 0, -4);
        }
    }

    public function appendSqlUpdate($data){
        if (count($data) > 0){
            $this->sql .= ' SET';
            foreach ($data as $key => $value) {
                $this->sql = $this->sql . " $key = :$key,";
                $this->sqlParams[":$key"] = $value;
            }
            $this->sql = substr($this->sql, 0, -1);
        }
    }

    public function appendSqlInsert($data){
        if (count($data) > 0){
            $fields = array_keys($arr);

            $this->sql .= '(' . join(', ', $fields) . ') VALUES(';
            foreach ($data as $key => $value){
                $this->sql .= ":$key, ";
                $this->sqlParams[":$key"] = $value;
            }
            $this->sql = substr($this->sql, 0, -2) . ')';
        }
    }

    public function appendSqlSearch($words, $search_fields){
        if (strlen($words) > 0){
            $this->sql .= ' WHERE';
            $words = explode(' ', $words);
            for ($i=0; $i < count($words); $i++) {
                $this->sql .= " CONCAT_WS(' ', $search_fields) LIKE :search_word_$i AND";
                $this->sqlParams[":search_word_$i"] = "%$words[$i]%";
            }
            $this->sql = substr($this->sql, 0, -4);
        }
    }

    public function appendSort($opts){
        if (isset($opts['sort']) and strlen($opts['sort']) > 0){
            $field = $opts['sort'];
            if (strpos($field, ' ')) return;
            $direction = $field[0] == '-' ? 'DESC' : 'ASC';
            if ($field[0] == '+' || $field[0] == '-') $field = substr($field, 1);
            $this->sql .= " ORDER BY $field $direction";
        }
    }

    public function appendLimit($opts){
        if (isset($opts['limit'])){
            $limit = intval($opts['limit']);
            $offset = (isset($opts['offset'])) ? intval($opts['offset']) : 0;
            $this->sql .= " LIMIT $limit OFFSET $offset";
        }
    }


    public function reset(){
        $this->sql = '';
        $this->sqlParams = array();
    }

    public function printQuery(){
        echo $this->sql, "\n";
        var_dump($this->sqlParams); echo "\n\n";
    }



}
