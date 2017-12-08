<?php
// initialization
$urls = isset($_GET['url']) ? explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL)) : '';
if (isset($urls[0]) && $urls[0] == 'api'){
    // Redirect to API
    define('BASEPATH', dirname(__DIR__, 1) . '/API');
    require_once BASEPATH . '/init.php';
    $_GET['url'] = substr($_GET['url'], 4);
    $app = new Api();
} else {
    // Load the web app
    define('BASEPATH', dirname(__DIR__) . '/Web');
    require_once BASEPATH . '/init.php';

    // Set routes
    $routes = array(
        'home' => 'Home',
        'help' => 'Help',
    );

    // Set controller
    $controller = 'Home';
    if (isset($urls[0]) && isset($routes[$urls[0]]) && file_exists(path('controllers', $routes[$urls[0]]))){
        $controller = $routes[$urls[0]];
    }

    // Load controller
    require_once path('core', 'Controller');
    require_once path('controllers', $controller);
    $app = new $controller;

    // Call method
    if (isset($urls[1])){
        $method = $urls[1];
        if (method_exists($app, $method)){
            // Run method
            $app->$method();
        } else {
            // Show 404 Page
            require_once path('controllers', 'Home');
            $app = new Home();
            $app->pageNotFound();
        }
    } else {
        // Call index method
        $app->index();
    }
}
