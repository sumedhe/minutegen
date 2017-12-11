<?php
class Main extends Controller {

    protected $modelNames = array();

    public function __construct($request) {
        parent::__construct($request);
        $this->modelNames = array(
            'matters'           => 'Matter',
            'minutes'           => 'Minute',
            'members'           => 'Member',
            'attendances'       => 'Attendance',
            'matterlogs'        => 'MatterLog',
            'notifications'     => 'Notification',
            'matterstates'      => 'MatterState',
            'sections'          => 'Section',
            'sectionprivileges' => 'SectionPrivilege',
            'membertypes'       => 'MemberType',
            'memos'             => 'Memo',
            'systemlogs'        => 'SystemLog',
            'searchhistory'     => 'SearchHistory',
        );
    }

    public function main(){
        authorize();
        $controllerName = $this->request['url'][0];
        $this->setModel($this->modelNames[$controllerName]);
        $this->default();
    }

    public function login(){
        // session_unset();
        echo 'login...';
        login();
        if (authorize()){
            respond('OK', 'LOGIN SUCCESS!');
            die();
        }
    }

    public function logout(){
        session_unset();
        header("Location: https://accounts.google.com/logout");
        die();
    }


    public function bypass(){
        // $model = new Model();
        // $model->bypass("CALL modifyMatterState(3,'SENT');");
        // die();
        $s = $this->request['url'][1];
        $sql = 'CALL ' . str_replace('`', '\'', $s) . ';';
        echo $sql;
        $db = new DB();
        $data = $db->execute("CALL modifyMatterState(3,'SENT');", array());
        respond('OK', $data);
    }
}
