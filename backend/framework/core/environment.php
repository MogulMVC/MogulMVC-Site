<?php
if (!defined('BACKEND_ROOT')) {
	header('Location: /error_404');
	exit ;
}

if (APPLICATION_ENVIRONMENT == 'development') {
	error_reporting(E_ALL);
} else if (APPLICATION_ENVIRONMENT == 'production') {
	error_reporting(0);
} else {
	exit('APPLICATION_ENVIRONMENT is not set correctly.');
}
