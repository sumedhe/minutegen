<?php
class SectionPrivilege extends Model {

    public function __construct($request) {
        parent::__construct('section_privilege', $request);
        $this->columns         = get_columns($this->table);
        $this->selectQuery     = 'SELECT * FROM section_privilege INNER JOIN section ON section_privilege.section_id = section.id INNER JOIN member_type ON section_privilege.member_type_id = member_type.id';
        $this->columnsToSearch = 'section.section_name, member_type.member_type_name';
        $this->columnOverrides = array(
            'id' => "$this->table.id"
        );
        $this->prepare();
    }
}
