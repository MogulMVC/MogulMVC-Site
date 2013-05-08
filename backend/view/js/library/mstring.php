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
				
				<a href="#section_toBoolean">
					<li class="MSideBarListItem MCursorPointer">
						<span>toBoolean</span>
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
						<span>escapeHtml</span>
					</li>
				</a>
				
				<a href="#section_firstToUpperCase">
					<li class="MSideBarListItem MCursorPointer">
						<span>firstToUpperCase</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<p class="MIntent">NOT COMPLETE</p>
			
			<h1>MString</h1>
			
			<h2>Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_random">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'random(length:int):String';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_toBoolean">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'toBoolean(value:String):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
			
				<section id="section_subBefore">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'subBefore(string:String, character:String):String';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_urlLink">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'urlLink(string:String, noFollow:Boolean):String';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_urlTitle">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'urlTitle(string:String, seperator:String):String';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_escapeHtml">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'escapeHtml(unsafe:String):String';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_firstToUpperCase">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'firstToUpperCase(string:String):String';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
