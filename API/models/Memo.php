<?php
class Memo extends Model {

    public function __construct($request) {
        parent::__construct('memo', $request);
        $this->columns         = get_columns($this->table);
        $this->selectQuery     = 'SELECT memo.*, member.first_name, member.last_name, member.email, member.registration_no FROM memo INNER JOIN member ON memo.member_id = member.id';
        $this->columnsToSearch = 'title, content, datetime, member.first_name, member.last_name, member.email';
        $this->columnOverrides = array(
            'id' => "$this->table.id"
        );
        $this->prepare();
    }
}
