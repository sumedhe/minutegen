<?php
class Minute extends Model {

    public function __construct($request) {
        parent::__construct('minute', $request);
        $this->columns         = get_columns($this->table);
        $this->view            = 'minute_view';
        $this->columnsToSearch = 'minute_index, datetime';
        $this->prepare();
    }

    public function getByIndex($index){
        $x = array('minute_index' => $index );
        $this->dbTools->appendSqlWhere($x);
        return $this->executeQuery();
    }
}
