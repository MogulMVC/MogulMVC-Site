<style>
	#MStage{
		background: #F7941D;
	}
	#MStage h1{
		font-size: 7em;
	}
</style>

<div id="MStage">
	<div class="MContentSpacer"></div>
		<img src="<?php MLoad::img_src_application('main/hero.png', 'echo')?>" alt="MogulMVC" />
	<div class="MContentSpacer"></div>
</div><!-- MStage -->

<div class="MContent840">
	
	<div class="MTextCenter">
		<h2 style="font-size: 2em;">MogulMVC is a PHP MVC framework which includes a UI library.</h2>
		<span style="font-size: 2em;">It is written in <a href="http://www.php.net/">PHP</a>, <a href="http://jquery.com/">jQuery</a>, and <a href="http://sass-lang.com/">Sass</a></span>
	</div>
	
	<div class="MContentSpacer"></div>
	<div class="MTextCenter">
		<a href="https://github.com/MogulMVC/MogulMVC/archive/master.zip" class="MButtonO" style="font-size: 3em">Download</a>
	</div>
	<div class="MContentSpacer"></div>
	<div class="MContentSpacer"></div>
	
	<div class="MTabWidget">
		<ul class="MTabContainer MCenter">
			<li class="MTab">
				<a href="#why_use">Why Use MogulMVC?</a>
			</li>
			<li class="MTab">
				<a href="#mogul_libraries">Mogul Libraries</a>
			</li>
		</ul>
		<hr />
		<div>
			<div id="why_use">
				
				<div class="left" style="width: 50%">
					<p>Here are the reason's you shouldn use MogulMVC.</p>
					<span class="MTextGreen MTextBold" style="font-size: 1.8em">PROS</span>
					<li class="MListItem">
						<span class="MTextBold">CSS UI</span>
						<span> - MogulMVC includes a CSS library of commonly used UI elements.</span>
					</li>
					<li class="MListItem">
						<span class="MTextBold">Automatic CSS and JavaScript Minification</span>
						<span> - When in production mode MogulMVC will automatically create a single CSS and single JavaScript file for your entire project and cache it for quick loading. When page caching is used HTML gets minified and cached as well.</span>
					</li>
					<li class="MListItem">
						<span class="MTextBold">Speed</span>
						<span> - MogulMVC is a "<a href="http://en.wikipedia.org/wiki/Loose_coupling">loosly coupled</a>" and "use-at-will" framework. You specify only the components and libraries to load so nothing more than what you need is loaded.</span>
					</li>
					<li class="MListItem">
						<span class="MTextBold">Vendor Libraries</span>
						<span> - MogulMVC includes <a href="http://www.phpactiverecord.org/">PHPActiveRecord</a> for database access and <a href="http://jquery.com/">jQuery</a> and <a href="http://jqueryui.com/">jQuery UI</a> for client side scripting.<br />It also works well with any other vendor library.</span>
					</li>	
				</div>
				
				<div class="right" style="width: 50%">
					<p>Here are the reason's you shouldn't use MogulMVC.</p>
					<span class="MTextRed MTextBold" style="font-size: 1.8em">CONS</span>
					<li class="MListItem">
						<span class="MTextBold">Support</span>
						<span> - I wrote MogulMVC for me and my projects. Thus, there is no large coporation or community backing MogulMVC.</span>
					</li>
					<li class="MListItem">
						<span class="MTextBold">Age</span>
						<span> - MogulMVC is a young framework compared to others like <a href="http://codeigniter.com/">Codeigniter</a>, and <a href="http://cakephp.org/">CakePHP</a> and hasn't been tested by a large community.</span>
					</li>
					<li class="MListItem">
						<span class="MTextBold">JavaScript UI</span>
						<span> - MogulMVC's JavaScript UI library is not as robust as <a href="http://jqueryui.com/">jQuery UI</a> or <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a>.</span>
					</li>
				</div>
				
				<div class="MClear"></div>

			</div>
			
			<div id="mogul_libraries">
				
				<h3>MogulMVC is a combination of several Mogul libraries.</h3>
				
				<li class="MListItem">
					<span class="MTextBold">MogulCSS</span>
					<span> - A Sass based CSS library that is used by MogulJS and MogulMVC for styling. It attempts to stay stylistically consistent with Mogul AS.</span>
				</li>
			
				<li class="MListItem">
					<span class="MTextBold">MogulIcons</span>
					<span> - An icon set containing anything from social icons to ui element icons.</span>
				</li>
				
				<li class="MListItem">
					<span class="MTextBold">MogulJS</span>
					<span> - A JavaScript and jQuery Utility and Interface library that uses the MogulCSS library for styling. The code attempts to stay stylistically consistent with Mogul AS, and the MogulMVC, which extends it.</span>
				</li>
				
				<div class="MClear"></div>
				
			</div>

		</div>
	</div>
	
</div>

<div class="MContentSpacer"></div>
<div class="MContentSpacer"></div>
<div class="MContentSpacer"></div>
