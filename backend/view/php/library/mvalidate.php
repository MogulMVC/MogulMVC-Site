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
					$data['added'] = '1211';
					$data['title'] = 'email($email:String):Boolean';
					$data['content'] = nl2br('The email function uses regular expressions to check the validity of an e-mail address.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php echo 'MValidate::email("alanjames1987@gmail.com"); <br />'; ?><?php echo var_dump(MValidate::email('alanjames1987@gmail.com')); ?></code></pre>
					<pre><code><?php echo 'MValidate::email("alanjames1987@com"); <br />'; ?><?php echo var_dump(MValidate::email('alanjames1987@com')); ?></code></pre>
				</section>
				
				<section id="section_optional">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'optional($input:String):Boolean';
					$data['content'] = nl2br('Validates that a variable is declared, exists in memory, and has some value.
"", " ", [], {}, 0, FALSE will return TRUE as they are declared variables.
An undeclared variable or NULL will return FALSE.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_required">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'required($input:String):Boolean';
					$data['content'] = nl2br('Validates that a variable is decalred and has a non empty value.
0, FALSE will return TRUE.
"", " ", [], {}, an undeclared variable, and NULL will return FALSE.
					');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_only_contain">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'only_contain($input:Mixed, , choices:Array):Boolean';
					$data['content'] = nl2br('Validates that a variable contains only the values is in the array.
The input can not have any values other than what is in the array.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_must_contain">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'must_contain($input:Mixed, choices:Array):Boolean';
					$data['content'] = nl2br('Validates that a variable contains every value in the array.
It can have other characters but must have what is in the array.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_cant_contain">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'cant_contain($input:Mixed, choices:Array):Boolean';
					$data['content'] = nl2br('Validates that a variable does not contain what is in the array.
It can have other characters but must not have what is in the array.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_included_in">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'included_in($input:Mixed, choices:Array):Boolean';
					$data['content'] = nl2br('Validates that a variable is in a list of choices.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_excluded_in">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'excluded_in($input:Mixed, choices:Array):Boolean';
					$data['content'] = nl2br('Validates that a variable is not in a list of choices.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_between">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'between($input:Number, $min:Number, $max:Number):Boolean';
					$data['content'] = nl2br('Validates that a variable is between two numbers.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php echo 'MValidate::between(5, 0, 10); <br />'; ?><?php echo var_dump(MValidate::between(5, 0, 10)); ?></code></pre>
				</section>
				
				<section id="section_multiple_of">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'multiple_of($input:Number, $multiple:Number):Boolean';
					$data['content'] = nl2br('Validates that an input is a multiple of a number.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php echo 'MValidate::multiple_of(5, 10); <br />'; ?><?php echo var_dump(MValidate::multiple_of(5, 10)); ?></code></pre>
					<pre><code><?php echo 'MValidate::multiple_of(10, 5); <br />'; ?><?php echo var_dump(MValidate::multiple_of(10, 5)); ?></code></pre>
				</section>
				
				<section id="section_even">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'even($input:Number):Boolean';
					$data['content'] = nl2br('Validates that an input is an even number.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php echo 'MValidate::even(5); <br />'; ?><?php echo var_dump(MValidate::even(5)); ?></code></pre>
					<pre><code><?php echo 'MValidate::even(4); <br />'; ?><?php echo var_dump(MValidate::even(4)); ?></code></pre>
				</section>
				
				<section id="section_odd">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'odd($input:Number):Boolean';
					$data['content'] = nl2br('Validates that an input is an odd number.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php echo 'MValidate::odd(5); <br />'; ?><?php echo var_dump(MValidate::odd(5)); ?></code></pre>
					<pre><code><?php echo 'MValidate::odd(4); <br />'; ?><?php echo var_dump(MValidate::odd(4)); ?></code></pre>
				</section>
				
				<section id="section_state">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'state($state:String):Boolean';
					$data['content'] = nl2br('Validates that a state or abbriation for a state is a valid state.
Washington DC is considered a state to this function.
This function is case insensitive.');
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
