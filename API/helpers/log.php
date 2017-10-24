<?php
function add_log($title, $message = '', $type = 'GENERAL'){
    // LOG HERE
    echo "$type \t $title \t $message \n";
}

function log_warning($title, $message = ''){
    add_log($title, $message, 'WARNING');
}
