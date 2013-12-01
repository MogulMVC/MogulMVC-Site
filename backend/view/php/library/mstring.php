<?php 
$data['js_version'] = MURL::segment(3);
MLoad::template_application('template/toolbar_php', $data);
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
				
				<a href="#section_sub_before">
					<li class="MSideBarListItem MCursorPointer">
						<span>sub_before</span>
					</li>
				</a>
				
				<a href="#section_url_link">
					<li class="MSideBarListItem MCursorPointer">
						<span>url_link</span>
					</li>
				</a>
				
				<a href="#section_url_title">
					<li class="MSideBarListItem MCursorPointer">
						<span>url_title</span>
					</li>
				</a>
				
				<a href="#section_newline_remove">
					<li class="MSideBarListItem MCursorPointer">
						<span>newline_remove</span>
					</li>
				</a>
				
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MString</h1>
			<span class="MNoteG">MString is loaded by default.</span>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_random">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'random($length:int):String';
					$data['content'] = nl2br('Returns a random string of character the length at which is requested.
Characters avalible are 0-9 a-z and A-Z for a total of 62 characters.');
					MLoad::template_application('ui/library_function', $data);
					?>
					<pre><code><?php echo 'MString::random(8); <br />'; ?><?php echo var_dump(MString::random(8)); ?></code></pre>
				</section>
				
				<section id="section_to_boolean">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'to_boolean($string:String):Boolean';
					$data['content'] = nl2br('Converts a string of "true" into a boolean of TRUE and a string of "false" into a boolean of FALSE. This is sometimes needed when going between JavaScript and PHP with AJAX.');
					MLoad::template_application('ui/library_function', $data);
					?>
					<pre><code><?php echo 'MString::to_boolean("true"); <br />'; ?><?php echo var_dump(MString::to_boolean("true")); ?></code></pre>
					<pre><code><?php echo 'MString::to_boolean("false"); <br />'; ?><?php echo var_dump(MString::to_boolean("false")); ?></code></pre>
					<pre><code><?php echo 'MString::to_boolean("1"); <br />'; ?><?php echo var_dump(MString::to_boolean("1")); ?></code></pre>
					<pre><code><?php echo 'MString::to_boolean("0"); <br />'; ?><?php echo var_dump(MString::to_boolean("0")); ?></code></pre>
				</section>
				
				<section id="section_sub_before">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'sub_before($string:String, $character:String):String';
					$data['content'] = nl2br('Given a string and a character or set of characters this function will return a substring before the first occurance of the set. This function was added when Mogul MVC was not required to run on PHP 5.3 and thus did not have access to the optional third parameter of the strstr() command in PHP 5.3.');
					MLoad::template_application('ui/library_function', $data);
					?>
					<pre><code><?php echo 'MString::sub_before("The quick brown fox jumped over the lazy dog", "jumped"); <br />'; ?><?php echo var_dump(MString::sub_before("The quick brown fox jumped over the lazy dog", "jumped")); ?></code></pre>
					<pre><code><?php echo 'MString::sub_before("The quick brown fox jumped over the lazy dog", "b"); <br />'; ?><?php echo var_dump(MString::sub_before("The quick brown fox jumped over the lazy dog", "b")); ?></code></pre>
				</section>
				
				<section id="section_url_link">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'url_link($string:String, $nofollow:Boolean):String';
					$data['content'] = nl2br('Given a string containing URLs this funcntion will return a string containing HTML anchor tags to those URLs. The optional second parameter converts the link into a no follow link.');
					MLoad::template_application('ui/library_function', $data);
					?>
					<pre><code><?php echo 'MString::url_link("Some string with http://aurlto.awebsite.com"); <br />'; ?><?php echo var_dump(MString::url_link("Some string with http://aurlto.awebsite.com")); ?></code></pre>
				</section>
				
				<section id="section_url_title">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'url_title($string:String, $seperator:String):String';
					$data['content'] = nl2br('Converts a given string into a character seperated URL title safe string. This function also lower cases the string. The optional second parameter allows you to pass in your own character, otherwise a dash (-) is used.');
					MLoad::template_application('ui/library_function', $data);
					?>
					<pre><code><?php echo 'MString::url_title("The quick brown fox jumped over the lazy dog"); <br />'; ?><?php echo var_dump(MString::url_title("The quick brown fox jumped over the lazy dog")); ?></code></pre>
					<pre><code><?php echo 'MString::url_title("The quick brown fox jumped over the lazy dog", "+"); <br />'; ?><?php echo var_dump(MString::url_title("The quick brown fox jumped over the lazy dog", "+")); ?></code></pre>
				</section>
				
				<section id="section_newline_remove">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'newline_remove($string:String):String';
					$data['content'] = nl2br('This function returns a string without the new line ("\n") character.');
					MLoad::template_application('ui/library_function', $data);
					?>
					<pre><code><?php echo 'MString::newline_remove("A
string 
with
new
lines."); <br />'; ?><?php echo var_dump(MString::newline_remove("A
string 
with
new
lines.")); ?></code></pre>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
