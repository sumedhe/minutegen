<?php
function returnError($message){
    $data = array(
        'message' => $message
    );
    require_once $GLOBALS['path']['views'] . '/error.php';
}
