<script>
	$(document).ready(function() {
		$('.showCode').each(function(index) {
			$(this).click(function() {
				$(this).next().toggle()
			});
		});
	});

	function changeColor(color) {

		if (color == null) {
			color = 'default';
		}

		$('#section_text').children().each(function() {
			$(this).removeClass('MTextRed MTextOrange MTextYellow MTextGreen MTextBlue MTextViolet');
			$(this).addClass(color);
		});
	}
</script>

<div id="MToolBarPlaceholder"></div>
<nav id="MToolBar">
	<div class="MToolBarSpacer left"></div>
	<div class="MToolBarSpacer right"></div>
	<span>This is the MToolBar. It is an ID. Don't confuse it with the MToolBar class. This one is fixed position. You will probably use this one more.</span>
</nav>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<div class="MVBoxLayout">
					<li class="MSideBarListItem MCursorPointer" onclick="changeColor('')">
						<span class="MTextBold">Default</span>
					</li>
					<li class="MSideBarListItem MCursorPointer" onclick="changeColor('MTextRed')">
						<span class="MTextBold MTextRed">Red</span>
					</li>
					<li class="MSideBarListItem MCursorPointer" onclick="changeColor('MTextOrange')">
						<span class="MTextBold MTextOrange">Orange</span>
					</li>
					<li class="MSideBarListItem MCursorPointer" onclick="changeColor('MTextYellow')">
						<span class="MTextBold MTextYellow">Yellow</span>
					</li>
					<li class="MSideBarListItem MCursorPointer" onclick="changeColor('MTextGreen')">
						<span class="MTextBold MTextGreen">Green</span>
					</li>
					<li class="MSideBarListItem MCursorPointer" onclick="changeColor('MTextBlue')">
						<span class="MTextBold MTextBlue">Blue</span>
					</li>
					<li class="MSideBarListItem MCursorPointer" onclick="changeColor('MTextViolet')">
						<span class="MTextBold MTextViolet">Violet</span>
					</li>
				</div>
	
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<p class="MTextRed MTextBold"><?php echo htmlentities(MLoad::css_framework('core/MStyle.css', 'return', true));?></p>
			
			<section id="section_text">
				<h1>Headings</h1>
	
				<h1>h1 The quick brown fox jumps over the lazy dog</h1>
				<h2>h2 The quick brown fox jumps over the lazy dog</h2>
				<h3>h3 The quick brown fox jumps over the lazy dog</h3>
				<h4>h4 The quick brown fox jumps over the lazy dog</h4>
				<h5>h5 The quick brown fox jumps over the lazy dog</h5>
				<h6>h6 The quick brown fox jumps over the lazy dog</h6>
	
				<h1>Paragraph</h1>
	
				<p>The quick brown fox jumps over the lazy dog</p>
	
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					<br />
					<br />
					Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
	
				<h1>Styles</h1>
	
				<p class="MWidgetTitle">Bold</p>
				<p class="MTextBold">The quick brown fox jumps over the lazy dog</p>
				<a class="showCode">Code</a>
				<pre class="MHidden"><?php echo htmlentities('<p class="MTextBold">The quick brown fox jumps over the lazy dog</p>'); ?></pre>					
	
				<div class="MContentSpacer">
					<hr />
				</div>
	
				<p class="MWidgetTitle">Italics</p>
				<p class="MTextItalics">The quick brown fox jumps over the lazy dog</p>
				<a class="showCode">Code</a>
				<pre class="MHidden"><?php echo htmlentities('<p class="MTextItalics">The quick brown fox jumps over the lazy dog</p>'); ?></pre>					
	
			</section>
		</td>

	</tr>

</table>
