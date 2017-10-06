<?php
$path['app'] = $path['WEB_ROOT'];

// Load configurations
require_once $path['WEB_ROOT'] . '/config/routes.php';

// Load core files
require_once $path['WEB_ROOT'] . '/core/Controller.php';
require_once $path['WEB_ROOT'] . '/core/Model.php';
require_once $path['WEB_ROOT'] . '/core/View.php';
