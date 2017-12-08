<?php
class Matter extends Model {

    public function __construct($request) {
        parent::__construct('matter', $request);
        $this->columns         = get_columns($this->table);
        $this->view            = 'matter_view';
        $this->columnsToSearch = 'matter_index, title, content, state';
        $this->prepare();
    }
}
