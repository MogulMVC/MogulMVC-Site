<div id="MToolBarPlaceholder"></div>
<nav id="MToolBar">

	<div class="MToolBarSpacer left"></div>
	<div class="MToolBarSpacer right"></div>

	<a href="/php/configuration">Configuration</a>
	<a href="/php/models">Models</a>
	<a href="/php/views">Views</a>
	<a href="/php/controllers">Controllers</a>
	<a href="/php/libraries">Utility Libraries</a>
	<a href="/php/vendor_libraries">Vendor Libraries</a>

	<?php if(isset($js_version)): ?>
		<a href="/js/library/<?php echo $js_version; ?>" class="right">JavaScript Version</a>
	<?php endif; ?>

</nav>