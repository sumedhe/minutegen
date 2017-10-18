<?php
// initialization

if ($_SERVER['REQUEST_METHOD'] === 'GET')
{
  // Load the home page
  require_once '../init.php';
  $web = new App();
}
else
{
  // Load API
  define('BASEPATH', dirname(__DIR__, 2) . '/API');
  require_once BASEPATH . '/init.php';
  // var_dump($paths);
  $app = new App();
}
