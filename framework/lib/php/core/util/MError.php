<?php

class MError {

	public static function error_404($display_error = '') {

		header('HTTP/1.0 404 Not Found');

		require_once (SERVER_ROOT . '/' . APPLICATION . '/' . APPLICATION_CONTROLLER . '/' . APPLICATION_ERROR_404_CONTROLLER);

		$error_404_class = basename(APPLICATION_ERROR_404_CONTROLLER, '.php');

		$error_404_class = ucfirst($error_404_class);

		if (!is_object($error_404_class)) {
			$error_object = new $error_404_class();
		}

		$error_object -> index();

		exit($display_error);
	}

}
