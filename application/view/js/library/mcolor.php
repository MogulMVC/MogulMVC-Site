<?php MLoad::template_application('template/toolbar_js'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_fadeHex">
					<li class="MSideBarListItem MCursorPointer">
						<span>fadeHex</span>
					</li>
				</a>
				
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MColor</h1>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_fadeHex">
					<?php 
					$data['title'] = 'fadeHex';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
