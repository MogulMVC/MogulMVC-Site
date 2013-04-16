<?php MLoad::template_application('template/toolbar_css'); ?>

<table>
	<tr class="MWidthFull">

		<td id="MSideBarContainer"><div id="MSideBarTriggerLeft"></div>
			<ul id="MSideBar" class="MSideBarLeft">
	
				<a href="#section_button">
					<li class="MSideBarListItem">
						<span>Button</span>
					</li>
				</a>
	
				<a href="#section_input">
					<li class="MSideBarListItem">
						<span>Input</span>
					</li>
				</a>

				<a href="#section_layout">
					<li class="MSideBarListItem">
						<span>Layout</span>
					</li>
				</a>	

				<a href="#section_well">
					<li class="MSideBarListItem">
						<span>Well</span>
					</li>
				</a>
	
				<a href="#section_widget">
					<li class="MSideBarListItem">
						<span>Widget</span>
					</li>
				</a>
	
			</ul><!-- sidebar -->
		</td>

		<td class="MWidthFull MPadding">

		<h1>CSS UI Elements</h1>
			
		<p class="MTextRed MTextBold"><?php echo htmlentities(MLoad::css_framework('core/MStyle.css', 'return', true));?></p>
			
		<div class="MWidthFull">

			<section id="section_button" class="section">
				<h2>Button</h2>
				<hr />

				<table class="MWidthFull MTextCentered">

					<tr>
						<th>&lt;a&gt;</th>
						<th><span class="MNoteY">&lt;button&gt; is prefered</span></th>
						<th>&lt;div&gt;</th>
						<th>&lt;span&gt;</th>
						<th>CSS Class</th>
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
						<td>.MButton</td>
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
						<td>.MButton with attribute disabled="true"</td>
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
						<td>.MButtonRed or .MButtonR</td>
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
						<td>.MButtonOrage or .MButtonO</td>
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
						<td>.MButtonYellow or .MButtonY</td>
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
						<td>.MButtonGreen or .MButtonG</td>
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
						<td>.MButtonBlue or .MButtonB</td>
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
						<td>.MButtonViolet or .MButtonV</td>
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

				<h3>Input Buttons</h3>

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

				<h3>Button Group</h3>

				<div class="MHButtonGroup">
					<button>A Button</button>
					<button>Another Button</button>
					<button>Yet Another Button</button>
				</div>
				
				<br />
				
				<a class="showCode">Code</a>
				<pre class="MHidden"><code><?php echo htmlentities('<div class="MHButtonGroup">
	<button>A Button</button>
	<button>Another Button</button>
	<button>Yet Another Button</button>
</div>'); ?></code></pre>

				<div class="MVButtonGroup">
					<button>A Button</button>
					<button>Another Button</button>
					<button>Yet Another Button</button>
				</div>

				<a class="showCode">Code</a>
				<pre class="MHidden"><code><?php echo htmlentities('<div class="MVButtonGroup">
	<button>A Button</button>
	<button>Another Button</button>
	<button>Yet Another Button</button>
</div>'); ?></code></pre>

				<br />
				<br />

			</section><!-- section_button -->

			<section id="section_input" class="section">
				<h2>Input</h2>
				<hr />

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

			<section id="section_layout" class="section">
				<h2>Layout</h2>
				<hr />

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

			<section id="section_well" class="section">
				<h2>Well</h2>
				<hr />

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

<script>

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