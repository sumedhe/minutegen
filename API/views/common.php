<?php
// Deleted respond as json
http_response_code($status_code);
header('Content-Type: application/json');
echo json_encode($data, JSON_PRETTY_PRINT);
