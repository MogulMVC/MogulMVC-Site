<?php
if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}

// PHP
$GLOBALS['AUTOLOAD_PHP_FRAMEWORK'] = array(
	'core/util/MCache'
);
$GLOBALS['AUTOLOAD_PHP_APPLICATION'] = array();

// CSS
$GLOBALS['AUTOLOAD_CSS_FRAMEWORK'] = array(
	'vendor/normalize',
	'core/MIcons', 
	'core/MStyle', 
	'core/style'
);
$GLOBALS['AUTOLOAD_CSS_APPLICATION'] = array(
	'core/style'
);
$GLOBALS['AUTOLOAD_CSS_EXTERNAL'] = array();

// JS
$GLOBALS['AUTOLOAD_JS_FRAMEWORK'] = array(
	'vendor/jquery',
	'vendor/jquery-ui',
	'core/MScript',
	'core/script'
);
$GLOBALS['AUTOLOAD_JS_APPLICATION'] = array(
	'vendor/jquery-scrollTo', 
	'core/script'
);
$GLOBALS['AUTOLOAD_JS_EXTERNAL'] = array();
