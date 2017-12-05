<?php
class SearchHistory extends Model {

    public function __construct($request) {
        parent::__construct('search_history', $request);
        $this->columns         = get_columns($this->table);
        $this->columnsToSearch = 'keywords';
        $this->columnOverrides = array(
            'id' => "$this->table.id"
        );
        $this->prepare();
    }
}
