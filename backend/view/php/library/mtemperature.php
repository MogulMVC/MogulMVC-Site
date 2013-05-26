<?php 
$data['js_version'] = MURL::segment(3);
MLoad::template_application('template/toolbar_php', $data);
?>

<?php 
MLoad::php_framework('core/util/MNumber');
MLoad::php_framework('core/util/MTemperature');
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
			<span class="MNoteY">Loaded from</span>
			<pre><code><?php echo htmlspecialchars('core/util/MTemperature'); ?></code></pre>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_c2f">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'c2f($value):Number';
					$data['content'] = nl2br('Converts a Celcius temperature to Fahrenheit.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php $random_temp = MNumber::random(0, 10000); echo 'MTemperature::c2f(' . $random_temp . '); <br />'; ?><?php echo var_dump(MTemperature::c2f($random_temp)); ?></code></pre>
				</section>
				
				<section id="section_c2k">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'c2k($value):Number';
					$data['content'] = nl2br('Converts a Celcius temperature to Kelvin.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php $random_temp = MNumber::random(0, 10000); echo 'MTemperature::c2k(' . $random_temp . '); <br />'; ?><?php echo var_dump(MTemperature::c2k($random_temp)); ?></code></pre>
				</section>
				
				<section id="section_f2c">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'f2c($value):Number';
					$data['content'] = nl2br('Converts a Fahrenheit temperature to Celcius.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php $random_temp = MNumber::random(0, 10000); echo 'MTemperature::f2c(' . $random_temp . '); <br />'; ?><?php echo var_dump(MTemperature::f2c($random_temp)); ?></code></pre>
				</section>
				
				<section id="section_f2k">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'f2k($value):Number';
					$data['content'] = nl2br('Converts a Fahrenheit temperature to Kelvin.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php $random_temp = MNumber::random(0, 10000); echo 'MTemperature::f2k(' . $random_temp . '); <br />'; ?><?php echo var_dump(MTemperature::f2k($random_temp)); ?></code></pre>
				</section>
				
				<section id="section_k2c">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'k2c($value):Number';
					$data['content'] = nl2br('Converts a Kelvin temperature to Celcius.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php $random_temp = MNumber::random(0, 10000); echo 'MTemperature::k2c(' . $random_temp . '); <br />'; ?><?php echo var_dump(MTemperature::k2c($random_temp)); ?></code></pre>
				</section>
				
				<section id="section_k2f">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'k2f($value):Number';
					$data['content'] = nl2br('Converts a Kelvin temperature to Fahrenheit.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php $random_temp = MNumber::random(0, 10000); echo 'MTemperature::k2f(' . $random_temp . '); <br />'; ?><?php echo var_dump(MTemperature::k2f($random_temp)); ?></code></pre>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
