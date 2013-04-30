<?php
if (!defined('SERVER_ROOT')) {
	header('/error_404');
	exit ;
}

$GLOBALS['AUTOLOAD_PHP_FRAMEWORK'] = array();
$GLOBALS['AUTOLOAD_PHP_APPLICATION'] = array();

$GLOBALS['AUTOLOAD_CSS_FRAMEWORK'] = array('vendor/normalize', 'core/MIcons', 'core/MStyle', 'core/style');
$GLOBALS['AUTOLOAD_CSS_APPLICATION'] = array('core/style');
$GLOBALS['AUTOLOAD_CSS_EXTERNAL'] = array();

$GLOBALS['AUTOLOAD_JS_FRAMEWORK'] = array('vendor/jquery', 'vendor/jquery-ui', 'core/MScript', 'core/script');
$GLOBALS['AUTOLOAD_JS_APPLICATION'] = array('vendor/jquery-scrollTo', 'core/script');
$GLOBALS['AUTOLOAD_JS_EXTERNAL'] = array();
