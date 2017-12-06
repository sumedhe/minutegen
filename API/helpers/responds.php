<?php
// Send quick respond
function respond($status, $data, $message = '', $log = ''){
    $response = array(
        'status' => $status,
        'data' => $data,
        'message' => $message,
        'log' => $log,
    );
    require_once $GLOBALS['path']['views'] . '/response.php';
    exit();
}
