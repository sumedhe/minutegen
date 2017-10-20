<?php
class Matter extends Model {

    public function __construct($request) {
        $field_types = array(
            'default' => 's',
            'id' => 'i',
            'minute_id' => 'i',
            'section_id' => 'i',
            'matter_state_id' => 'i',
            'is_external' => 'i'
        );

        parent::__construct('matter', $field_types, $request);

        // $this->selectQuery = 'SELECT matter.id, matter_index, title, content, minute_id, matter_state_id, is_external, section_id, section_name FROM matter INNER JOIN section ON matter.section_id = section.id';
        $this->searchFields = 'matter_index, title, content';
    }
}
