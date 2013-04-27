<div id="MToolBarPlaceholder"></div>
<nav id="MToolBar">

	<div class="MToolBarSpacer left"></div>
	<div class="MToolBarSpacer right"></div>

	<a href="/js/libraries">Libraries</a>
	<a href="/js/managers">Managers</a>
	<a href="/js/ui_elements">UI Elements</a>

	<?php if(isset($php_version)): ?>
		<a href="/php/library/<?php echo $php_version; ?>" class="right">PHP Version</a>
	<?php endif; ?>

</nav>