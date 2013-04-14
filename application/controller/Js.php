<?php

class Js {

	function index() {
		$data['page_title'] = 'JavaScript';
		MLoad::view('js_main', $data);
	}

	function libraries() {
		$data['page_title'] = 'JavaScript Libraries';
		MLoad::view('js_libraries', $data);
	}

	function managers() {
		$data['page_title'] = 'JavaScript Managers';
		MLoad::view('js_managers', $data);
	}

	function ui_elements() {
		$data['page_title'] = 'JavaScript UI Elements';
		MLoad::view('js_ui_elements', $data);
	}

}
