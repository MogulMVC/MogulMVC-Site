<?php 
$data['php_version'] = MURL::segment(3);
MLoad::template_application('template/toolbar_js', $data);
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
				
				<a href="#section_onlyContain">
					<li class="MSideBarListItem MCursorPointer">
						<span>onlyContain</span>
					</li>
				</a>

				<a href="#section_mustContain">
					<li class="MSideBarListItem MCursorPointer">
						<span>mustContain</span>
					</li>
				</a>
				
				<a href="#section_includedIn">
					<li class="MSideBarListItem MCursorPointer">
						<span>includedIn</span>
					</li>
				</a>
				
				<a href="#section_excludedFrom">
					<li class="MSideBarListItem MCursorPointer">
						<span>excludedFrom</span>
					</li>
				</a>
				
				<a href="#section_between">
					<li class="MSideBarListItem MCursorPointer">
						<span>between</span>
					</li>
				</a>
				
				<a href="#section_multipleOf">
					<li class="MSideBarListItem MCursorPointer">
						<span>multipleOf</span>
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
			
			<h2>Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_email">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'email(email:String):Boolean';
					$data['content'] = nl2br('The email function uses regular expressions to check the validity of an e-mail address.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><script>var valid = MValidate.email("alanjames1987@gmail.com"); document.write('MValidate.email("alanjames1987@gmail.com"); <br />' + typeof valid + ' ' + valid);</script></code></pre>
					<pre><code><script>var valid = MValidate.email("alanjames1987@com"); document.write('MValidate.email("alanjames1987@com"); <br />' + typeof valid + ' ' + valid);</script></code></pre>
				</section>
				
				<section id="section_optional">
					<p class="MIntent">THIS FUNCTION NEEDS WORK</p>
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'optional(input:Mixed):Boolean';
					$data['content'] = nl2br('Validates that a variable is declared, exists in memory, and has some value.
"", " ", [], {}, 0, false will return true as they are declared variables.
An undeclared variable or null will return false.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_required">
					<p class="MIntent">THIS FUNCTION NEEDS WORK</p>
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'required(input:Mixed):Boolean';
					$data['content'] = nl2br('Validates that a variable is decalred and has a non empty value.
0, true will return true.
"", " ", [], {}, an undeclared variable, and null will return false');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_onlyContain">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'onlyContain(input:String, choices:Array):Boolean';
					$data['content'] = nl2br('Validates that a variable contains only the values is in the array.
The input can not have any values other than what is in the array.
If the input is a String each letter is checked against the choice array.
If the input is an Array each item in the array is checked against the choice array.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><script>var valid = MValidate.onlyContain("red", ["r", "e", "a", "d", "y"]); document.write('MValidate.onlyContain("red", ["r", "e", "a", "d", "y"]); <br />' + typeof valid + ' ' + valid);</script></code></pre>
					<pre><code><script>var valid = MValidate.onlyContain("Red", ["r", "e", "a", "d", "y"]); document.write('MValidate.onlyContain("Red", ["r", "e", "a", "d", "y"]); <br />' + typeof valid + ' ' + valid);</script></code></pre>
					
					<pre><code><script>var valid = MValidate.onlyContain(["comedy", "horror"], ["action", "comedy", "drama", "horror"]); document.write('MValidate.onlyContain(["comedy", "horror"], ["action", "comedy", "drama", "horror"]); <br />' + typeof valid + ' ' + valid);</script></code></pre>
					<pre><code><script>var valid = MValidate.onlyContain(["romcom", "animated"], ["action", "comedy", "drama", "horror"]); document.write('MValidate.onlyContain(["romcom", "animated"], ["action", "comedy", "drama", "horror"]); <br />' + typeof valid + ' ' + valid);</script></code></pre>
				</section>
				
				<section id="section_mustContain">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'mustContain(input:String, choices:Array):Boolean';
					$data['content'] = nl2br('Validates that a variable contains every value in the array.
The input can have other values but must have what is in the array.
If the input is a String each letter is checked against the choice array.
If the input is an Array each item in the array is checked against the choice array.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><script>var valid = MValidate.mustContain(["red", "orange", "yellow"], ["red", "yellow"]); document.write('MValidate.mustContain(["red", "orange", "yellow"], ["red", "yellow"]); <br />' + typeof valid + ' ' + valid);</script></code></pre>
					<pre><code><script>var valid = MValidate.mustContain(["red", "orange", "yellow"], ["red", "yellow", "blue"]); document.write('MValidate.mustContain(["red", "orange", "yellow"], ["red", "yellow", "blue"]); <br />' + typeof valid + ' ' + valid);</script></code></pre>
				</section>
				
				<section id="section_cantContain">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'cantContain(input:String, choices:Array):Boolean';
					$data['content'] = nl2br('Validates that a variable does not contain what is in the array.
The input can have other values but must not have what is in the array.
If the input is a String each letter is checked against the array.
If the input is an Array each item in the array is checked against the choice array.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><script>var valid = MValidate.cantContain(["red", "orange", "yellow"], ["green", "blue", "violet"]); document.write('MValidate.cantContain(["red", "orange", "yellow"], ["green", "blue", "violet"]); <br />' + typeof valid + ' ' + valid);</script></code></pre>
					<pre><code><script>var valid = MValidate.cantContain(["red", "orange", "yellow"], ["yellow", "green"]); document.write('MValidate.cantContain(["red", "orange", "yellow"], ["yellow", "green"]); <br />' + typeof valid + ' ' + valid);</script></code></pre>
				</section>
				
				<section id="section_includedIn">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'includedIn(input:Mixed, choices:Array):Boolean';
					$data['content'] = nl2br('Validates that a variable is in a list of choices.
The comparison is case sensitive, so "red" and "Red" are not the same.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><script>var valid = MValidate.includedIn("Red", ["Red", "Yellow", "Blue"]); document.write('MValidate.includedIn("Red", ["Red", "Yellow", "Blue"]); <br />' + typeof valid + ' ' + valid);</script></code></pre>
					<pre><code><script>var valid = MValidate.includedIn("red", ["Red", "Yellow", "Blue"]); document.write('MValidate.includedIn("red", ["Red", "Yellow", "Blue"]); <br />' + typeof valid + ' ' + valid);</script></code></pre>
				</section>
				
				<section id="section_excludedFrom">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'excludedFrom(input:Mixed, choices:Array):Boolean';
					$data['content'] = nl2br('Validates that a variable is not in a list of choices.
The comparison is case sensitive, so "red" and "Red" are not the same.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><script>var valid = MValidate.excludedFrom("Red", ["Red", "Yellow", "Blue"]); document.write('MValidate.excludedFrom("Red", ["Red", "Yellow", "Blue"]); <br />' + typeof valid + ' ' + valid);</script></code></pre>
					<pre><code><script>var valid = MValidate.excludedFrom("red", ["Red", "Yellow", "Blue"]); document.write('MValidate.excludedFrom("red", ["Red", "Yellow", "Blue"]); <br />' + typeof valid + ' ' + valid);</script></code></pre>
				</section>
				
				<section id="section_between">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'between(input:Number, min:Number, max:Number):Boolean';
					$data['content'] = nl2br('Validates that a variable is between two numbers.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_multipleOf">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'multipleOf(input:Number, multiple:Number):Boolean';
					$data['content'] = nl2br('Validates that an input is a multiple of a number.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_even">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'even(input:Number):Boolean';
					$data['content'] = nl2br('Validates that an input is an even number.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_odd">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'odd(input:Number):Boolean';
					$data['content'] = nl2br('Validates that an input is an odd number.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_state">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'state(state:String):Boolean';
					$data['content'] = nl2br('Validates that a state or abbriation for a state is a valid state.
Washington DC is considered a state to this function.
This function is case insensitive.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
