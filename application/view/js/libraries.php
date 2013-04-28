<?php MLoad::template_application('template/toolbar_js'); ?>

<div class="MContent800">

	<h1>JavaScript Libraries</h1>

	<p>Mogul MVC has many JS libraries that can be used to perform common tasks.<br />Each library is a class containing functions.<br />Below is a list of all the classes with a description of what each class is for. Click on one to learn more about the functions inside of it.</p>
	
	<hr />
	
	<p>Click on one to learn more about the functions inside of it.</p>

	<?php
		$js_libraries = array(
			'MColor' => 'Work with color values.',
			'MCookie' => 'Get or set a cookie.',
			'MDate' => 'For generated formatted dates.',
			'MLoad' => 'Load in CSS and JavaScript files dynamically as needed.',
			'MMath' => 'A class for performing various math functions.',
			'MSearchable' => 'Search within the DOM for strings and automatically hide or show the container.',
			'MString' => 'String functions',
			'MTemperature' => 'Temperature conversion functions.',
			'MTime' => 'Time conversion functions. Useful for media information.',
			'MType' => 'Data type conversion and indentification functions.',
			'MURL' => 'Obtain infromation from the URL of the request.',
			'MValidate' => 'Validate the existentce and content of differet types of data.'
		);
	?>
		
	<?php $i=1; foreach ($js_libraries as $name => $description): ?>
			
	<a href="/js/library/<?php echo strtolower($name); ?>" class="MWidget library">
		<span class="library-title"><?php echo $name; ?></span><br /><?php echo $description; ?>
	</a>
			
	<?php if($i % 4 == 0):?>
		<div class="MClear"></div>
	<?php endif;?>
			
	<?php $i++; endforeach; ?>
		
</div>

<div class="MContentSpacer"></div>
<div class="MContentSpacer"></div>
<div class="MContentSpacer"></div>