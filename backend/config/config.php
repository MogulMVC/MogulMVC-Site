<?php
if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}

date_default_timezone_set('America/New_York');

// Application
define('APPLICATION_COMPANY', 'Mogul MVC');
define('APPLICATION_NAME', 'Mogul MVC');
define('APPLICATION_DESCRIPTION', 'Mogul MVC is an MVC framework and UI library written in PHP, jQuery, and Sass.');
define('APPLICATION_PASSWORD', 'mogulpass321456');
define('APPLICATION_VERSION', '130526');

// Environment
// 'development' 'production'
define('APPLICATION_ENVIRONMENT', 'development');

// URL Keywords
define('APPLICATION_ACTION_URL', 'action');
define('APPLICATION_API_URL', 'api');

// Controllers
define('APPLICATION_DEFAULT_CONTROLLER', 'Main');
define('APPLICATION_ERROR_404_CONTROLLER', 'Error_404');

// Templates
//File locations start within the application view folder
define('APPLICATION_HEAD', 'template/head');
define('APPLICATION_HEADER', 'template/header');
define('APPLICATION_FOOTER', 'template/footer');
define('APPLICATION_FOOT', 'template/foot');
