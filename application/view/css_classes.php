<script>
	$(document).ready(function() {
		$('.showCode').each(function(index) {
			$(this).click(function() {
				$(this).next().toggle()
			});
		});
	});

	function updateShow(id) {

		$('.section').hide();

		$('#MSideBar input').each(function() {
			if ($(this).is(':checked')) {
				$('#' + $(this).val()).show();
			}
		});

		checkNoShow();
	}

	function noShow() {
		MSideBar.deselectAll();

		$('.section').fadeOut(speedNorm, function() {
			checkNoShow();
		});
	}

	function allShow() {
		MSideBar.selectAll();

		$('.section').fadeIn(speedNorm, function() {
			checkNoShow();
		});
	}

	function checkNoShow() {

		var hiddenAll = true;

		$('#MSideBar input').each(function() {
			if ($(this).is(':checked')) {
				hiddenAll = false;
			}
		});

		if (hiddenAll) {
			$('#section_noShow').fadeIn(speedNorm);
		} else {
			$('#section_noShow').fadeOut(speedNorm);
		}
	}
</script>

<div id="MToolBarPlaceholder"></div>
<nav id="MToolBar">
	<div class="MToolBarSpacer left"></div>
	<div class="MToolBarSpacer right"></div>
	<span>This is the MToolBar. It is an ID. Don't confuse it with the MToolBar class. This one is fixed position. You will probably use this one more.</span>
</nav>

<table>
	<tr class="MWidthFull">

		<td id="MSideBarContainer"><div id="MSideBarTriggerLeft"></div>
			<ul id="MSideBar" class="MSideBarLeft">
	
				<div class="MSideBarMenu">
					<button onclick="noShow()">
						Deselect All
					</button>
					<button onclick="allShow()">
						Select All
					</button>
				</div>
	
				<label for="check_button">
					<li class="MSideBarListItem">
						<input id="check_button" type="checkbox" value="section_button" checked="true" onclick="updateShow()"/>
						<span>Button</span>
					</li>
				</label>
	
				<label for="check_input">
					<li class="MSideBarListItem">
						<input id="check_input" type="checkbox" value="section_input" checked="true" onclick="updateShow()"/>
						<span>Input</span>
					</li>
				</label>
	
				<label for="check_well">
					<li class="MSideBarListItem">
						<input id="check_well" type="checkbox" value="section_well" checked="true" onclick="updateShow()"/>
						<span>Well</span>
					</li>
				</label>
	
				<label for="check_widget">
					<li class="MSideBarListItem">
						<input id="check_widget" type="checkbox" value="section_widget" checked="true" onclick="updateShow()"/>
						<span>Widget</span>
					</li>
				</label>
	
				<label for="check_layout">
					<li class="MSideBarListItem">
						<input id="check_layout" type="checkbox" value="section_layout" checked="true" onclick="updateShow()"/>
						<span>Layout</span>
					</li>
				</label>
	
			</ul><!-- sidebar -->
		</td>

		<td class="MWidthFull MPadding">
			
		<p class="MTextRed MTextBold"><?php echo htmlentities(MLoad::css_framework('core/MStyle.css', 'return', true));?></p>
			
		<div class="MWidthFull">

			<?php /** Buttons */ ?>
			<section id="section_button" class="section">
				<h1>Button</h1>

				<table class="MWidthFull MTextCentered">

					<tr>
						<th>&lt;a&gt;</th>
						<th><span class="MNoteY">&lt;button&gt; is prefered</span></th>
						<th>&lt;div&gt;</th>
						<th>&lt;span&gt;</th>
					</tr>

					<tr>
						<td><a class="MButton" data-mtip="S" title="I'm an &lt;a&gt; tag.">Button</a></td>
						<td>
						<button data-mtip="S" title="I'm a &lt;button&gt; tag.">
							Button
						</button></td>
						<td>
						<div class="MButton" data-mtip="S" title="I'm a &lt;div&gt; tag.">
							Button
						</div></td>
						<td><span class="MButton" data-mtip="S" title="I'm a &lt;span&gt; tag.">Button</span></td>
					</tr>

					<tr>
						<td><a class="MButton" data-mtip="S" title="I'm an &lt;a&gt; tag disabled." disabled="true">Button Disabled</a></td>
						<td>
						<button data-mtip="S" title="I'm a &lt;button&gt; tag disabled." disabled="true">
							Button Disabled
						</button></td>
						<td>
						<div class="MButton" data-mtip="S" title="I'm a &lt;div&gt; tag disabled." disabled="true">
							Button Disabled
						</div></td>
						<td><span class="MButton" data-mtip="S" title="I'm a &lt;span&gt; tag disabled." disabled="true">Button Disabled</span></td>
					</tr>

					<tr>
						<td><a class="MButtonRed" data-mtip="S" title="I'm an &lt;a&gt; tag.">Button Red</a></td>
						<td>
						<button class="MButtonRed" data-mtip="S" title="I'm a &lt;button&gt; tag.">
							Button Red
						</button></td>
						<td>
						<div class="MButtonRed" data-mtip="S" title="I'm a &lt;div&gt; tag.">
							Button Red
						</div></td>
						<td><span class="MButtonRed" data-mtip="S" title="I'm a &lt;span&gt; tag.">Button Red</span></td>
					</tr>

					<tr>
						<td><a class="MButtonOrange" data-mtip="S" title="I'm an &lt;a&gt; tag.">Button Orange</a></td>
						<td>
						<button class="MButtonOrange" data-mtip="S" title="I'm a &lt;button&gt; tag.">
							Button Orange
						</button></td>
						<td>
						<div class="MButtonOrange" data-mtip="S" title="I'm a &lt;div&gt; tag.">
							Button Orange
						</div></td>
						<td><span class="MButtonOrange" data-mtip="S" title="I'm a &lt;span&gt; tag.">Button Orange</span></td>
					</tr>

					<tr>
						<td><a class="MButtonYellow" data-mtip="S" title="I'm an &lt;a&gt; tag.">Button Yellow</a></td>
						<td>
						<button class="MButtonYellow" data-mtip="S" title="I'm a &lt;button&gt; tag.">
							Button Yellow
						</button></td>
						<td>
						<div class="MButtonYellow" data-mtip="S" title="I'm a &lt;div&gt; tag.">
							Button Yellow
						</div></td>
						<td><span class="MButtonYellow" data-mtip="S" title="I'm a &lt;span&gt; tag.">Button Yellow</span></td>
					</tr>

					<tr>
						<td><a class="MButtonGreen" data-mtip="S" title="I'm an &lt;a&gt; tag.">Button Green</a></td>
						<td>
						<button class="MButtonGreen" data-mtip="S" title="I'm a &lt;button&gt; tag.">
							Button Green
						</button></td>
						<td>
						<div class="MButtonGreen" data-mtip="S" title="I'm a &lt;div&gt; tag.">
							Button Green
						</div></td>
						<td><span class="MButtonGreen" data-mtip="S" title="I'm a &lt;span&gt; tag.">Button Green</span></td>
					</tr>

					<tr>
						<td><a class="MButtonBlue" data-mtip="S" title="I'm an &lt;a&gt; tag.">Button Blue</a></td>
						<td>
						<button class="MButtonBlue" data-mtip="S" title="I'm a &lt;button&gt; tag.">
							Button Blue
						</button></td>
						<td>
						<div class="MButtonBlue" data-mtip="S" title="I'm a &lt;div&gt; tag.">
							Button Blue
						</div></td>
						<td><span class="MButtonBlue" data-mtip="S" title="I'm a &lt;span&gt; tag.">Button Blue</span></td>
					</tr>

					<tr>
						<td><a class="MButtonViolet" data-mtip="S" title="I'm an &lt;a&gt; tag.">Button Violet</a></td>
						<td>
						<button class="MButtonViolet" data-mtip="S" title="I'm a &lt;button&gt; tag.">
							Button Violet
						</button></td>
						<td>
						<div class="MButtonViolet" data-mtip="S" title="I'm a &lt;div&gt; tag.">
							Button Violet
						</div></td>
						<td><span class="MButtonViolet" data-mtip="S" title="I'm a &lt;span&gt; tag.">Button Violet</span></td>
					</tr>

				</table>

				<a class="showCode">Code</a>
				<pre class="MHidden"><code><?php echo htmlentities('<a class="MButton">Button</a>
<button class="MButton">Button</button>
<div class="MButton">Button</div>
<span class="MButton">Button</span>');
				?></code></pre>				

				<div class="MContentSpacer">
					<hr />
				</div>

				<p class="MWidgetTitle">
					Input Buttons
				</p>

				<div class="MTextCentered">
					<input type="button" value="Button"/>
					<input type="submit" />
					<input type="reset" />
				</div>

				<a class="showCode">Code</a>
				<pre class="MHidden"><code><?php echo htmlentities('<input type="button" value="Button"/>
<input type="submit" />
<input type="reset" />');
				?></code></pre>																																

				<div class="MContentSpacer">
					<hr />
				</div>

				<p class="MWidgetTitle">
					Button Group
				</p>

				<div class="MHButtonGroup">
					<button>A Button</button>
					<button>Another Button</button>
					<button>Yet Another Button</button>
				</div>
				
				<br /><br />
				
				<div class="MVButtonGroup">
					<button>A Button</button>
					<button>Another Button</button>
					<button>Yet Another Button</button>
				</div>

 				<div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section><!-- section_button -->

			<?php /** Input */ ?>
			<section id="section_input" class="section">
				<h1>Input</h1>

				<div class="MWidthFull MTextCentered">

					<span class="MNoteY">A work in progress.</span>

					<div class="MHBoxLayout">

						<div data-mtip="S" title="I'm a checkbox with label.">
							<input type="checkbox" id="checkbox1"/>
							<label for="checkbox1">Checkbox</label>
						</div>

						<div class="MHBoxSpacer"></div>
						<div class="MHBoxSpacer"></div>
						<div class="MHBoxSpacer"></div>

						<div data-mtip="S" title="I'm a radio button with label.">
							<input type="radio" name="radio" id="radio1"/>
							<label for="radio1">Radio 1</label>
						</div>

						<div class="MHBoxSpacer"></div>

						<div data-mtip="S" title="I'm a radio button with label.">
							<input type="radio" name="radio" id="radio2"/>
							<label for="radio2">Radio 2</label>
						</div>

						<div class="MHBoxSpacer"></div>
						<div class="MHBoxSpacer"></div>
						<div class="MHBoxSpacer"></div>

						<select>
							<option>Select</option>
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3 With More Text</option>
						</select>

						<div class="MHBoxSpacer"></div>
						<div class="MHBoxSpacer"></div>
						<div class="MHBoxSpacer"></div>

						<input type="number" value="0" min="0" max="100"/>

					</div>

				</div>

				<a class="showCode">Code</a>
				<pre class="MHidden"><code><?php echo htmlentities('<input type="checkbox" id="checkbox1"/>
<label for="checkbox1">Checkbox</label>

<input type="radio" name="radio" id="radio1"/>
<label for="radio1">Radio 1</label>

<input type="radio" name="radio" id="radio2"/>
<label for="radio2">Radio 2</label>
	
<select>
	<option>Select</option>
	<option>Option 1</option>
	<option>Option 2</option>
	<option>Option 3 With More Text</option>
</select>

<input type="number" value="0" min="0" max="100"/>');
				?></code></pre>																																

 				<div class="MContentSpacer"></div>
				<hr />
				<div class="MContentSpacer"></div>

				<input class="MWidthFull" type="text" placeholder="Input Text"/>
				<div class="MContentSpacer"></div>
				<input class="MWidthFull MInputInvisible" type="text" placeholder="Input with No Border"/>
				<div class="MContentSpacer"></div>
				<input class="MWidthFull" type="text" placeholder="Input Text Disabled" disabled="true"/>

				<div class="MContentSpacer"></div>
				<hr />
				<div class="MContentSpacer"></div>
				<textarea class="MWidthFull" placeholder="Textarea"></textarea>																												

 				<div class="MContentSpacer"></div>
				<textarea class="MWidthFull MInputInvisible" placeholder="Textarea with No Border"></textarea>
				<div class="MContentSpacer"></div>
				<textarea class="MWidthFull" placeholder="Textarea Disabled" disabled="true"></textarea>																																						
																																																																																														
 				<div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section><!-- section_input -->

			<?php /** Layouts */ ?>
			<section id="section_layout" class="section">
				<h1>Layout</h1>

				<p class="MWidgetTitle">
					MVBoxLayout
				</p>

				<div class="MHBoxLayout">
					<button>
						MHBoxLayout
					</button>
					<button>
						MHBoxLayout
					</button>
					<button>
						MHBoxLayout
					</button>
				</div>

				<a class="showCode">Code</a>
				<pre class="MHidden"><code><?php echo htmlentities('<div class="MHBoxLayout">
	<button>Button</button>
	<button>Button</button>
	<button>Button</button>
</div>');
				?></code></pre>																																


				<div class="MContentSpacer">
					<hr />
				</div>

				<p class="MWidgetTitle">
					MHBoxLayout
				</p>

				<div class="MVBoxLayout">
					<button>
						Button
					</button>
					<button>
						Button
					</button>
					<button>
						Button
					</button>
				</div>

				<a class="showCode">Code</a>
				<pre class="MHidden"><code><?php echo htmlentities('<div class="MVBoxLayout">
	<button>Button</button>
	<button>Button</button>
	<button>Button</button>
</div>');
				?></code></pre>																																

 				<div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section><!-- section_layout -->

			<?php /** Well */ ?>
			<section id="section_well" class="section">
				<h1>Well</h1>

				<div class="MWell">
					<p>
						I'm in a well.
					</p>
				</div>

				<a class="showCode">Code</a>
				<pre class="MHidden"><code><?php echo htmlentities('<div class="MWell"></div>'); ?></code></pre>																																

				<div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section>

			<?php /** Widget */ ?>
			<section id="section_widget" class="section">
				<h1>Widget</h1>

				<div class="MWidget">
					<p>
						I'm in a widget.
					</p>
				</div>

				<a class="showCode">Code</a>
				<pre class="MHidden"><code><?php echo htmlentities('<div class="MWidget"></div>'); ?></code></pre>																				
				
				 <div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section>

			<section id="section_noShow" class="MTextCentered MHidden">
				<h1>Select a Section from the Sidebar</h1>
				<p>
					or
				</p>
				<button class="MButtonGreen" onclick="allShow()">
					Show All
				</button>

				<div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section><!-- section_noShow -->

		</div></td>

	</tr>
</table>
