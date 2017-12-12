<?php
class Member extends Model {

    public function __construct($request) {
        parent::__construct('member', $request);
        $this->columns         = get_columns($this->table);
        $this->view            = 'member_view';
        $this->columnsToSearch = 'first_name, last_name, full_name, email, phone';
        $this->prepare();
    }
}
