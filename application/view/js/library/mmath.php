<?php 
$data['php_version'] = 'mmath';
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
				
				<a href="#section_linearRegression">
					<li class="MSideBarListItem MCursorPointer">
						<span>linearRegression</span>
					</li>
				</a>
				
				<a href="#section_multipleOf">
					<li class="MSideBarListItem MCursorPointer">
						<span>multipleOf</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MMath</h1>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_random">
					<?php 
					$data['title'] = 'random(min:Number, max:Number):Number';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_linearRegression">
					<?php 
					$data['title'] = 'linearRegression(x:Array, y:Array):Array';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_multipleOf">
					<?php 
					$data['title'] = 'multipleOf(number:Number, multiple:Number):Boolean';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
					<span class="MIntent">Should this be in MValidate?</span>
				</section>

			
			</div>
			
		</td>

	</tr>

</table>
