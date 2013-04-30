<?php 
$data['php_version'] = 'mvalidate';
MLoad::template_application('template/toolbar_js', $data);
?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_email">
					<li class="MSideBarListItem MCursorPointer">
						<span>email</span>
					</li>
				</a>
				
				<a href="#section_optional">
					<li class="MSideBarListItem MCursorPointer">
						<span>optional</span>
					</li>
				</a>
				
				<a href="#section_required">
					<li class="MSideBarListItem MCursorPointer">
						<span>required</span>
					</li>
				</a>
				
				<a href="#section_onlyContain">
					<li class="MSideBarListItem MCursorPointer">
						<span>onlyContain</span>
					</li>
				</a>

				<a href="#section_mustContain">
					<li class="MSideBarListItem MCursorPointer">
						<span>mustContain</span>
					</li>
				</a>
				
				<a href="#section_between">
					<li class="MSideBarListItem MCursorPointer">
						<span>between</span>
					</li>
				</a>

				<a href="#section_state">
					<li class="MSideBarListItem MCursorPointer">
						<span>state</span>
					</li>
				</a>
				
				<a href="#section_">
					<li class="MSideBarListItem MCursorPointer">
						<span></span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MValidate</h1>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_email">
					<?php 
					$data['title'] = 'email(email:String):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_optional">
					<?php 
					$data['title'] = 'optional(input:Mixed):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_required">
					<?php 
					$data['title'] = 'required(input:Mixed):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_onlyContain">
					<?php 
					$data['title'] = 'onlyContain(input:String, choices:Array):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_mustContain">
					<?php 
					$data['title'] = 'mustContain(input:String, choices:Array):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_between">
					<?php 
					$data['title'] = 'between(input:Number, rangeStart:Number, rangeEnd:Number):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
					<span class="MIntent">Should this be in MMath?</span>
				</section>
				
				<section id="section_state">
					<?php 
					$data['title'] = 'state(state:String):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
