<?php
// Handling data in JSON format on the server-side using PHP
//
header("Content-Type: application/json");
// build a PHP variable from JSON sent using POST method
$v = json_decode(stripslashes(file_get_contents("php://input")));
// build a PHP variable from JSON sent using GET method
// $v = json_decode(stripslashes($_POST["data"]));
// encode the PHP variable to JSON and send it back on client-side
echo $v->email;
$v = array("email" => "a@b", "password" => "pass");
echo json_encode($v);
?>
