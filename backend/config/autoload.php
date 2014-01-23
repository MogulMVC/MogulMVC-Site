<?php

// PHP
$GLOBALS['AUTOLOAD_PHP_FRAMEWORK'] = array(
	'core/util/MCache'
);
$GLOBALS['AUTOLOAD_PHP_APPLICATION'] = array();

// Component
$GLOBALS['AUTOLOAD_COMPONENT'] = array(
	'normalize-css/normalize.css',
	'mogul-css/bin/MStyle.css',
	'mogul-icons/bin/MIcons.css',
	'jquery/jquery.js',
	'jquery-ui/ui/jquery-ui.js',
	'mogul-js/bin/MScript.js'
);

// CSS
$GLOBALS['AUTOLOAD_CSS_FRAMEWORK'] = array(
	'core/style'
);
$GLOBALS['AUTOLOAD_CSS_APPLICATION'] = array(
	'vendor/syntaxhighlighter/shCoreRDark',
	'core/style'
);
$GLOBALS['AUTOLOAD_CSS_EXTERNAL'] = array();

// JS
$GLOBALS['AUTOLOAD_JS_FRAMEWORK'] = array(
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
