<?php 
$data['js_version'] = MURL::segment(3);
MLoad::template_application('template/toolbar_php', $data);
?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_linear_regression">
					<li class="MSideBarListItem MCursorPointer">
						<span>linear_regression</span>
					</li>
				</a>
				
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<p class="MIntent">NOT COMPLETE</p>
			
			<h1>MMath</h1>
			<span class="MNoteY">Loaded from</span>
			<pre><code>core/util/MMath</code></pre>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_linear_regression">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'linear_regression($x:Array, $y:Array):Array';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
