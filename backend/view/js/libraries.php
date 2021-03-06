<?php MLoad::template_application('_template/toolbar_js'); ?>

<div class="MContent800">

	<h1>JavaScript Utility Libraries</h1>

	<p>MogulJS has many JS libraries that can be used to perform common tasks.<br />Each library is a class containing functions.<br />Below is a list of all the classes with a description of what each class is for. Click on one to learn more about the functions inside of it.</p>
	
	<hr />
	
	<p>
	All JavaScript libraries are loaded from <code>core/MScript</code>. Some require jQuery so make sure to load jQuery before using MScript.
	<br />
	Click on one to learn more about the functions inside of it.
	</p>
	
	<?php
		$js_libraries = array(
			array('name' => 'MCookie', 'description' => 'Set or get a cookie.'),
			array('name' => 'MDate', 'description' => 'For generated formatted dates.'),
			array('name' => 'MLoad', 'description' => '----Load in CSS and JavaScript files dynamically as needed.'),
			array('name' => 'MMath', 'description' => 'A class for performing various math functions.'),
			array('name' => 'MNumber', 'description' => 'Number functions.'),
			array('name' => 'MSearchable', 'description' => 'Search within the DOM for strings and automatically hide or show the container.'),
			array('name' => 'MString', 'description' => 'String functions.'),
			array('name' => 'MTemperature', 'description' => 'Temperature conversion functions.'),
			array('name' => 'MTime', 'description' => 'Time conversion functions. Useful for media information.'),
			array('name' => 'MURL', 'description' => 'Obtain infromation from the URL of the request.'),
			array('name' => 'MValidate', 'description' => 'Validate the existentce and content of differet types of data.')
		);
	?>
		
	<?php $i=1; foreach ($js_libraries as $library): ?>
			
	<a href="/js/library/<?php echo strtolower($library['name']); ?>" class="MWidget MGlow library">
		<span class="library-title"><?php echo $library['name']; ?></span><br /><?php echo $library['description']; ?>
	</a>
			
	<?php if($i % 4 == 0):?>
		<div class="MClear"></div>
	<?php endif;?>
			
	<?php $i++; endforeach; ?>
		
</div>

<div class="MContentSpacer"></div>
<div class="MContentSpacer"></div>
<div class="MContentSpacer"></div>