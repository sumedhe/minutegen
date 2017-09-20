<?php
// Set root path for inclusion
define('INC_ROOT', dirname(__DIR__));

// Set http root
define('HTTP_ROOT', INC_ROOT . "/public");

// Set root path for images
define('IMG_ROOT', INC_ROOT . "/public/images");

// Set root path for configuration files
define('CONF_ROOT', INC_ROOT . "/public/config");

// Require core files
require_once INC_ROOT . '/app/core/App.php';
require_once INC_ROOT . '/app/core/Controller.php';
require_once INC_ROOT . '/app/core/View.php';



?>
