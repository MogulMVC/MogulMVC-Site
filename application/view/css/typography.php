<?php MLoad::template_application('template/toolbar_css'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<div class="MVBoxLayout">
					<li class="MSideBarListItem MCursorPointer" onclick="changeColor('')">
						<span class="MTextBold">Change Text to Default</span>
					</li>
					<li class="MSideBarListItem MCursorPointer" onclick="changeColor('MTextRed')">
						<span class="MTextBold MTextRed">Change Text to Red</span>
					</li>
					<li class="MSideBarListItem MCursorPointer" onclick="changeColor('MTextOrange')">
						<span class="MTextBold MTextOrange">Change Text to Orange</span>
					</li>
					<li class="MSideBarListItem MCursorPointer" onclick="changeColor('MTextYellow')">
						<span class="MTextBold MTextYellow">Change Text to Yellow</span>
					</li>
					<li class="MSideBarListItem MCursorPointer" onclick="changeColor('MTextGreen')">
						<span class="MTextBold MTextGreen">Change Text to Green</span>
					</li>
					<li class="MSideBarListItem MCursorPointer" onclick="changeColor('MTextBlue')">
						<span class="MTextBold MTextBlue">Change Text to Blue</span>
					</li>
					<li class="MSideBarListItem MCursorPointer" onclick="changeColor('MTextViolet')">
						<span class="MTextBold MTextViolet">Change Text to Violet</span>
					</li>
				</div>
	
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>CSS Typography</h1>
			
			<section id="section_heading">
				<h2>Headings</h2>
				<hr />
	
				<h1 class="color-change">h1 The quick brown fox jumps over the lazy dog</h1>
				<h2 class="color-change">h2 The quick brown fox jumps over the lazy dog</h2>
				<h3 class="color-change">h3 The quick brown fox jumps over the lazy dog</h3>
				<h4 class="color-change">h4 The quick brown fox jumps over the lazy dog</h4>
				<h5 class="color-change">h5 The quick brown fox jumps over the lazy dog</h5>
				<h6 class="color-change">h6 The quick brown fox jumps over the lazy dog</h6>
	
			</section>
			
			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
			
			<section id="section_paragraph">
	
				<h2>Paragraph</h2>
				<hr />
	
				<p class="color-change">The quick brown fox jumps over the lazy dog</p>
	
				<p class="color-change">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					<br />
					<br />
					Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
	
			</section>
			
			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
			
			<section id="section_style">
	
				<h2>Styles</h2>
				<hr />
	
				<h3>Bold</h3>
				
				<p class="MTextBold">The quick brown fox jumps over the lazy dog</p>
				<a class="showCode">Code</a>
				<pre class="MHidden"><?php echo htmlentities('<p class="MTextBold">The quick brown fox jumps over the lazy dog</p>'); ?></pre>					
	
				<div class="MContentSpacer"></div>
	
				<h3>Italics</h3>
				
				<p class="MTextItalics">The quick brown fox jumps over the lazy dog</p>
				<a class="showCode">Code</a>
				<pre class="MHidden"><?php echo htmlentities('<p class="MTextItalics">The quick brown fox jumps over the lazy dog</p>'); ?></pre>					
	
				<div class="MContentSpacer"></div>
	
				<h3>Colors</h3>
				
				<p class="MTextRed">The quick brown fox jumps over the lazy dog</p>
				<a class="showCode">Code</a>
				<pre class="MHidden"><?php echo htmlentities('<p class="MTextRed">The quick brown fox jumps over the lazy dog</p>'); ?></pre>
				
				<p class="MTextOrange">The quick brown fox jumps over the lazy dog</p>
				<a class="showCode">Code</a>
				<pre class="MHidden"><?php echo htmlentities('<p class="MTextOrange">The quick brown fox jumps over the lazy dog</p>'); ?></pre>		
				
				<p class="MTextYellow">The quick brown fox jumps over the lazy dog</p>
				<a class="showCode">Code</a>
				<pre class="MHidden"><?php echo htmlentities('<p class="MTextYellow">The quick brown fox jumps over the lazy dog</p>'); ?></pre>		
				
				<p class="MTextGreen">The quick brown fox jumps over the lazy dog</p>
				<a class="showCode">Code</a>
				<pre class="MHidden"><?php echo htmlentities('<p class="MTextGreen">The quick brown fox jumps over the lazy dog</p>'); ?></pre>		
				
				<p class="MTextBlue">The quick brown fox jumps over the lazy dog</p>
				<a class="showCode">Code</a>
				<pre class="MHidden"><?php echo htmlentities('<p class="MTextBlue">The quick brown fox jumps over the lazy dog</p>'); ?></pre>		
				
				<p class="MTextViolet">The quick brown fox jumps over the lazy dog</p>
				<a class="showCode">Code</a>
				<pre class="MHidden"><?php echo htmlentities('<p class="MTextViolet">The quick brown fox jumps over the lazy dog</p>'); ?></pre>		
				
			</section>
			
			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
			
			<section id="section_align">
				
				<h2>Alignment</h2>
				<hr />
				
				<p class="MTextLeft">Left aligned text.</p>
				<p class="MTextCentered">Center aligned text.</p>
				<p class="MTextRight">Right aligned text.</p>
				
				<a class="showCode">Code</a>
				<pre class="MHidden"><?php echo htmlentities('<p class="MTextLeft">Left aligned text.</p>
<p class="MTextCentered">Center aligned text.</p>
<p class="MTextRight">Right aligned text.</p>'); ?></pre>	
				
			</section>
			
			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
			
		</td>

	</tr>

</table>

<script>

	function changeColor(color) {

		if (color == null) {
			color = 'default';
		}

		$('.color-change').each(function() {
			$(this).removeClass('MTextRed MTextOrange MTextYellow MTextGreen MTextBlue MTextViolet');
			$(this).addClass(color);
		});
		
	}
	
</script>