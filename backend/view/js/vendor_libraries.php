<?php MLoad::template_application('_template/toolbar_js'); ?>

<div class="MContent800">

	<h1>JavaScript Vendor Libraries</h1>

	<p>MogulMVC has several widely used vendor JavaScript libraries.<br />Below is a list of all the vendor libraries. Click on one to be redirected to the vendor website.</p>
	
	<hr />
	
	<?php
		$js_libraries = array(
			array('name' => 'html5shiv', 'description' => '<pre><code>vendor/html5shiv</code></pre>HTML5 IE enabling script.', 'website' => 'https://code.google.com/p/html5shiv/'),
			array('name' => 'IE7.js', 'description' => '<pre><code>vendor/IE7</code></pre>A JavaScript library to make MSIE behave like a standards-compliant browser.', 'website' => 'https://code.google.com/p/ie7-js/'),
			array('name' => 'IE8.js', 'description' => '<pre><code>vendor/IE8</code></pre>A JavaScript library to make MSIE behave like a standards-compliant browser.', 'website' => 'https://code.google.com/p/ie7-js/'),
			array('name' => 'IE9.js', 'description' => '<pre><code>vendor/IE9</code></pre>A JavaScript library to make MSIE behave like a standards-compliant browser.', 'website' => 'https://code.google.com/p/ie7-js/'),
			array('name' => 'jQuery', 'description' => '<pre><code>vendor/jquery</code></pre>jQuery is a fast, small, and feature-rich JavaScript library. ', 'website' => 'http://jquery.com/'),
			array('name' => 'jQuery UI', 'description' => '<pre><code>vendor/jquery-ui</code></pre>jQuery UI is a curated set of user interface interactions, effects, widgets, and themes built on top of the jQuery JavaScript Library.', 'website' => 'http://jqueryui.com/'),
			array('name' => 'Modernizr', 'description' => '<pre><code>vendor/modernizr</code></pre>A JavaScript library that detects HTML5 and CSS3 features in the user’s browser.', 'website' => 'http://modernizr.com/'),
			array('name' => 'SWFObject', 'description' => '<pre><code>vendor/swfobject</code></pre>SWFObject is an easy-to-use and standards-friendly method to embed Flash content, which utilizes one small JavaScript file.', 'website' => 'https://code.google.com/p/swfobject/')
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