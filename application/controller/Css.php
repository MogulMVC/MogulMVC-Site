<?php

class Css {

	function index() {
		$data['page_title'] = 'CSS';
		MLoad::view('css/main', $data);
	}

	function icons() {
		$data['page_title'] = 'CSS Icons';
		MLoad::view('css/icons', $data);
	}

	function typography() {
		$data['page_title'] = 'CSS Typography';
		MLoad::view('css/typography', $data);
	}

	function ui_elements() {
		$data['page_title'] = 'CSS UI Elements';
		MLoad::view('css/ui_elements', $data);
	}

}
