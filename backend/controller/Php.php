<?php

class Php {

	function index() {
		$data['page_title'] = 'PHP';
		MLoad::view('php/index', $data);
	}

	function configuration() {
		$data['page_title'] = 'PHP Configuration';
		MLoad::view('php/configuration', $data);
	}

	function controllers() {
		$data['page_title'] = 'PHP Controllers';
		MLoad::view('php/controllers', $data);
	}

	function libraries() {
		$data['page_title'] = 'PHP Libraries';
		MLoad::view('php/libraries', $data);
	}

	function vendor_libraries() {
		$data['page_title'] = 'PHP Vendor Libraries';
		MLoad::view('php/vendor_libraries', $data);
	}

	function library() {

		$library = MURL::segment(3);

		if (!$library || !file_exists(BACKEND_ROOT . '/' . APPLICATION_VIEW . '/php/library/' . $library . '.php')) {
			MError::error_404();
		}

		$data['page_title'] = 'PHP Library';
		MLoad::view('php/library/' . $library, $data);

	}

	function models() {
		$data['page_title'] = 'PHP Models';
		MLoad::view('php/models', $data);
	}

	function views() {
		$data['page_title'] = 'PHP Views';
		MLoad::view('php/views', $data);
	}

}
