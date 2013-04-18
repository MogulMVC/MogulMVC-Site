<?php MLoad::template_application('template/toolbar_js'); ?>

<table>

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
	
				<a href="#section_dropdown">
					<li class="MSideBarListItem">
						<span>Dropdown</span>
					</li> 
				</a>
	
				<a href="#section_bar">
					<li class="MSideBarListItem">
						<span>Bar</span>
					</li>
				</a>
	
				<a href="#section_button">
					<li class="MSideBarListItem">
						<span>Upload Button</span>
					</li>
				</a>
	
				<a href="#section_list">
					<li class="MSideBarListItem">
						<span>List</span>
					</li>
				</a>
	
				<a href="#section_tab">
					<li class="MSideBarListItem">
						<span>Tab</span>
					</li>
				</a>
				
				<a href="#section_tip">
					<li class="MSideBarListItem">
						<span>Tip</span>
					</li>
				</a>
	
			</ul>
		</td>

		<td class="MWidthFull MPadding">

			<h1>JavaScript Managers</h1>
			
			<p class="MTextRed MTextBold"><?php echo htmlentities(MLoad::js_framework('core/MScript.js', 'return', true));?></p>
				
			<p>This page contains all elements that can be added with HTML and are automatically transformed into themed or cross browser classes.</p>

			<section id="section_dropdown">
				<h2>Dropdown</h1>
				<hr />
				
				<ul class="MDropdown">
					<li><a href="/">Normal Link</a></li>
					<li><a href="/">Dropdown Link</a>
						<ul>
							<li><a href="#">Sublink 1</a></li>
							<li><a href="#">Sublink 2</a></li>
							<li><a href="#">Sublink 3</a></li>
						</ul>
					</li>
				</ul>
				
				<br />
				<br />
				<a class="showCode">Code</a>
				<pre class="MHidden"><code><?php echo htmlentities('<ul class="MDropdown">
	<li><a href="/">Normal Link</a></li>
	<li><a href="/">Dropdown Link</a>
		<ul>
			<li><a href="#">Sublink 1</a></li>
			<li><a href="#">Sublink 2</a></li>
			<li><a href="#">Sublink 3</a></li>
		</ul>
	</li>
</ul>'); ?></code></pre>																						
	
				<br />
				<br />
				
			</section>
			
			<section id="section_bar">
				<h2>Bar</h2>
				<hr />
				<br />
	
				<p><span class="MTextBold">&lt;progress&gt;</span> tags are turn into MProgressBar classes, which work on all browsers.</p>
				
				<progress id="someProgress" min="0" max="100" value="40"></progress>
				<a class="showCode">Code</a>
				<pre class="MHidden"><code><?php echo htmlentities('<progress min="0" max="100"></progress>'); ?></code></pre>
				<div class="MContentSpacer"></div>
	
				<p><span class="MTextBold">&lt;meter&gt;</span> tags are turn into MRatingsBar classes, which also work on all browsers.</p>
	
				<meter id="someMeter" min="0" max="100" value="40"></meter>
				<a class="showCode">Code</a>
				<pre class="MHidden"><code><?php echo htmlentities('<meter min="0" max="100"></meter>'); ?></code></pre>																						
	
			</section><!-- section_bar -->
			
			<div class="MContentSpacer"></div>
 			<div class="MContentSpacer"></div>
			
			<section id="section_button">
				<h2>Upload Button</h2>
				<hr />
				<br />
	
				<p><span class="MTextBold">&lt;input type="file" /&gt;</span> tags are turn into MButtonUpload classes, which visually matches the MButtonBlue class.</p>
	
				<div class="MTextCentered">
					<form action="/action_button_upload_action" target="button_upload_frame_left" method="post" enctype="multipart/form-data" class="left" data-mtip="SW" title="A very complex button floated left.">
						<input type="hidden" id="button_upload_data_left" name="data"/>
						<input type="file" id="button_upload_file_left" name="file" onchange="upload()"/>
					</form><!-- button_upload_form_left -->
					<iframe id="button_upload_frame_left" name="button_upload_frame_left" class="MHidden"></iframe>
	
					<form action="/action_button_upload_action" target="button_upload_frame" method="post" enctype="multipart/form-data" class="right" data-mtip="SE" title="A very complex button floated right.">
						<input type="hidden" id="button_upload_data" name="data"/>
						<input type="file" id="button_upload_file" name="file" onchange="upload()"/>
					</form><!-- button_upload_form -->
					<iframe id="button_upload_frame" name="button_upload_frame" class="MHidden"></iframe>
	
					<form action="/action_button_upload_action" target="button_upload_frame_right" method="post" enctype="multipart/form-data" data-mtip="S" title="A very complex button.">
						<input type="hidden" id="button_upload_data_right" name="data"/>
						<input type="file" id="button_upload_file_right" name="file" onchange="upload()"/>
					</form><!-- button_upload_form_right -->
					<iframe id="button_upload_frame_right" name="button_upload_frame_right" class="MHidden"></iframe>
				</div>
	
				<a class="showCode">Code</a>
				<pre class="MHidden"><code><?php echo htmlentities('<input type="file" />'); ?></code></pre>
	
			</section><!-- section_button -->
			
			<div class="MContentSpacer"></div>
 			<div class="MContentSpacer"></div>
			
			<section id="section_list">
				<h2>List</h2>
				<hr />
				<br />
				
				<p><span class="MTextBold">&lt;li&gt;</span> tags containing 1 checkbox turn blue when the checkbox is checked.</p>
	
				<div class="MHBoxLayout MTextCentered">
					<button onclick="MList.deselectAll();">
						Deselect All
					</button>
					<button onclick="MList.selectAll();">
						Select All
					</button>
				</div>
	
				<ul>
					<li class="MListItem">
						<input type="checkbox" />
						<span>List Item</span>
					</li>
	
					<li class="MListItem">
						<input type="checkbox" />
						<span>List Item</span>
					</li>
	
					<li class="MListSeperator"></li>
	
					<li class="MListItem">
						<input type="checkbox" />
						<span>List Item</span>
					</li>
	
					<li class="MListItem">
						<input type="checkbox" />
						<span>List Item</span>
					</li>
				</ul>
	
				<a class="showCode">Code</a>
				<pre class="MHidden"><code><?php echo htmlentities('<ul>
	<li class="MListItem">
		<input type="checkbox" />
		<span>List Item</span>
	</li>
	
	<li class="MListItem">
		<input type="checkbox" />
		<span>List Item</span>
	</li>
	
	<li class="MListSeperator"></li>
	
	<li class="MListItem">
		<input type="checkbox" />
		<span>List Item</span>
	</li>
	
	<li class="MListItem">
		<input type="checkbox" />
		<span>List Item</span>
	</li>
</ul>');?></code></pre>																																																		
				
			</section><!-- section_list -->
			
			<div class="MContentSpacer"></div>
 			<div class="MContentSpacer"></div>
			
			<section id="section_tab">
				<h2>Tab</h2>
				<hr />
				<br />
	
				<p>Any <span class="MTextBold">&lt;div&gt;</span> tags with class MTabWidget and proper tab markup with automatically be given tab functionality.</p>
	
				<div class="MTabWidget">
					<ul class="MTabContainer">
						<li class="MTab">
							<a href="#tab_body_1">Tab 1</a>
						</li>
						<li class="MTab">
							<a href="#tab_body_2">Tab 2</a>
						</li>
					</ul><!-- tabs_container -->
					<div class="MTabBodyContainer">
						<div id="tab_body_1">
							<p>This is a tab body</p>
						</div><!-- tab_body_1 -->
						<div id="tab_body_2">
							<p>This is another tab body</p>
							<p>This is another tab body</p>
							<p>This is another tab body</p>
						</div><!-- tab_body_2 -->
	
					</div><!-- MTabBodyContainer -->
				</div><!-- MTabWidget -->
	
				<a class="showCode">Code</a>
				<pre class="MHidden"><code><?php echo htmlentities('<div class="MTabWidget">
	<ul class="MTabContainer">
		<li class="MTab">
			<a href="#tab_body_1">Tab 1</a>
		</li>
		<li class="MTab">
			<a href="#tab_body_2">Tab 2</a>
		</li>
	</ul>
	<div class="MTabBodyContainer">
		<div id="tab_body_1">
			<p>This is a tab body</p>
		</div>
		<div id="tab_body_2">
			<p>This is another tab body</p>
			<p>This is another tab body</p>
			<p>This is another tab body</p>
		</div>
	</div>
</div>');?></code></pre>

			</section><!-- section_tab -->
			
			<div class="MContentSpacer"></div>
 			<div class="MContentSpacer"></div>
			
			<section id="section_tip">
				<h2>Tool Tip</h1>
				<hr />
				<br />
				
				<table class="MWidthFull">
					<tr>
						<td><a data-mtip="nw" title="Anchored to North West">North West</a></td>
						<td><a data-mtip="n" title="Anchored to North">North</a></td>
						<td><a data-mtip="ne" title="Anchored to North East">North East</a></td>
					</tr>
					<tr>
						<td><a data-mtip="w" title="Anchored to West">West</a></td>
						<td></td>
						<td><a data-mtip="e" title="Anchored to East">East</a></td>
					</tr>
					<tr>
						<td><a data-mtip="sw" title="Anchored to South West">South West</a></td>
						<td><a data-mtip="s" title="Anchored to South">South</a></td>
						<td><a data-mtip="se" title="Anchored to South East">South East</a></td>
					</tr>
				</table>
				
				<a class="showCode">Code</a>
				<pre class="MHidden"><code><?php echo htmlentities('<table class="MWidthFull">
	<tr>
		<td><a data-mtip="nw" title="Anchored to North West">North West</a></td>
		<td><a data-mtip="n" title="Anchored to North">North</a></td>
		<td><a data-mtip="ne" title="Anchored to North East">North East</a></td>
	</tr>
	<tr>
		<td><a data-mtip="w" title="Anchored to West">West</a></td>
		<td></td>
		<td><a data-mtip="e" title="Anchored to East">East</a></td>
	</tr>
	<tr>
		<td><a data-mtip="sw" title="Anchored to South West">South West</a></td>
		<td><a data-mtip="s" title="Anchored to South">South</a></td>
		<td><a data-mtip="se" title="Anchored to South East">South East</a></td>
	</tr>
</table>');?></code></pre>
				
			</section>
			
			<div class="MContentSpacer"></div>
 			<div class="MContentSpacer"></div>

		</td>

	</tr>

</table>
