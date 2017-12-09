<?php
class MatterLog extends Model {

    public function __construct($request) {
        parent::__construct('matter_log', $request);
        $this->columns         = get_columns($this->table);
        // $this->selectQuery     = 'SELECT matter_log.id, matter_id, log_message, matter_log.datetime, matter.matter_index, matter.title, matter.minute_id FROM matter_log INNER JOIN matter ON matter_log.matter_id = matter.id INNER JOIN minute ON matter.minute_id = minute.id';
        $this->columnsToSearch = 'log_message, matter_log.datetime, matter.title, minute.minute_index, matter.matter_index';
        $this->prepare();
    }
}
