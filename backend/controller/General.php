<?php

class General {

	function folders() {
		$data['page_title'] = 'Folders';
		MLoad::view('general/folders', $data);
	}

	function installation() {
		$data['page_title'] = 'Installation';
		MLoad::view('general/installation', $data);
	}

}
