<?php 
$data['js_version'] = 'mload';
MLoad::template_application('template/toolbar_php', $data);
?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_model">
					<li class="MSideBarListItem MCursorPointer">
						<span>model</span>
					</li>
				</a>
				
				<a href="#section_vo">
					<li class="MSideBarListItem MCursorPointer">
						<span>vo</span>
					</li>
				</a>
				
				<a href="#section_view">
					<li class="MSideBarListItem MCursorPointer">
						<span>view</span>
					</li>
				</a>
				
				<a href="#section_page">
					<li class="MSideBarListItem MCursorPointer">
						<span>page</span>
					</li>
				</a>
				
				<a href="#section_template_application">
					<li class="MSideBarListItem MCursorPointer">
						<span>template_application</span>
					</li>
				</a>
				
				<a href="#section_template_framework">
					<li class="MSideBarListItem MCursorPointer">
						<span>template_framework</span>
					</li>
				</a>
				
				<a href="#section_php_framework">
					<li class="MSideBarListItem MCursorPointer">
						<span>php_framework</span>
					</li>
				</a>
				
				<a href="#section_php_application">
					<li class="MSideBarListItem MCursorPointer">
						<span>php_application</span>
					</li>
				</a>
				
				<a href="#section_js_framework">
					<li class="MSideBarListItem MCursorPointer">
						<span>js_framework</span>
					</li>
				</a>
				
				<a href="#section_js_application">
					<li class="MSideBarListItem MCursorPointer">
						<span>js_application</span>
					</li>
				</a>
				
				<a href="#section_js_cache">
					<li class="MSideBarListItem MCursorPointer">
						<span>js_cache</span>
					</li>
				</a>
				
				<a href="#section_js_external">
					<li class="MSideBarListItem MCursorPointer">
						<span>js_external</span>
					</li>
				</a>
				
				<a href="#section_css_framework">
					<li class="MSideBarListItem MCursorPointer">
						<span>css_framework</span>
					</li>
				</a>
				
				<a href="#section_css_application">
					<li class="MSideBarListItem MCursorPointer">
						<span>css_application</span>
					</li>
				</a>
				
				<a href="#section_css_cache">
					<li class="MSideBarListItem MCursorPointer">
						<span>css_cache</span>
					</li>
				</a>
				
				<a href="#section_css_external">
					<li class="MSideBarListItem MCursorPointer">
						<span>css_external</span>
					</li>
				</a>
				
				<a href="#section_img_src_framework">
					<li class="MSideBarListItem MCursorPointer">
						<span>img_src_framework</span>
					</li>
				</a>
				
				<a href="#section_img_src_application">
					<li class="MSideBarListItem MCursorPointer">
						<span>img_src_application</span>
					</li>
				</a>
				
				<a href="#section_icon_src_framework">
					<li class="MSideBarListItem MCursorPointer">
						<span>icon_src_framework</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MLoad</h1>
			<span class="MNoteG">MLoad is loaded by the system by default.</span>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
				
				<section id="section_model">
					<?php 
					$data['title'] = 'model($model:String):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_vo">
					<?php 
					$data['title'] = 'vo($vo:String):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_view($view:String, $data:Array):void">
					<?php 
					$data['title'] = 'view';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_page">
					<?php 
					$data['title'] = 'page($page:String, $data:Array):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_template_framework">
					<?php 
					$data['title'] = 'template_framework($template:String, $data:Array):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_template_application">
					<?php 
					$data['title'] = 'template_application($template:String, $data:Array):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_php_framework">
					<?php 
					$data['title'] = 'php_framework($library:String):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_php_application">
					<?php 
					$data['title'] = 'php_application($library:String):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_js_framework">
					<?php 
					$data['title'] = 'js_framework(js:String, $direction:String, $useHTTP:Boolean):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_js_application">
					<?php 
					$data['title'] = 'js_application($js:String, $direction:String, $useHTTP:Boolean):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_js_cache">
					<?php 
					$data['title'] = 'js_cache($js:String, $direction:String):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_js_external">
					<?php 
					$data['title'] = 'js_external($js:String, $direction:String):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_css_framework">
					<?php 
					$data['title'] = 'css_framework($css:String, $direction:String, $useHTTP:Boolean):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_css_application">
					<?php 
					$data['title'] = 'css_application($css:String, $direction:String, $useHTTP:Boolean):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_css_cache">
					<?php 
					$data['title'] = 'css_cache($css:String, $direction:String):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_css_external">
					<?php 
					$data['title'] = 'css_external($css:String, $direction:String):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_img_src_framework">
					<?php 
					$data['title'] = 'img_src_framework($img:String, $direction:String, $useHTTP:Boolean):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_img_src_application">
					<?php 
					$data['title'] = 'img_src_application($img:String, $direction:String, $useHTTP:Boolean)';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
			
				<section id="section_icon_src_framework">
					<?php 
					$data['title'] = 'icon_src_framework($img:String, $direction:String, $useHTTP:Boolean)';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
