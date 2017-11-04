<?php
class Section extends Model {

    public function __construct($request) {
        parent::__construct('section', $request);
        $this->columns         = get_columns($this->table);
        $this->columnsToSearch = 'section_name';
        $this->columnOverrides = array(
            'id' => "$this->table.id"
        );
        $this->prepare();
    }
}
