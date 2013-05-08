<?php 
$data['js_version'] = MURL::segment(3);
MLoad::template_application('template/toolbar_php', $data);
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
				
				<a href="#section_to_boolean">
					<li class="MSideBarListItem MCursorPointer">
						<span>to_boolean</span>
					</li>
				</a>
				
				<a href="#section_sub_before">
					<li class="MSideBarListItem MCursorPointer">
						<span>sub_before</span>
					</li>
				</a>
				
				<a href="#section_newline_remove">
					<li class="MSideBarListItem MCursorPointer">
						<span>newline_remove</span>
					</li>
				</a>
				
				<a href="#section_url_link">
					<li class="MSideBarListItem MCursorPointer">
						<span>url_link</span>
					</li>
				</a>
				
				<a href="#section_url_title">
					<li class="MSideBarListItem MCursorPointer">
						<span>url_title</span>
					</li>
				</a>
				
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<p class="MIntent">NOT COMPLETE</p>
			
			<h1>MString</h1>
			<span class="MNoteG">MString is loaded by the system by default.</span>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_random">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'random($length:int):String';
					$data['content'] = nl2br('Returns a random string of character the length at which is requested.
Characters avalible are 0-9 a-z and A-Z for a total of 62 characters.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php echo 'MString::random(8); <br />'; ?><?php echo var_dump(MString::random(8)); ?></code></pre>
				</section>
				
				<section id="section_to_boolean">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'to_boolean($string:String):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_sub_before">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'sub_before($string:String, $character:String):String';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_newline_remove">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'newline_remove($string:String):String';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_url_link">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'url_link($string:String, $nofollow:Boolean):String';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_url_title">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'url_title($string:String, $seperator:String):String';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
