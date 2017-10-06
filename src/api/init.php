<?php
$path['app'] = $path['API_ROOT'];

// Load configurations
require_once $path['API_ROOT'] . '/config/routes.php';

// Load core files
require_once $path['API_ROOT'] . '/core/Controller.php';
require_once $path['API_ROOT'] . '/core/Model.php';
// require_once $path['API_ROOT'] . '/core/View.php';
