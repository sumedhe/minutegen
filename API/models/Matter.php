<?php
class Matter extends Model {

    public function __construct($request) {
        parent::__construct('matter', $request);
        $this->columns = get_columns($this->table);
        $this->selectQuery = 'SELECT matter.id, matter_index, title, content, minute_id, matter_state_id, is_external, section_id, section_name FROM matter INNER JOIN section ON matter.section_id = section.id';
        $this->columnsToSearch = 'matter_index, title, content';
        $this->columnOverrides = array(
            'id' => "$this->table.id"
        );
        $this->prepare();
    }
}
