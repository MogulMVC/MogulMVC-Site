<?php 
$data['php_version'] = 'mtemperature';
MLoad::template_application('_template/toolbar_js', $data);
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
			
			<h2>Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_c2f">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'c2f(celsius:Number):Number';
					$data['content'] = nl2br('Converts a Celcius temperature to Fahrenheit.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><script>var random = MNumber.random(0, 10000); var calc = MTemperature.c2f(random); document.write('MTemperature.c2f(' + random + '); <br />' + typeof calc + ' ' + calc);</script></code></pre>
				</section>
				
				<section id="section_c2k">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'c2k(celsius:Number):Number';
					$data['content'] = nl2br('Converts a Celcius temperature to Kelvin.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><script>var random = MNumber.random(0, 10000); var calc = MTemperature.c2k(random); document.write('MTemperature.c2k(' + random + '); <br />' + typeof calc + ' ' + calc);</script></code></pre>
				</section>
				
				<section id="section_f2c">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'f2c(fahrenheit:Number):Number';
					$data['content'] = nl2br('Converts a Fahrenheit temperature to Celcius.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><script>var random = MNumber.random(0, 10000); var calc = MTemperature.f2c(random); document.write('MTemperature.f2c(' + random + '); <br />' + typeof calc + ' ' + calc);</script></code></pre>
				</section>
				
				<section id="section_f2k">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'f2k(fahrenheit:Number):Number';
					$data['content'] = nl2br('Converts a Fahrenheit temperature to Kelvin.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><script>var random = MNumber.random(0, 10000); var calc = MTemperature.f2k(random); document.write('MTemperature.f2k(' + random + '); <br />' + typeof calc + ' ' + calc);</script></code></pre>
				</section>
				
				<section id="section_k2c">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'k2c(kelvin:Number):Number';
					$data['content'] = nl2br('Converts a Kelvin temperature to Celcius.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><script>var random = MNumber.random(0, 10000); var calc = MTemperature.k2c(random); document.write('MTemperature.k2c(' + random + '); <br />' + typeof calc + ' ' + calc);</script></code></pre>
				</section>
				
				<section id="section_k2f">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'k2f(kelvin:Number):Number';
					$data['content'] = nl2br('Converts a Kelvin temperature to Fahrenheit.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><script>var random = MNumber.random(0, 10000); var calc = MTemperature.k2f(random); document.write('MTemperature.k2f(' + random + '); <br />' + typeof calc + ' ' + calc);</script></code></pre>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
