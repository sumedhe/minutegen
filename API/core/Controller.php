<?php
// The controller class for api
abstract class Controller {

    protected $request;
    protected $userType;
    protected $model;
    protected $data; // TMP

    abstract function main();

    public function __construct($request){
        $this->request = $request;
        $this->userType = 'admin'; // TMP $_SESSION['user_type'];
    }

    public function default(){
        switch ($this->request['method']) {
            case 'GET':
                $this->get();
                break;
            case 'POST':
                $this->post();
                break;
            case 'PUT':
                $this->put();
                break;
            case 'DELETE':
                $this->delete();
                break;
        }
    }

    public function get(){
        if (isset($this->request['opts']['search'])){
            $this->data = $this->model->search();
        } else {
            $this->data = $this->model->select();
        }
        respond('OK', $this->data);
    }

    public function post(){
        $this->data = $this->model->insert();
        $this->view('result');
        respond('OK', $this->data);
    }

    public function put(){
        $this->data = $this->model->update();
        $this->view('result');
        respond('OK', $this->data);
    }

    public function delete(){
        $this->data = $this->model->delete();
        $this->view('result');
        respond('OK', $this->data);
    }



    // Load model
    public function setModel($model) {
        require_once $GLOBALS['path']['models'] . '/' . $model . '.php';     // Create new model
        $this->model = new $model($this->request);
    }

    public function view($view = 'json') {
        $data = $this->data;
        require_once $GLOBALS['path']['views'] . '/' . $view . '.php';    // Parse a new view
    }
}
