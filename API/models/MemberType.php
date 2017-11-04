<?php
class MemberType extends Model {

    public function __construct($request) {
        parent::__construct('member_type', $request);
        $this->columns         = get_columns($this->table);
        $this->columnsToSearch = 'member_type_name';
        $this->columnOverrides = array(
            'id' => "$this->table.id"
        );
        $this->prepare();
    }
}
