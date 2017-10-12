<?php
defined('BASEPATH') OR define('BASEPATH', dirname(__FILE__));

// Load configurations
require_once BASEPATH . '/config/paths.php';
require_once $path['config'] . '/config.php';
require_once $path['config'] . '/routes.php';

// Load core files
require_once $path['core'] . '/App.php';
require_once $path['core'] . '/Controller.php';
require_once $path['core'] . '/View.php';
