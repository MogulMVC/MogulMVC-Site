<div id="MMainWindow">

	<div id="MHeaderPlaceholder"></div>
	<nav id="MHeader" class="MDropdown">
		<div class="MHeaderSpacer left"></div>
		<div class="MHeaderSpacer right"></div>

		<li>
			<a href="/" id="MHeaderHome">
				<?php echo APPLICATION_NAME; ?>
			</a><!-- MHeaderHome -->
		</li>
		
		<li>
			<span>General</span>
			<ul>
				<li><a href="/general/license">License</a></li>
				<li><a href="/general/installation">Installation</a></li>
				<li><a href="/general/directories">Directories</a></li>
			</ul>
		</li>
		
		<li>
			<span>PHP</span>
			<ul>
				<li><a href="/misc/php/MogulPHP-1.0.0.tar.gz">Download MogulPHP</a></li>
				<li><a href="/php/configuration">Configuration</a></li>
				<li><a href="/php/models">Models</a></li>
				<li><a href="/php/views">Views</a></li>
				<li><a href="/php/controllers">Controllers</a></li>
				<li><a href="/php/libraries">Utility Libraries</a></li>
				<li><a href="/php/vendor_libraries">Vendor Libraries</a></li>
			</ul>
		</li>
		
		<li>
			<span>JavaScript</span>
			<ul>
				<li><a href="/misc/js/MogulJS-1.0.0.tar.gz">Download MogulJS</a></li>
				<li><a href="/js/managers">Managers</a></li>
				<li><a href="/js/ui_elements">UI Elements</a></li>
				<li><a href="/js/libraries">Utility Libraries</a></li>
				<li><a href="/js/vendor_libraries">Vendor Libraries</a></li>
			</ul>
		</li>
		
		<li>
			<span>CSS</span>
			<ul>
				<li><a href="/misc/css/MogulCSS-1.0.0.tar.gz">Download MogulCSS</a></li>
				<li><a href="/css/typography">Typography</a></li>
				<li><a href="/css/icons">Icons</a></li>
				<li><a href="/css/ui_elements">UI Elements</a></li>
				<li><a href="/css/vendor_libraries">Vendor Libraries</a></li>
			</ul>
		</li>
		
		<span class="right" style="margin-right: 140px;">Current Version : <span class="MTextBold"><?php echo APPLICATION_VERSION; ?></span></span>
		
		<a href="https://github.com/MogulMVC"><img style="position: fixed; top: 0; right: 0; border: 0; z-index:10000" src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png" alt="Fork me on GitHub"></a>

	</nav><!--MHeader-->
