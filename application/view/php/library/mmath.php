<?php 
$data['js_version'] = 'mmath';
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
				
				<a href="#section_linear_regression">
					<li class="MSideBarListItem MCursorPointer">
						<span>linear_regression</span>
					</li>
				</a>
				
				<a href="#section_multiple_of">
					<li class="MSideBarListItem MCursorPointer">
						<span>multiple_of</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MMath</h1>
			<span class="MNoteY">Loaded from</span>
			<pre><code>core/util/MMath</code></pre>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_random">
					<?php 
					$data['title'] = 'random($min:Number, $max:Number):Number';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_linear_regression">
					<?php 
					$data['title'] = 'linear_regression($x:Array, $y:Array):Array';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_multiple_of">
					<?php 
					$data['title'] = 'multiple_of($number:Number, $multiple:Number):Boolean';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
					<span class="MIntent">Should this be in MValidate?</span>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
