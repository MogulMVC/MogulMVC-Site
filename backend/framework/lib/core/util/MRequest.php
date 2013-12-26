<?php

class MRequest {

	public static function is_cli() {
		// if the remote addr is empty it is run by the cli or cron
		if (empty($_SERVER['REMOTE_ADDR'])) {
			return true;
		} else {
			return false;
		}
	}

	public static function is_web() {
		// if the remote addr is empty it is run by the cli or cron
		if (!empty($_SERVER['REMOTE_ADDR'])) {
			return true;
		} else {
			return false;
		}
	}

}
