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

// Component
<<<<<<< HEAD
$GLOBALS['AUTOLOAD_COMPONENT'] = array('mogul-icons/bin/MStyle.css');
=======
$GLOBALS['AUTOLOAD_COMPONENT'] = array('mogul-icons/bin/MIcons.css');
>>>>>>> 3b40d27670cecca6d4c5c63f214b12a4a265e893

// CSS
$GLOBALS['AUTOLOAD_CSS_FRAMEWORK'] = array(
	'vendor/normalize',
	'core/MStyle', 
	'core/style'
);
$GLOBALS['AUTOLOAD_CSS_APPLICATION'] = array(
	'vendor/syntaxhighlighter/shCoreRDark',
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
	'vendor/jquery-scrollTo/jquery-scrollTo', 
	'vendor/syntaxhighlighter/shCore',
	'vendor/syntaxhighlighter/shBrushCss',
	'vendor/syntaxhighlighter/shBrushJScript',
	'vendor/syntaxhighlighter/shBrushPhp',
	'core/script'
);
$GLOBALS['AUTOLOAD_JS_EXTERNAL'] = array();
