<?php 
$data['php_version'] = 'mtemperature';
MLoad::template_application('template/toolbar_js', $data);
?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_c2f">
					<li class="MSideBarListItem MCursorPointer">
						<span>c2f</span>
					</li>
				</a>
				
				<a href="#section_c2k">
					<li class="MSideBarListItem MCursorPointer">
						<span>c2k</span>
					</li>
				</a>
				
				<a href="#section_f2c">
					<li class="MSideBarListItem MCursorPointer">
						<span>f2c</span>
					</li>
				</a>
				
				<a href="#section_f2k">
					<li class="MSideBarListItem MCursorPointer">
						<span>f2k</span>
					</li>
				</a>
				
				<a href="#section_k2c">
					<li class="MSideBarListItem MCursorPointer">
						<span>k2c</span>
					</li>
				</a>
				
				<a href="#section_k2f">
					<li class="MSideBarListItem MCursorPointer">
						<span>k2f</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MTemperature</h1>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_c2f">
					<?php 
					$data['title'] = 'c2f(celsius:Number):Number';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_c2k">
					<?php 
					$data['title'] = 'c2k(celsius:Number):Number';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_f2c">
					<?php 
					$data['title'] = 'f2c(fahrenheit:Number):Number';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_f2k">
					<?php 
					$data['title'] = 'f2k(fahrenheit:Number):Number';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_k2c">
					<?php 
					$data['title'] = 'k2c(kelvin:Number):Number';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_k2f">
					<?php 
					$data['title'] = 'k2f(kelvin:Number):Number';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
