<?php MLoad::template_application('template/toolbar_php'); ?>

<div class="MContent800">

	<h1>PHP Utility Libraries</h1>

	<p>Mogul MVC has many PHP libraries that can be used to perform common tasks.<br />Each library is a class containing public static functions.<br />Below is a list of all the classes with a description of what each class is for.</p>
	
	<hr />
	
	<p>Click on one to learn more about the functions inside of it.</p>

	<?php
		$js_libraries = array(
			array('name' => 'MCache', 'description' => '<pre><code>core/util/MCache</code></pre>For chaching pages.'),
			array('name' => 'MDate', 'description' => '<pre><code>core/util/MDate</code></pre>For generated formatted dates.'),
			array('name' => 'MError', 'description' => '<pre><code>core/util/MError</code></pre>Display different types of errors.'),
			array('name' => 'MLoad', 'description' => '<pre><code>core/util/MLoad</code></pre>----The most used class. Load in models, views, libraries and many more.'),
			array('name' => 'MMath', 'description' => '<pre><code>core/util/MMath</code></pre>----A class for performing various math functions.'),
			array('name' => 'MNumber', 'description' => '<pre><code>core/util/MNumber</code></pre>Number functions.'),
			array('name' => 'MRequest', 'description' => '<pre><code>core/util/MRequest</code></pre>Identify different information about the incoming request.'),
			array('name' => 'MString', 'description' => '<pre><code>core/util/MString</code></pre>----String functions.'),
			array('name' => 'MTemperature', 'description' => '<pre><code>core/util/MTemperature</code></pre>Temperature conversion functions.'),
			array('name' => 'MTime', 'description' => '<pre><code>core/util/MTime</code></pre>Time conversion functions. Useful for media information.'),
			array('name' => 'MURL', 'description' => '<pre><code>core/util/MURL</code></pre>Obtain infromation from the URL of the request.'),
			array('name' => 'MValidate', 'description' => '<pre><code>core/util/MValidate</code></pre>****----Validate the existentce and content of differet types of data.')
		);
	?>

	<?php $i=1; foreach ($js_libraries as $library): ?>
			
	<a href="/php/library/<?php echo strtolower($library['name']); ?>" class="MWidget library">
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