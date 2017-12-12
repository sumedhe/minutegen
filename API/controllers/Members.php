<?php
class Members extends Controller {

    public function __construct($request) {
        parent::__construct($request);
    }

    public function main(){
        $this->setModel('Member');
        $this->default();
    }

    public function delete(){
        $this->setModel('Member');
        $this->model->query("CALL deleteMember(:id);", $this->request['data']);
        respond('ACCEPTED', $this->data, 'Successfully deleted!');
    }

}
