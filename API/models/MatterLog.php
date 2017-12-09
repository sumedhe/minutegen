<?php
class MatterLog extends Model {

    public function __construct($request) {
        parent::__construct('matter_log', $request);
        $this->columns         = get_columns($this->table);
        $this->view            = 'matter_log_view';
        $this->columnsToSearch = 'log_message, matter_log.datetime, matter.title, minute.minute_index, matter.matter_index';
        $this->prepare();
    }
}
