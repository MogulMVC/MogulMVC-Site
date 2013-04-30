<?php 
$data['php_version'] = 'mtype';
MLoad::template_application('template/toolbar_js', $data);
?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_string2Boolean">
					<li class="MSideBarListItem MCursorPointer">
						<span>string2Boolean</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MType</h1>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_string2Boolean">
					<?php 
					$data['title'] = 'string2Boolean(string:String):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
					<span class="MIntent">Should this be in MString?</span>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
