<?php
defined('BASEPATH') OR define('BASEPATH', dirname(__FILE__));

// Load dependencies
// require_once dirname(__FILE__, 1) . '/vendor/autoload.php';

// Load configurations
require_once BASEPATH . '/config/paths.php';
require_once $path['config'] . '/config.php';
require_once $path['config'] . '/constants.php';
require_once $path['config'] . '/database.php';
require_once $path['config'] . '/routes.php';

// Load helpers
require_once $path['helpers'] . '/responds.php';
require_once $path['helpers'] . '/extra.php';
require_once $path['helpers'] . '/database.php';
require_once $path['helpers'] . '/log.php';

// Load core files
require_once $path['core'] . '/Api.php';
require_once $path['core'] . '/Controller.php';
require_once $path['core'] . '/Model.php';

// Load other files
require_once $path['database'] . '/DB.php';
require_once $path['database'] . '/DBTools.php';
