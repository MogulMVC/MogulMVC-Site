<?php MLoad::template_application('template/toolbar_js'); ?>

<div class="MContent800">

	<h1>JavaScript Libraries</h1>

	<h2>About Libraries</h2>

	<p>Mogul MVC has many JS libraries that can be used to perform common tasks.<br />Each library is a class containing functions.<br />Below is a list of all the classes with a description of what each class is for. Click on one to learn more about the functions inside of it.</p>
	
	<hr />
	
	<p>Click on one to learn more about the functions inside of it.</p>

	<?php
		$js_libraries = array(
			'MColor' => '',
			'MCookie' => '',
			'MDate' => '',
			'MLoad' => '',
			'MMath' => '',
			'MSearchable' => '',
			'MString' => '',
			'MTemperature' => '',
			'MTime' => '',
			'MType' => '',
			'MURL' => '',
			'MValidate' => ''
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