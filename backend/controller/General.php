<?php

class General {

	function directories() {
		$data['page_title'] = 'Directories';
		MLoad::view('general/directories', $data);
	}

	function installation() {
		$data['page_title'] = 'Installation';
		MLoad::view('general/installation', $data);
	}

	function license() {
		$data['page_title'] = 'License';
		MLoad::view('general/license', $data);
	}

}
