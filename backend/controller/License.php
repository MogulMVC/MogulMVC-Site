<?php

class License {

	function index() {

		$data['page_title'] = 'License';
		MLoad::view('license', $data);

	}

}
