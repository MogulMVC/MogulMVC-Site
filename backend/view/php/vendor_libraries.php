<?php MLoad::template_application('_template/toolbar_php'); ?>

<div class="MContent800">

	<h1>PHP Vendor Libraries</h1>

	<hr />
	
	<?php
		$js_libraries = array(
			array('name' => 'CSSMin', 'description' => '<pre><code>vendor/util/cssmin</code></pre>CssMin is a css parser and minfier.', 'website' => 'http://code.google.com/p/cssmin/'),
			array('name' => 'JSMin', 'description' => '<pre><code>vendor/util/jsmin</code></pre>An unmaintained but very useful way to minify JavaScript on the server.', 'website' => 'https://github.com/rgrove/jsmin-php'),
			array('name' => 'Mobile Detect', 'description' => '<pre><code>vendor/util/Mobile_Detect</code></pre>The lightweight PHP class for detecting mobile devices.', 'website' => 'http://mobiledetect.net/')
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