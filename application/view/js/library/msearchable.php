<?php MLoad::template_application('template/toolbar_js'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_show">
					<li class="MSideBarListItem MCursorPointer">
						<span>show</span>
					</li>
				</a>
				
				<a href="#section_showInside">
					<li class="MSideBarListItem MCursorPointer">
						<span>showInside</span>
					</li>
				</a>
				
				<a href="#section_hide">
					<li class="MSideBarListItem MCursorPointer">
						<span>hide</span>
					</li>
				</a>
				
				<a href="#section_hideInside">
					<li class="MSideBarListItem MCursorPointer">
						<span>hideInside</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MSearchable</h1>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_show">
					<?php 
					$data['title'] = 'show';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_showInside">
					<?php 
					$data['title'] = 'showInside';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_hide">
					<?php 
					$data['title'] = 'hide';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_hideInside">
					<?php 
					$data['title'] = 'hideInside';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
