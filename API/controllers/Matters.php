<?php
class Matters extends Controller {

    public function __construct($request) {
        parent::__construct($request);
    }

    public function main(){
        $this->setModel('Matter');
        $this->default();
    }

    public function setState(){
        $this->setModel('Matter');
        $this->model->query("CALL modifyMatterState(:id, :state);", $this->request['data']);
    }

    public function memoToMatter(){
        $this->setModel('Matter');
        $this->model->query("CALL createMatterFromMemo(:id);", $this->request['data']);
    }

}
