<?php
class Matter extends Model {

    public function __construct($request) {
        parent::__construct('matter', $request);
        $this->columns         = get_columns($this->table);
        $this->selectQuery     = 'SELECT matter.id, matter_index, minute.minute_index, matter_state.state, title, content, minute_id, matter_state_id, is_external, section_id, section_name FROM matter INNER JOIN section ON matter.section_id = section.id INNER JOIN minute ON matter.minute_id = minute.id INNER JOIN matter_state ON matter.matter_state_id = matter_state.id';
        $this->columnsToSearch = 'matter_index, title, content, matter_state.state';
        $this->columnOverrides = array(
            'id' => "$this->table.id"
        );
        $this->prepare();
    }
}
