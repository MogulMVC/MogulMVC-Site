<?php 
$data['php_version'] = 'mtime';
MLoad::template_application('template/toolbar_js', $data);
?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_sec2hms">
					<li class="MSideBarListItem MCursorPointer">
						<span>sec2hms</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MTime</h1>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_sec2hms">
					<?php 
					$data['title'] = 'sec2hms(sec:int):String';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>			
			</div>
			
		</td>

	</tr>

</table>
