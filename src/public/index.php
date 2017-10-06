<?php
// initialization
require_once '../init.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET')
{
  // Load the home page
  require_once "../web/core/Web.php";
  $web = new Web();
}
else
{
  // Load API
  require_once "../api/core/API.php";
  $app = new API();
}
