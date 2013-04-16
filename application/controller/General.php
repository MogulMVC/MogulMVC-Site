<?php

class General {

	function index() {
		$data['page_title'] = 'General';
		MLoad::view('general/main', $data);
	}

	function folders() {
		$data['page_title'] = 'Folders';
		MLoad::view('general/folders', $data);
	}

	function installation() {
		$data['page_title'] = 'Installation';
		MLoad::view('general/installation', $data);
	}

}
