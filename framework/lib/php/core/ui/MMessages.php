<?php
if (!defined('SERVER_ROOT')) {
	header('/error_404');
	exit ;
}

class MMessages {

	public static function complete($title = '', $description = '', $bg = 'none') {
		require (SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_VIEW . '/message_complete.php');
	}

	public static function warning($title = '', $description = '', $bg = 'none') {
		require (SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_VIEW . '/message_warning.php');
	}

	public static function loading($title = '', $description = '', $bg = 'none') {
		require (SERVER_ROOT . '/' . FRAMEWORK . '/' . FRAMEWORK_VIEW . '/message_loading.php');
	}

}
