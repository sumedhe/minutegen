<?php
// initialization

// Redirect if API Call
if (isset($_GET['url']) && substr($_GET['url'], 0, 3) == 'api'){
    $_GET['url'] = substr($_GET['url'], 4);
    define('BASEPATH', dirname(__DIR__, 2) . '/API');
    require_once BASEPATH . '/init.php';
    $app = new Api();
    exit;
}

// Load the home page
require_once '../init.php';
$web = new App();
