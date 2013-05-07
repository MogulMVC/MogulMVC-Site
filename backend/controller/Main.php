<?php

class Main {

	function index() {
		MCache::cache(15);
		MLoad::view('main');
	}

}
