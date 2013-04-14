<?php

class Css {

	function index() {
		$data['page_title'] = 'CSS';
		MLoad::view('css_main', $data);
	}

	function icons() {
		$data['page_title'] = 'CSS Icons';
		MLoad::view('css_icons', $data);
	}

	function typography() {
		$data['page_title'] = 'CSS Typography';
		MLoad::view('css_typography', $data);
	}

	function ui_elements() {
		$data['page_title'] = 'CSS UI Elements';
		MLoad::view('css_ui_elements', $data);
	}

}
