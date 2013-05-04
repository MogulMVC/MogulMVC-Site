<?php 

class Test {

	function index() {
		
		MLoad::model('SomeDataModel');
		$someData = new SomeDataModel();
		/*$someData -> content = MString::random(256);
		$someData -> moreContent = MString::random(256);
		$someData -> save();8*/	
		
	}

}
