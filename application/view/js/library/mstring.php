<?php 
$data['php_version'] = 'mstring';
MLoad::template_application('template/toolbar_js', $data);
?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_random">
					<li class="MSideBarListItem MCursorPointer">
						<span>random</span>
					</li>
				</a>
				
				<a href="#section_subBefore">
					<li class="MSideBarListItem MCursorPointer">
						<span>subBefore</span>
					</li>
				</a>
				
				<a href="#section_urlLink">
					<li class="MSideBarListItem MCursorPointer">
						<span>urlLink</span>
					</li>
				</a>
				
				<a href="#section_urlTitle">
					<li class="MSideBarListItem MCursorPointer">
						<span>urlTitle</span>
					</li>
				</a>
				
				<a href="#section_escapeHtml">
					<li class="MSideBarListItem MCursorPointer">
						<span></span>
					</li>
				</a>
				
				<a href="#section_firstToUpperCase">
					<li class="MSideBarListItem MCursorPointer">
						<span></span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MString</h1>
			
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
			
				<section id="section_subBefore">
					<?php 
					$data['title'] = 'subBefore';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_urlLink">
					<?php 
					$data['title'] = 'urlLink';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_urlTitle">
					<?php 
					$data['title'] = 'urlTitle';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_escapeHtml">
					<?php 
					$data['title'] = 'escapeHtml';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_firstToUpperCase">
					<?php 
					$data['title'] = 'firstToUpperCase';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
