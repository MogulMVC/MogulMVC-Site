<?php
if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}

$GLOBALS['SESSION_DB'] = FALSE;

$GLOBALS['SESSION'] = array(

	'type' => 'dbtype',
	'host' => 'localhost',
	'port' => '3306',
	'name' => 'dbname',
	'user' => 'dbuser',
	'pass' => 'dbpass',
	'table' => 'dbtable'
		
);