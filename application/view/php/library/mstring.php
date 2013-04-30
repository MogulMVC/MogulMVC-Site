<?php 
$data['js_version'] = 'mstring';
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
			
			<h1>MString</h1>
			<span class="MNoteY">Loaded from</span>
			<pre><code>core/util/MString</code></pre>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_random">
					<?php 
					$data['title'] = 'random($length:int):String';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
			
				<section id="section_sub_before">
					<?php 
					$data['title'] = 'sub_before($string:String, $character:String):String';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_newline_remove">
					<?php 
					$data['title'] = 'newline_remove($string:String):String';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_url_link">
					<?php 
					$data['title'] = 'url_link($string:String, $nofollow:Boolean):String';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_url_title">
					<?php 
					$data['title'] = 'url_title($string:String, $seperator:String):String';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
