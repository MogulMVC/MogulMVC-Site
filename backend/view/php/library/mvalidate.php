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
				
				<a href="#section_included_in">
					<li class="MSideBarListItem MCursorPointer">
						<span>included_in</span>
					</li>
				</a>
				
				<a href="#section_excluded_from">
					<li class="MSideBarListItem MCursorPointer">
						<span>excluded_from</span>
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
"", " ", array(), 0, FALSE will return TRUE as they are declared variables.
An undeclared variable or NULL will return FALSE.');
					MLoad::template_application('template/library_function', $data);
					?>
					<span class="MNoteR right">In the example below we first must declare a variable in order to pass it into the function as this function only accepts passing by reference.</span>
					<pre><code><?php echo '$value = "some value"; <br />MValidate::optional($value); <br />'; ?><?php $value = "some value"; echo var_dump(MValidate::optional($value)); ?></code></pre>
					<pre><code><?php echo '$value = ""; <br />MValidate::optional($value); <br />'; ?><?php $value = ""; echo var_dump(MValidate::optional($value)); ?></code></pre>
					<pre><code><?php echo '$value = " "; <br />MValidate::optional($value); <br />'; ?><?php $value = " "; echo var_dump(MValidate::optional($value)); ?></code></pre>
					<pre><code><?php echo '$value = array(); <br />MValidate::optional($value); <br />'; ?><?php $value = array(); echo var_dump(MValidate::optional($value)); ?></code></pre>
					<pre><code><?php echo '$value = 0; <br />MValidate::optional($value); <br />'; ?><?php $value = 0; echo var_dump(MValidate::optional($value)); ?></code></pre>
					<pre><code><?php echo '$value = FALSE; <br />MValidate::optional($value); <br />'; ?><?php $value = FALSE; echo var_dump(MValidate::optional($value)); ?></code></pre>
					
					<span class="MNoteY right">Unset $value.</span>
					<pre><code><?php echo 'unset($value); <br />MValidate::optional($value); <br />'; ?><?php unset($value); echo var_dump(MValidate::optional($value)); ?></code></pre>
					<pre><code><?php echo '$value = NULL; <br />MValidate::optional($value); <br />'; ?><?php $value = NULL; echo var_dump(MValidate::optional($value)); ?></code></pre>
				</section>
				
				<section id="section_required">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'required($input:String):Boolean';
					$data['content'] = nl2br('Validates that a variable is decalred and has a non empty value.
0, FALSE will return TRUE.
"", " ", array(), an undeclared variable, and NULL will return FALSE.');
					MLoad::template_application('template/library_function', $data);
					?>
					<span class="MNoteR right">In the example below we first must declare a variable in order to pass it into the function as this function accepts passing by reference.</span>
					<pre><code><?php echo '$value = "some value"; <br />MValidate::required($value); <br />'; ?><?php $value = "some value"; echo var_dump(MValidate::required($value)); ?></code></pre>
					<pre><code><?php echo '$value = ""; <br />MValidate::required($value); <br />'; ?><?php $value = ""; echo var_dump(MValidate::required($value)); ?></code></pre>
					<pre><code><?php echo '$value = " "; <br />MValidate::required($value); <br />'; ?><?php $value = " "; echo var_dump(MValidate::required($value)); ?></code></pre>
					<pre><code><?php echo '$value = array(); <br />MValidate::required($value); <br />'; ?><?php $value = array(); echo var_dump(MValidate::required($value)); ?></code></pre>
					<pre><code><?php echo '$value = 0; <br />MValidate::required($value); <br />'; ?><?php $value = 0; echo var_dump(MValidate::required($value)); ?></code></pre>
					<pre><code><?php echo '$value = FALSE; <br />MValidate::required($value); <br />'; ?><?php $value = FALSE; echo var_dump(MValidate::required($value)); ?></code></pre>
					
					<span class="MNoteY right">Unset $value.</span>
					<pre><code><?php echo 'unset($value); <br />MValidate::required($value); <br />'; ?><?php unset($value); echo var_dump(MValidate::required($value)); ?></code></pre>
					<pre><code><?php echo '$value = NULL; <br />MValidate::required($value); <br />'; ?><?php $value = NULL; echo var_dump(MValidate::required($value)); ?></code></pre>
				</section>
				
				<section id="section_only_contain">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'only_contain($input:Mixed, choices:Array):Boolean';
					$data['content'] = nl2br('Validates that a variable contains only the values is in the array.
The input can not have any values other than what is in the array.
If the input is a String each letter is checked against the choice array.
If the input is an Array each item in the array is checked against the choice array.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php echo 'MValidate::only_contain("red", array("r", "e", "a", "d", "y")); <br />'; ?><?php echo var_dump(MValidate::only_contain("red", array("r", "e", "a", "d", "y"))); ?></code></pre>
					<pre><code><?php echo 'MValidate::only_contain("Red", array("r", "e", "a", "d", "y")); <br />'; ?><?php echo var_dump(MValidate::only_contain("Red", array("r", "e", "a", "d", "y"))); ?></code></pre>
					
					<pre><code><?php echo 'MValidate::only_contain(array("comedy", "horror"), array("action", "comedy", "drama", "horror")); <br />'; ?><?php echo var_dump(MValidate::only_contain(array("comedy", "horror"), array("action", "comedy", "drama", "horror"))); ?></code></pre>
					<pre><code><?php echo 'MValidate::only_contain(array("romcom", "animated"), array("action", "comedy", "drama", "horror")); <br />'; ?><?php echo var_dump(MValidate::only_contain(array("romcom", "animated"), array("action", "comedy", "drama", "horror"))); ?></code></pre>
				</section>
				
				<section id="section_must_contain">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'must_contain($input:Mixed, choices:Array):Boolean';
					$data['content'] = nl2br('Validates that a variable contains every value in the array.
The input can have other values but must have what is in the array.
If the input is a String each letter is checked against the choice array.
If the input is an Array each item in the array is checked against the choice array.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php echo 'MValidate::must_contain(array("red", "orange", "yellow"), array("red", "yellow")); <br />'; ?><?php echo var_dump(MValidate::must_contain(array("red", "orange", "yellow"), array("red", "yellow"))); ?></code></pre>
					<pre><code><?php echo 'MValidate::must_contain(array("red", "orange", "yellow"), array("red", "yellow", "blue")); <br />'; ?><?php echo var_dump(MValidate::must_contain(array("red", "orange", "yellow"), array("red", "yellow", "blue"))); ?></code></pre>
				</section>
				
				<section id="section_cant_contain">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'cant_contain($input:Mixed, choices:Array):Boolean';
					$data['content'] = nl2br('Validates that a variable does not contain what is in the array.
The input can have other values but must not have what is in the array.
If the input is a String each letter is checked against the array.
If the input is an Array each item in the array is checked against the choice array.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php echo 'MValidate::cant_contain(array("red", "orange", "yellow"), array("green", "blue", "violet")); <br />'; ?><?php $value = NULL; echo var_dump(MValidate::cant_contain(array("red", "orange", "yellow"), array("green", "blue", "violet"))); ?></code></pre>
					<pre><code><?php echo 'MValidate::cant_contain(array("red", "orange", "yellow"), array("yellow", "green")); <br />'; ?><?php $value = NULL; echo var_dump(MValidate::cant_contain(array("red", "orange", "yellow"), array("yellow", "green"))); ?></code></pre>
				</section>
				
				<section id="section_included_in">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'included_in($input:Mixed, choices:Array):Boolean';
					$data['content'] = nl2br('Validates that a variable is in a list of choices.
The comparison is case sensitive, so "red" and "Red" are not the same.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php echo 'MValidate::included_in("Red", array("Red", "Yellow", "Blue")); <br />'; ?><?php $value = NULL; echo var_dump(MValidate::included_in("Red", array("Red", "Yellow", "Blue"))); ?></code></pre>
					<pre><code><?php echo 'MValidate::included_in("red", array("Red", "Yellow", "Blue")); <br />'; ?><?php $value = NULL; echo var_dump(MValidate::included_in("red", array("Red", "Yellow", "Blue"))); ?></code></pre>
				</section>
				
				<section id="section_excluded_from">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'excluded_from($input:Mixed, choices:Array):Boolean';
					$data['content'] = nl2br('Validates that a variable is not in a list of choices.
The comparison is case sensitive, so "red" and "Red" are not the same.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php echo 'MValidate::excluded_from("Red", array("Red", "Yellow", "Blue")); <br />'; ?><?php $value = NULL; echo var_dump(MValidate::excluded_from("Red", array("Red", "Yellow", "Blue"))); ?></code></pre>
					<pre><code><?php echo 'MValidate::excluded_from("red", array("Red", "Yellow", "Blue")); <br />'; ?><?php $value = NULL; echo var_dump(MValidate::excluded_from("red", array("Red", "Yellow", "Blue"))); ?></code></pre>
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
