<?php 
$data['js_version'] = 'mload';
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
			
			<h1>MLoad</h1>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
				
				<section id="section_model">
					<?php 
					$data['title'] = 'model';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_vo">
					<?php 
					$data['title'] = 'vo';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_view">
					<?php 
					$data['title'] = 'view';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_page">
					<?php 
					$data['title'] = 'page';
					$data['content'] = '';
					MLoad::template_application('library_function', $data);
					?>
				</section>
				
				<section id="section_template_application">
					<?php 
					$data['title'] = 'template_application';
					$data['content'] = '';
					MLoad::template_application('library_function', $data);
					?>
				</section>
				
				<section id="section_template_framework">
					<?php 
					$data['title'] = 'template_framework';
					$data['content'] = '';
					MLoad::template_application('library_function', $data);
					?>
				</section>
				
				<section id="section_php_framework">
					<?php 
					$data['title'] = 'php_framework';
					$data['content'] = '';
					MLoad::template_application('library_function', $data);
					?>
				</section>
				
				<section id="section_php_application">
					<?php 
					$data['title'] = 'php_application';
					$data['content'] = '';
					MLoad::template_application('library_function', $data);
					?>
				</section>
				
				<section id="section_js_framework">
					<?php 
					$data['title'] = 'js_framework';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_js_application">
					<?php 
					$data['title'] = 'js_application';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_js_cache">
					<?php 
					$data['title'] = 'js_cache';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_js_external">
					<?php 
					$data['title'] = 'js_external';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_css_framework">
					<?php 
					$data['title'] = 'css_framework';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_css_application">
					<?php 
					$data['title'] = 'css_application';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_css_cache">
					<?php 
					$data['title'] = 'css_cache';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_css_external">
					<?php 
					$data['title'] = 'css_external';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_img_src_framework">
					<?php 
					$data['title'] = 'img_src_framework';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_img_src_application">
					<?php 
					$data['title'] = 'img_src_application';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
			
				<section id="section_icon_src_framework">
					<?php 
					$data['title'] = 'icon_src_framework';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
