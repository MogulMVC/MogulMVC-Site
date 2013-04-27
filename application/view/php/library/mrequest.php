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
			<span class="MNoteG">MRequest is loaded by the system by default.</span>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_is_cli">
					<?php 
					$data['title'] = 'is_cli';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_is_web">
					<?php 
					$data['title'] = 'is_web';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
