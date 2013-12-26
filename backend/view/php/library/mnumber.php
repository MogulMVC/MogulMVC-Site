<?php 
$data['js_version'] = MURL::segment(3);
MLoad::template_application('_template/toolbar_php', $data);
?>

<?php MLoad::php_framework('core/util/MNumber'); ?>

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
			<span class="MNoteY">Loaded from</span>
			<pre><code><?php echo htmlspecialchars('core/util/MNumber'); ?></code></pre>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_random">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'random($min:Number, $max:Number, $decimal_points:int):Number';
					$data['content'] = nl2br('Generates a random number between the <code>$min</code> and <code>$max</code> variables passed in. Unlike the default PHP <code>rand()</code> function this function returns floating point numbers. The third parameter allows you to specify how many decimal points you want. By default 5 decimal points are returned.');
					MLoad::template_application('ui/library_function', $data);
					?>
					<pre><code><?php echo 'MNumber::random(0, 100); <br />'; ?><?php echo var_dump(MNumber::random(0, 100)); ?></code></pre>
				</section>
			
				<section id="section_to_boolean">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'to_boolean($value:Number):Boolean';
					$data['content'] = nl2br('Converts a number to a boolean. 1 or greater returns a boolean of <code>TRUE</code>. 0 or less than returns a boolean of <code>FALSE</code>.');
					MLoad::template_application('ui/library_function', $data);
					?>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
