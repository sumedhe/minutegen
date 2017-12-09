<?php
class Memo extends Model {

    public function __construct($request) {
        parent::__construct('memo', $request);
        $this->columns         = get_columns($this->table);
        $this->view            = 'memo_view';
        $this->columnsToSearch = 'title, content, datetime, full_name';
        $this->prepare();
    }
}
