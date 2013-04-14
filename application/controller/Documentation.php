<?php

class Documentation {

	function index() {
		$data['page_title'] = 'Documentation';
		MLoad::view('documentation', $data);
	}

}
