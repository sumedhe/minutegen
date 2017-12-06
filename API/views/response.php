<?php
// HTTP Response
// Encode array as json
http_response_code($GLOBALS['RESPONSE_CODE'][$response['status']]);
header('Content-Type: application/json');
echo json_encode($response, JSON_PRETTY_PRINT);
