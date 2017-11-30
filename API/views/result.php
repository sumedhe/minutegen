<?php
// Encode array as json
http_response_code(200);
header('Content-Type: application/json');
echo json_encode($data, JSON_PRETTY_PRINT);
