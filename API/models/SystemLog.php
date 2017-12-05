<?php
class SystemLog extends Model {

    public function __construct($request) {
        parent::__construct('system_log', $request);
        $this->columns         = get_columns($this->table);
        $this->selectQuery     = 'SELECT system_log.*, type, log_user FROM system_log INNER JOIN system_log_type ON system_log.system_log_type_id = system_log_type.id';
        $this->columnsToSearch = 'type, description, datetime';
        $this->columnOverrides = array(
            'id' => "$this->table.id"
        );
        $this->prepare();
    }
}
