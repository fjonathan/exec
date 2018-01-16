<?php

// Others
date_default_timezone_set('Europe/Lisbon');

/*
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
*/

// Composer
require_once '../vendor/autoload.php';

// Database
require_once 'core/database.php';

// Database
require_once 'helpers/validate.php';

// Configs
require_once 'core/core.php';
require_once 'core/app.php';

// Global Vars
App::serverPaths();

$app = new Core();
