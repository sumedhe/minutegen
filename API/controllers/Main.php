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
        $controllerName = $this->request['url'][0];
        $this->setModel($this->modelNames[$controllerName]);
        $this->default();
    }
}
