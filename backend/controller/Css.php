<?php

class Css {

	function index() {
		MCache::cache(60);
		$data['page_title'] = 'CSS';
		MLoad::view('css/main', $data);
	}

	function icons() {
		MCache::cache(60);
		$data['page_title'] = 'CSS Icons';
		MLoad::view('css/icons', $data);
	}

	function typography() {
		MCache::cache(60);
		$data['page_title'] = 'CSS Typography';
		MLoad::view('css/typography', $data);
	}

	function ui_elements() {
		MCache::cache(60);
		$data['page_title'] = 'CSS UI Elements';
		MLoad::view('css/ui_elements', $data);
	}

}
