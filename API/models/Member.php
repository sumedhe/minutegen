<?php
class Member extends Model {

    public function __construct($request) {
        parent::__construct('member', $request);
        $this->columns = get_columns($this->table);
        $this->selectQuery = 'SELECT member.id, first_name, last_name, username, password, nic, gender, address, email, phone, registration_no, member_type_name FROM member INNER JOIN member_type ON member.member_type_id = member_type.id';
        $this->columnsToSearch = 'first_name, last_name, username, password, nic, address, email, phone, registration_no, member_type_name';
        $this->columnOverrides = array(
            'id' => "$this->table.id"
        );
        $this->prepare();
    }
}
