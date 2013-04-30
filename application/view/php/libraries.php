<?php MLoad::template_application('template/toolbar_php'); ?>

<div class="MContent800">

	<h1>PHP Libraries</h1>

	<p>Mogul MVC has many PHP libraries that can be used to perform common tasks.<br />Each library is a class containing public static functions.<br />Below is a list of all the classes with a description of what each class is for.</p>
	
	<hr />
	
	<p>Click on one to learn more about the functions inside of it.</p>

	<?php
		$js_libraries = array(
			'MCache' => 'For chaching pages.',
			'MDate' => 'For generated formatted dates.',
			'MError' => 'Display different types of errors.',
			'MLoad' => 'The most used class. Load in models, views, libraries and many more.',
			'MMath' => 'A class for performing various math functions.',
			'MNumber' => 'Number functions.',
			'MPath' => 'Returns the path to a directory from either the PHP root or the web root.',
			'MRequest' => 'Identify different information about the incoming request.',
			'MString' => 'String functions.',
			'MTemperature' => 'Temperature conversion functions.',
			'MTime' => 'Time conversion functions. Useful for media information.',
			'MURL' => 'Obtain infromation from the URL of the request.',
			'MValidate' => 'Validate the existentce and content of differet types of data.'
		);
	?>

	<?php $i=1; foreach ($js_libraries as $name => $description): ?>
			
	<a href="/php/library/<?php echo strtolower($name); ?>" class="MWidget library">
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