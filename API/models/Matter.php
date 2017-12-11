<?php
class Matter extends Model {

    public function __construct($request) {
        parent::__construct('matter', $request);
        $this->columns         = get_columns($this->table);
        $this->view            = 'matter_view';
        $this->columnsToSearch = 'matter_index, title, content, state';
        $this->prepare();
    }

    public function insert(){
        $this->dbTools->setSql("CALL createMatter(:title, :content, :section_id, :amend)");
        $this->dbTools->setSqlParams($this->request['data']);

        return $this->executeQuery();
    }

    public function update(){

        $this->request['data']['id'] = $this->request['url'][1];
        $this->dbTools->setSql("CALL modifyMatter(:id, :title, :content, :section_id, :amend)");
        $this->dbTools->setSqlParams($this->request['data']);

        return $this->executeQuery();
    }

    // // run procedure
    // public function bp(){
    //     $this->dbTools->setSql("CALL test;");
    //     $this->dbTools->setSqlParams(array());
    //     return $this->executeQuery();
    // }
}
