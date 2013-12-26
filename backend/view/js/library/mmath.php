<?php 
$data['php_version'] = 'mmath';
MLoad::template_application('_template/toolbar_js', $data);
?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_linearRegression">
					<li class="MSideBarListItem MCursorPointer">
						<span>linearRegression</span>
					</li>
				</a>
				
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MMath</h1>
			
			<h2>Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_linearRegression">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'linearRegression(x:Array, y:Array):Array';
					$data['content'] = nl2br('Given a set of points on a grid, linear regression will find the slope and y intercept that best fits the points. This is very useful when calculating trends in data. The first parameter is an array of all the x coordinates. The second parameter is an array of all the y coordinates. The returned data is an array, first containing the slope, secondly containing the y intercept.');
					MLoad::template_application('ui/library_function', $data);
					?>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
