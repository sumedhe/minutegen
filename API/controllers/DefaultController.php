<?php
class DefaultController extends Controller {

    protected $models = array();

    public function __construct($request) {
        parent::__construct($request);
        $this->models = array(
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
        );
    }

    public function main(){
        $controllerName = $this->request['url'][0];
        $this->setModel($this->models[$controllerName]);
        $this->default();
    }
}
