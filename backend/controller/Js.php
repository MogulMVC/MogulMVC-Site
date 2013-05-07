<?php

class Js {

	function index() {
		$data['page_title'] = 'JavaScript';
		MLoad::view('js/main', $data);
	}

	function libraries() {
		$data['page_title'] = 'JavaScript Libraries';
		MLoad::view('js/libraries', $data);
	}

	function vendor_libraries() {
		$data['page_title'] = 'JavaScript Vendor Libraries';
		MLoad::view('js/vendor_libraries', $data);
	}

	function library() {

		MCache::cache(60);

		$library = MURL::segment(3);

		if (!$library || !file_exists(BACKEND_ROOT . '/' . APPLICATION_VIEW . '/js/library/' . $library . '.php')) {
			MError::error_404();
		}

		$data['page_title'] = 'JS Library';
		MLoad::view('js/library/' . $library, $data);

	}

	function managers() {
		$data['page_title'] = 'JavaScript Managers';
		MLoad::view('js/managers', $data);
	}

	function ui_elements() {
		$data['page_title'] = 'JavaScript UI Elements';
		MLoad::view('js/ui_elements', $data);
	}

}
