<?php
class MatterState extends Model {

    public function __construct($request) {
        parent::__construct('matter_state', $request);
        $this->columns = get_columns($this->table);
        $this->columnsToSearch = 'matter_index, title, content, matter_state.state';
        $this->columnOverrides = array(
            'id' => "$this->table.id"
        );
        $this->prepare();
    }
}
