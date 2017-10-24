<?php
class Minute extends Model {

    public function __construct($request) {
        parent::__construct('minute', $request);
        $this->columns = get_columns($this->table);
        // $this->selectQuery = 'SELECT minute.id, minute_index, state, datetime, start_time, end_time FROM minute';
        $this->columnsToSearch = 'minute_index, datetime';
        $this->columnOverrides = array(
            'id' => "$this->table.id"
        );
        $this->prepare();
    }
}
