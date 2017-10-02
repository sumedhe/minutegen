<?php
// Load constants //;
require_once '../system/config/constants.php';

// Set http root
define('HTTP_ROOT', INC_ROOT . '/public');

// Set root path for images
define('IMG_ROOT', INC_ROOT . '/public/images');

// Set root path for configuration files
define('CONF_ROOT', INC_ROOT . '/public/config');


// Require core files
require_once INC_ROOT . '/web/core/App.php';
require_once INC_ROOT . '/web/core/Controller.php';
require_once INC_ROOT . '/web/core/View.php';
