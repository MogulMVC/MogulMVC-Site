<?php

class Php {

	function index() {
		$data['page_title'] = 'PHP';
		MLoad::view('php_main', $data);
	}

	function configuration() {
		$data['page_title'] = 'PHP Configuration';
		MLoad::view('php_configuration', $data);
	}

	function controllers() {
		$data['page_title'] = 'PHP Controllers';
		MLoad::view('php_controllers', $data);
	}

	function libraries() {
		$data['page_title'] = 'PHP Libraries';
		MLoad::view('php_libraries', $data);
	}

	function models() {
		$data['page_title'] = 'PHP Models';
		MLoad::view('php_models', $data);
	}

	function routing() {
		$data['page_title'] = 'PHP Routing';
		MLoad::view('php_routing', $data);
	}

	function ui_elements() {
		$data['page_title'] = 'PHP UI Elements';
		MLoad::view('php_ui_elements', $data);
	}

	function views() {
		$data['page_title'] = 'PHP Views';
		MLoad::view('php_views', $data);
	}

}
