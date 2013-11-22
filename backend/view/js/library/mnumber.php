<?php 
$data['php_version'] = MURL::segment(3);
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
				
				<a href="#section_to_boolean">
					<li class="MSideBarListItem MCursorPointer">
						<span>to_boolean</span>
					</li>
				</a>
				
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MNumber</h1>
			
			<h2>Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_random">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'random(min:Number, max:Number):Number';
					$data['content'] = nl2br('Generates a random number between the <code>min</code> and <code>max</code> variables passed in.');
					MLoad::template_application('ui/library_function', $data);
					?>
					<pre><code><script>var random = MNumber.random(0, 100); document.write('MNumber.random(0, 100); <br />' + typeof random + ' ' + random);</script></code></pre>
				</section>
			
				<section id="section_toBoolean">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'toBoolean($value:Number):Boolean';
					$data['content'] = nl2br('Converts a number to a boolean. 1 or greater returns a boolean of <code>true</code>. 0 or less than returns a boolean of <code>false</code>.');
					MLoad::template_application('ui/library_function', $data);
					?>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
