<?php
// Encode array as json
http_response_code(400);
echo json_encode($data, JSON_PRETTY_PRINT);
