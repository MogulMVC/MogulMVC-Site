<?php 
$data['php_version'] = 'mdate';
MLoad::template_application('template/toolbar_js', $data);
?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_datetime">
					<li class="MSideBarListItem MCursorPointer">
						<span>datetime</span>
					</li>
				</a>
				
				<a href="#section_date">
					<li class="MSideBarListItem MCursorPointer">
						<span>date</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MDate</h1>

			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_datetime">
					<?php 
					$data['title'] = 'datetime():String';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_date">
					<?php 
					$data['title'] = 'date():String';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
