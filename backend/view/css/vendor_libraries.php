<?php MLoad::template_application('_template/toolbar_css'); ?>

<div class="MContent800">

	<h1>CSS Vendor Libraries</h1>

	<hr />
	
	<?php
		$js_libraries = array(
			array('name' => 'jQuery UI', 'description' => '<pre><code>vendor/jquery-ui</code></pre>jQuery UI is a curated set of user interface interactions, effects, widgets, and themes built on top of the jQuery JavaScript Library.', 'website' => 'http://jqueryui.com/'),
			array('name' => 'Normalize.css', 'description' => '<pre><code>vendor/normalize</code></pre>Normalize.css makes browsers render all elements more consistently and in line with modern standards.', 'website' => 'http://necolas.github.io/normalize.css/')
		);
	?>
		
	<?php $i=1; foreach ($js_libraries as $library): ?>
			
	<a href="<?php echo $library['website'] ;?>" class="MWidget library" target="_blank">
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