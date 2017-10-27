<?php
class Notification extends Model {

    public function __construct($request) {
        parent::__construct('notification', $request);
        $this->columns = get_columns($this->table);
        $this->selectQuery = 'SELECT * FROM notification';
        $this->columnsToSearch = '';
        $this->columnOverrides = array(
            'id' => "$this->table.id"
        );
        $this->prepare();
    }
}
