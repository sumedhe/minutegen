<?php

function respond_error($title, $message = '', $status_code = 400){
    respond($title, $message, "", $status_code);
    exit();
}

function respond_success($title, $message = ''){
    $data = array(
        'title'     => $title,
        'message'   => $message,
        'timestamp' => get_timestamp()
    );
    require_once $GLOBALS['path']['views'] . '/success.php';
    exit();
}

function respond($title, $message, $content, $status_code){
    $data = array(
        'status'    => $status_code,
        'title'     => $title,
        'message'   => $message,
        'data'      => $content,
        'timestamp' => get_timestamp()
    );
    require_once $GLOBALS['path']['views'] . '/common.php';
    exit();
}

// function respondResult($data){
//     $data = array(
//         'data' => $data,
//         'timestamp' => get_timestamp(),
//         'warnings' =>
//     );
//     require_once $GLOBALS['path']['views'] . '/result.php';
//     exit();
// }
