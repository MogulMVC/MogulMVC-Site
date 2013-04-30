<?php MLoad::template_application('template/toolbar_js'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_set">
					<li class="MSideBarListItem MCursorPointer">
						<span>set</span>
					</li>
				</a>
				
				<a href="#section_get">
					<li class="MSideBarListItem MCursorPointer">
						<span>get</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MCookie</h1>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_set">
					<?php 
					$data['title'] = 'set(name:String, value:Mixed, expires:Number, path:String, domain:String, secure:Boolean):Mixed';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_get">
					<?php 
					$data['title'] = 'get(name:String):Mixed';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
