<?php
class Attendance extends Model {

    public function __construct($request) {
        parent::__construct('attendance', $request);
        $this->columns         = get_columns($this->table);
        $this->selectQuery     = 'SELECT attendance.id, member_id, minute_id, first_name, last_name, username, minute_index, datetime FROM attendance INNER JOIN member ON attendance.member_id = member.id INNER JOIN minute ON attendance.minute_id = minute.id';
        $this->columnsToSearch = 'first_name, last_name, username, minute_index';
        $this->columnOverrides = array(
            'id' => "$this->table.id"
        );
        $this->prepare();
    }
}
