<?php
class DBTools{
    protected $table;
    protected $columns;

    protected $sql;
    protected $sqlParams;

    public function __construct($table, $columns){
        $this->table = $table;
        $this->columns = $columns;
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
                // if (!$this->validColumn($key)) continue;
                $label = $this->toLabel($key);
                if (is_string($value)){
                    $this->sql = $this->sql . " $key like $label AND";
                } else {
                    $this->sql = $this->sql . " $key = $label AND";
                }
                $this->sqlParams["$label"] = $value;
            }
            $this->sql = substr($this->sql, 0, -4);
        }
    }

    public function appendSqlUpdate($data){
        if (count($data) > 0){
            $this->sql .= ' SET';
            foreach ($data as $key => $value) {
                if (!$this->validColumn($key)) continue;
                $this->sql = $this->sql . " $key = :$key,";
                $this->sqlParams[":$key"] = $value;
            }
            $this->sql = substr($this->sql, 0, -1);
        }
    }

    public function appendSqlInsert($data){
        if (count($data) > 0){
            $fields = array_keys($data);
            $this->sql .= '(' . join(', ', $fields) . ') VALUES(';
            foreach ($data as $key => $value){
                // if (!$this->validColumn($key)) continue;
                $this->sql .= ":$key, ";
                $this->sqlParams[":$key"] = $value;
            }
            $this->sql = substr($this->sql, 0, -2) . ')';
        }
    }

    public function appendSqlSearch($words, $columns_to_search){
        if (strlen($words) > 0){
            $this->sql .= ' WHERE';
            $words = explode(' ', $words);
            for ($i=0; $i < count($words); $i++) {
                $this->sql .= " CONCAT_WS(' ', $columns_to_search) LIKE :search_word_$i AND";
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
            // if (!$this->validColumn($field)) return;
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

    public function validColumn($column){
        // if (!in_array($column, $this->columns)){
        //     log_warning('Column not found', "column name = '$column'");
        //     return false;
        // }
        return true;
    }

    public function toLabel($column){
        return ':'.str_replace('.', '_', $column);
    }

    public function printQuery(){
        echo $this->sql, "\n";
        var_dump($this->sqlParams); echo "\n\n";
    }



}
