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
				
			<div class="MWidthFull">
	
				<section id="section_button">
					<h2>Button</h2>
					<hr />
	
					<table class="MWidthFull">
	
						<tr>
							<th>&lt;a&gt;</th>
							<th><span class="MNoteY">&lt;button&gt; is prefered</span></th>
							<th>&lt;div&gt;</th>
							<th>&lt;span&gt;</th>
							<th>Code</th>
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
							<td>
								<a class="showCode">Code</a>
								.MButton
								<pre class="MHidden"><code><?php echo htmlentities('<a class="MButton">Button</a>
<button class="MButton">Button</button>
<div class="MButton">Button</div>
<span class="MButton">Button</span>'); ?></code></pre>
							</td>
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
							<td>
								<a class="showCode">Code</a>
								.MButton with attribute disabled="true"
<pre class="MHidden"><code><?php echo htmlentities('<a class="MButton" disabled="true">Button</a>
<button class="MButton" disabled="true"Button</button>
<div class="MButton" disabled="true">Button</div>
<span class="MButton" disabled="true">Button</span>'); ?></code></pre>
							</td>
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
							<td>
								<a class="showCode">Code</a>
								.MButtonRed or .MButtonR
								<pre class="MHidden"><code><?php echo htmlentities('<a class="MButtonRed">Button</a>
<button class="MButtonRed">Button</button>
<div class="MButtonRed">Button</div>
<span class="MButtonRed">Button</span>'); ?></code></pre>
							</td>
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
							<td>
								<a class="showCode">Code</a>
								.MButtonOrage or .MButtonO
								<pre class="MHidden"><code><?php echo htmlentities('<a class="MButtonOrange">Button</a>
<button class="MButtonOrange">Button</button>
<div class="MButtonOrange">Button</div>
<span class="MButtonOrange">Button</span>'); ?></code></pre>
							</td>
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
							<td>
								<a class="showCode">Code</a>
								.MButtonYellow or .MButtonY
								<pre class="MHidden"><code><?php echo htmlentities('<a class="MButtonYellow">Button</a>
<button class="MButtonYellow">Button</button>
<div class="MButtonYellow">Button</div>
<span class="MButtonYellow">Button</span>'); ?></code></pre>
							</td>
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
							<td>
								<a class="showCode">Code</a>
								.MButtonGreen or .MButtonG
								<pre class="MHidden"><code><?php echo htmlentities('<a class="MButtonGreen">Button</a>
<button class="MButtonGreen">Button</button>
<div class="MButtonGreen">Button</div>
<span class="MButtonGreen">Button</span>'); ?></code></pre>
							</td>
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
							<td>
								<a class="showCode">Code</a>
								.MButtonBlue or .MButtonB
								<pre class="MHidden"><code><?php echo htmlentities('<a class="MButtonBlue">Button</a>
<button class="MButtonBlue">Button</button>
<div class="MButtonBlue">Button</div>
<span class="MButtonBlue">Button</span>'); ?></code></pre>
							</td>
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
							<td>
								<a class="showCode">Code</a>
								.MButtonViolet or .MButtonV
<pre class="MHidden"><code><?php echo htmlentities('<a class="MButtonViolet">Button</a>
<button class="MButtonViolet">Button</button>
<div class="MButtonViolet">Button</div>
<span class="MButtonViolet">Button</span>'); ?></code></pre>
							</td>
						</tr>
	
					</table>
	
					<h3>Input Buttons</h3>
	
					<input type="button" value="Button"/>
					<input type="submit" />
					<input type="reset" />
					
					<br />
	
					<a class="showCode">Code</a>
					<pre class="MHidden"><code><?php echo htmlentities('<input type="button" value="Button"/>
<input type="submit" />
<input type="reset" />'); ?></code></pre>																																
	
					<br />
	
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
	
					<br />
	
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
	
				</section><!-- section_button -->
	
				<div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>
	
				<section id="section_input">
					<h2>Input</h2>
					<hr />
	
					<div class="MWidthFull">
	
						<span class="MNoteR">A work in progress.</span>
	
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

<input type="number" value="0" min="0" max="100"/>'); ?></code></pre>		

					<h3>Text</h3>

					<input class="MWidthFull" type="text" placeholder="Input Text"/>
					<div class="MContentSpacer"></div>

					<input class="MWidthFull MInputInvisible" type="text" placeholder="Input with No Border"/>
					<div class="MContentSpacer"></div>

					<input class="MWidthFull" type="text" placeholder="Input Text Disabled" disabled="true"/>
					<div class="MContentSpacer"></div>
					
					<textarea class="MWidthFull" placeholder="Textarea"></textarea>																								
	 				<div class="MContentSpacer"></div>

					<textarea class="MWidthFull MInputInvisible" placeholder="Textarea with No Border"></textarea>
					<div class="MContentSpacer"></div>

					<textarea class="MWidthFull" placeholder="Textarea Disabled" disabled="true"></textarea>

					<a class="showCode">Code</a>
					<pre class="MHidden"><code><?php echo htmlentities('<input class="MWidthFull" type="text" placeholder="Input Text"/>
<input class="MWidthFull MInputInvisible" type="text" placeholder="Input with No Border"/>
<input class="MWidthFull" type="text" placeholder="Input Text Disabled" disabled="true"/>

<textarea class="MWidthFull" placeholder="Textarea"></textarea>
<textarea class="MWidthFull MInputInvisible" placeholder="Textarea with No Border"></textarea>
<textarea class="MWidthFull" placeholder="Textarea Disabled" disabled="true"></textarea>'); ?></code></pre>	
																																																																																								
				</section><!-- section_input -->
	
				<div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>
	
				<section id="sections_notes">
					<h2>Notes</h2>
					<hr />

					<p>Notes are rotated on document ready to make them look more organic.<br />They can be applied to nearly any block level element and have a default maximum width of 200px.</p>
					
					<table>
						
						<tr>
							<td><p class="MNote">I'm in a white note.</p></td>
							<td><a class="showCode">Code</a>
								.MNote
								<pre class="MHidden"><code><?php echo htmlentities('<p class="MNote">...</p>'); ?></code></pre>
							</td>
						</tr>
						<tr>
							<td><p class="MNoteRed">I'm in a red note.</p></td>
							<td><a class="showCode">Code</a>
								.MNoteRed or .MNoteR
								<pre class="MHidden"><code><?php echo htmlentities('<p class="MNoteRed">...</p>'); ?></code></pre>
							</td>
						</tr>
						<tr>
							<td><p class="MNoteOrange">I'm in a orange note.</p></td>
							<td><a class="showCode">Code</a>
								.MNoteOrange or .MNoteO
								<pre class="MHidden"><code><?php echo htmlentities('<p class="MNoteOrange">...</p>'); ?></code></pre>
							</td>
						</tr>
						<tr>
							<td><p class="MNoteYellow">I'm in a yellow note.</p></td>
							<td><a class="showCode">Code</a>
								.MNoteYellow or .MNoteY
								<pre class="MHidden"><code><?php echo htmlentities('<p class="MNoteYellow">...</p>'); ?></code></pre>
							</td>
						</tr>
						<tr>
							<td><p class="MNoteGreen">I'm in a green note.</p></td>
							<td><a class="showCode">Code</a>
								.MNoteGreen or .MNoteG
								<pre class="MHidden"><code><?php echo htmlentities('<p class="MNoteGreen">...</p>'); ?></code></pre>
							</td>
						</tr>
						<tr>
							<td><p class="MNoteBlue">I'm in a blue note.</p></td>
							<td><a class="showCode">Code</a>
								.MNoteBlue or .MNoteB
								<pre class="MHidden"><code><?php echo htmlentities('<p class="MNoteBlue">...</p>'); ?></code></pre>
							</td>
						</tr>
						<tr>
							<td><p class="MNoteViolet">I'm in a violet note.</p></td>
							<td><a class="showCode">Code</a>
								.MNoteViolet or .MNoteV
								<pre class="MHidden"><code><?php echo htmlentities('<p class="MNoteViolet">...</p>'); ?></code></pre>
							</td>
						</tr>
						
					</table>
					
				</section>
				
				<div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>
	
				<section id="section_layout">
					<h2>Layout</h2>
					<hr />
	
					<h3>MHBoxLayout</h3>
	
					<div class="MHBoxLayout">
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
					<pre class="MHidden"><code><?php echo htmlentities('<div class="MHBoxLayout">
	...
</div>'); ?></code></pre>																																
	
					<h3>MVBoxLayout</h3>
	
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
	...
</div>'); ?></code></pre>																																
	
				</section><!-- section_layout -->
	
				<div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>
	
				<section id="section_well">
					<h2>Well</h2>
					<hr />
					<br />
	
					<div class="MWell">
						<p>I'm in a well.</p>
					</div>
	
					<a class="showCode">Code</a>
					<pre class="MHidden"><code><?php echo htmlentities('<div class="MWell">
	...
</div>'); ?></code></pre>																																
	
				</section>
				
				<div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>
	
				<section id="section_widget">
					<h2>Widget</h2>
					<hr />
					<br />
	
					<div class="MWidget">
						<p>I'm in a widget.</p>
					</div>
	
					<a class="showCode">Code</a>
					<pre class="MHidden"><code><?php echo htmlentities('<div class="MWidget">
	...
</div>'); ?></code></pre>																				
					
				</section>
				
				<div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>
				
			</div>
		
		</td>

	</tr>
</table>
