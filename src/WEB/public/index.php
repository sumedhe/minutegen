<?php
// initialization
require_once '../init.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET')
{
  // Load the home page
  $web = new App();
}
else
{
  // Load API
  // require_once "../api/core/API.php";
  // $app = new API();
}
