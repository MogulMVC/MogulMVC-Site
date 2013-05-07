<?php 
$data['js_version'] = MURL::segment(3);
MLoad::template_application('template/toolbar_php', $data);
?>

<?php 
MLoad::php_framework('core/util/MNumber');
MLoad::php_framework('core/util/MValidate');
?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_email">
					<li class="MSideBarListItem MCursorPointer">
						<span>email</span>
					</li>
				</a>
				
				<a href="#section_optional">
					<li class="MSideBarListItem MCursorPointer">
						<span>optional</span>
					</li>
				</a>
				
				<a href="#section_required">
					<li class="MSideBarListItem MCursorPointer">
						<span>required</span>
					</li>
				</a>
				
				<a href="#section_only_contain">
					<li class="MSideBarListItem MCursorPointer">
						<span>only_contain</span>
					</li>
				</a>
				
				<a href="#section_must_contain">
					<li class="MSideBarListItem MCursorPointer">
						<span>must_contain</span>
					</li>
				</a>
				
				<a href="#section_between">
					<li class="MSideBarListItem MCursorPointer">
						<span>between</span>
					</li>
				</a>
				
				<a href="#section_state">
					<li class="MSideBarListItem MCursorPointer">
						<span>state</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<p class="MIntent">NOT COMPLETE</p>
			
			<h1>MValidate</h1>
			<span class="MNoteY">Loaded from</span>
			<pre><code>core/util/MValidate</code></pre>
			
			<p>All MValidate functions return boolean values. The value being passed in either passes and is valid, aka TRUE, or fails and is invalid, or FALSE.</p>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_email">
					<?php 
					$data['title'] = 'email($email:String):Boolean';
					$data['content'] = nl2br('The email function uses regular expressions to check the validity of an e-mail address.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php echo 'MValidate::email("alanjames1987@gmail.com"); <br />'; ?><?php echo var_dump(MValidate::email('alanjames1987@gmail.com')); ?></code></pre>
					<pre><code><?php echo 'MValidate::email("alanjames1987@com"); <br />'; ?><?php echo var_dump(MValidate::email('alanjames1987@com')); ?></code></pre>
				</section>
				
				<section id="section_optional">
					<?php 
					$data['title'] = 'optional($input:String):Boolean';
					$data['content'] = nl2br('Validates that a Variable is declared and exists in memory.
An empty string, 0, or FALSE, will return TRUE as they are declared variables.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_required">
					<?php 
					$data['title'] = 'required($input:String):Boolean';
					$data['content'] = nl2br('Validates that a Variable is decalred and has a value.
An empty string does not validate but 0 and FALSE do.
					');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_only_contain">
					<?php 
					$data['title'] = 'only_contain($input:String):Boolean';
					$data['content'] = nl2br('Validates that a Variable contains only what is in the array.
It can only have what is in the array.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_must_contain">
					<?php 
					$data['title'] = 'must_contain($input:String):Boolean';
					$data['content'] = nl2br('Validates that a Variable contains what is in the array.
It can have other characters but must have what is in the array.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_between">
					<?php 
					$data['title'] = 'between($input:Number, $rangeStart:Number, $rangeEnd:Number):Boolean';
					$data['content'] = nl2br('Validates that a Variable is between two numbers.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php echo 'MValidate::between(5, 0, 10); <br />'; ?><?php echo var_dump(MValidate::between(5, 0, 10)); ?></code></pre>
				</section>
				
				<section id="section_state">
					<?php 
					$data['title'] = 'state($state:String):Boolean';
					$data['content'] = nl2br('Validates that a state or abbriation for a state is a valid state. Washington DC is considered a state to this function. This function is case insensitive.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php echo 'MValidate::state("FL"); <br />'; ?><?php echo var_dump(MValidate::state('FL')); ?></code></pre>
					<pre><code><?php echo 'MValidate::state("dc"); <br />'; ?><?php echo var_dump(MValidate::state('dc')); ?></code></pre>
					<pre><code><?php echo 'MValidate::state("guam"); <br />'; ?><?php echo var_dump(MValidate::state('guam')); ?></code></pre>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
