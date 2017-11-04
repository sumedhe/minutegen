<?php
class DefaultController extends Controller {

    protected $models = array();

    public function __construct($request) {
        parent::__construct($request);
        $this->models = array(
            'matters' => 'Matter',
            'minutes' => 'Minute',
            'members' => 'Member',
            'attendances' => 'Attendance',
            'matterslog' => 'MatterLog',
            'notifications' => 'Notification',
            'matterstate' => 'MatterState',
            'sections' => 'Section',
        );
    }

    public function main(){
        $controllerName = $this->request['url'][0];
        $this->setModel($this->models[$controllerName]);
        $this->default();
    }
}
