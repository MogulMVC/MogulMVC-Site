<?php MLoad::template_application('template/toolbar_php'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_is_cli">
					<li class="MSideBarListItem MCursorPointer">
						<span>is_cli</span>
					</li>
				</a>
				
				<a href="#section_is_web">
					<li class="MSideBarListItem MCursorPointer">
						<span>is_web</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MRequest</h1>
			<span class="MNoteG">MRequest is loaded by default.</span>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_is_cli">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'is_cli():Boolean';
					$data['content'] = nl2br('Returns a boolean of TRUE if the request was made via the command line.');
					MLoad::template_application('ui/library_function', $data);
					?>
					<pre><code><?php echo 'MRequest::is_cli(); <br />'; ?><?php echo var_dump(MRequest::is_cli()); ?></code></pre>
				</section>
				
				<section id="section_is_web">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'is_web():Boolean';
					$data['content'] = nl2br('Returns a boolean of TRUE if the request was made via the web.');
					MLoad::template_application('ui/library_function', $data);
					?>
					<pre><code><?php echo 'MRequest::is_web(); <br />'; ?><?php echo var_dump(MRequest::is_web()); ?></code></pre>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
