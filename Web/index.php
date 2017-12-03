<?php
// initialization

if (isset($_GET['url']) && substr($_GET['url'], 0, 3) == 'api'){
    // Redirect to API
    define('BASEPATH', dirname(__DIR__, 1) . '/API');
    require_once BASEPATH . '/init.php';
    $_GET['url'] = substr($_GET['url'], 4);
    $app = new Api();
} else {
    // Load the web app
    $controller = 'Home'; //TMP
    define('BASEPATH', dirname(__DIR__) . '/Web');
    require_once BASEPATH . '/init.php';
    require_once path('core', 'Controller');
    require_once path('controllers', $controller);
    $app = new $controller;
    $app->index();
}
