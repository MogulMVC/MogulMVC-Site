<?php 
$data['js_version'] = 'mstring';
MLoad::template_application('template/toolbar_php', $data);
?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_">
					<li class="MSideBarListItem MCursorPointer">
						<span>Default</span>
					</li>
				</a>
				
				<a href="#section_">
					<li class="MSideBarListItem MCursorPointer">
						<span>Sub</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MString</h1>
			<p>Loaded from <span class="MTextBold">core/util/MString</span></p>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_random">
					<?php 
					$data['title'] = 'random';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
			
				<section id="section_sub_before">
					<?php 
					$data['title'] = 'sub_before';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_newline_remove">
					<?php 
					$data['title'] = 'newline_remove';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_url_link">
					<?php 
					$data['title'] = 'url_link';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_url_title">
					<?php 
					$data['title'] = 'url_title';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
