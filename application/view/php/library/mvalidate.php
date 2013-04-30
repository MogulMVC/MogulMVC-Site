<?php 
$data['js_version'] = 'mvalidate';
MLoad::template_application('template/toolbar_php', $data);
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
				
				<a href="#section_only_contain">
					<li class="MSideBarListItem MCursorPointer">
						<span>only_contain</span>
					</li>
				</a>
				
				<a href="#section_must_contain">
					<li class="MSideBarListItem MCursorPointer">
						<span>must_contain</span>
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
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MValidate</h1>
			<span class="MNoteY">Loaded from</span>
			<pre><code>core/util/MValidate</code></pre>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_email">
					<?php 
					$data['title'] = 'email($email:String):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_optional">
					<?php 
					$data['title'] = 'optional($input:String):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_required">
					<?php 
					$data['title'] = 'required($input:String):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_only_contain">
					<?php 
					$data['title'] = 'only_contain($input:String):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_must_contain">
					<?php 
					$data['title'] = 'must_contain($input:String):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_between">
					<?php 
					$data['title'] = 'between($input:Number, $rangeStart:Number, $rangeEnd:Number):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
					<span class="MIntent">Should this be in MMath?</span>
				</section>
				
				<section id="section_state">
					<?php 
					$data['title'] = 'state($state:String):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
