<?php 
$data['php_version'] = 'mstring';
MLoad::template_application('_template/toolbar_js', $data);
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
				
				<a href="#section_toBoolean">
					<li class="MSideBarListItem MCursorPointer">
						<span>toBoolean</span>
					</li>
				</a>
				
				<a href="#section_subBefore">
					<li class="MSideBarListItem MCursorPointer">
						<span>subBefore</span>
					</li>
				</a>
				
				<a href="#section_urlLink">
					<li class="MSideBarListItem MCursorPointer">
						<span>urlLink</span>
					</li>
				</a>
				
				<a href="#section_urlTitle">
					<li class="MSideBarListItem MCursorPointer">
						<span>urlTitle</span>
					</li>
				</a>
				
				<a href="#section_escapeHtml">
					<li class="MSideBarListItem MCursorPointer">
						<span>escapeHtml</span>
					</li>
				</a>
				
				<a href="#section_firstToUpperCase">
					<li class="MSideBarListItem MCursorPointer">
						<span>firstToUpperCase</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MString</h1>
			
			<h2>Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_random">
					<?php 
					$data['title'] = 'random(length:int):String';
					$data['content'] = nl2br('Returns a random string of character the length at which is requested.
Characters avalible are 0-9 a-z and A-Z for a total of 62 characters.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><script>var random = MString.random(8); document.write('MString.random(8); <br />' + typeof random + ' ' + random);</script></code></pre>
				</section>
				
				<section id="section_toBoolean">
					<?php 
					$data['title'] = 'toBoolean(value:String):Boolean';
					$data['content'] = nl2br('Converts a string of "true" into a boolean of TRUE and a string of "false" into a boolean of FALSE. This is sometimes needed when going between JavaScript and PHP with AJAX.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><script>var output = MString.toBoolean("true"); document.write('MString.toBoolean("true"); <br />' + typeof output + ' ' + output);</script></code></pre>
					<pre><code><script>var output = MString.toBoolean("false"); document.write('MString.toBoolean("false"); <br />' + typeof output + ' ' + output);</script></code></pre>
					<pre><code><script>var output = MString.toBoolean("0"); document.write('MString.toBoolean("0"); <br />' + typeof output + ' ' + output);</script></code></pre>
					<pre><code><script>var output = MString.toBoolean("1"); document.write('MString.toBoolean("1"); <br />' + typeof output + ' ' + output);</script></code></pre>
				</section>
			
				<section id="section_subBefore">
					<?php 
					$data['title'] = 'subBefore(string:String, character:String):String';
					$data['content'] = nl2br('Given a string and a character or set of characters this function will return a substring before the first occurance of the set.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><script>var output = MString.subBefore("The quick brown fox jumped over the lazy dog", "jumped"); document.write('MString.subBefore("The quick brown fox jumped over the lazy dog", "jumped"); <br />' + typeof output + ' ' + output);</script></code></pre>
					<pre><code><script>var output = MString.subBefore("The quick brown fox jumped over the lazy dog", "b"); document.write('MString.subBefore("The quick brown fox jumped over the lazy dog", "b"); <br />' + typeof output + ' ' + output);</script></code></pre>
				</section>
				
				<section id="section_urlLink">
					<?php 
					$data['title'] = 'urlLink(string:String, noFollow:Boolean):String';
					$data['content'] = nl2br('Given a string containing URLs this funcntion will return a string containing HTML anchor tags to those URLs. The optional second parameter converts the link into a no follow link.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><script>var output = MString.urlLink("Some string with http://aurlto.awebsite.com"); document.write('MString.urlLink("Some string with http://aurlto.awebsite.com"); <br />' + typeof output + ' ' + output);</script></code></pre>
				</section>
				
				<section id="section_urlTitle">
					<?php 
					$data['title'] = 'urlTitle(string:String, seperator:String):String';
					$data['content'] = nl2br('Converts a given string into a character seperated URL title safe string. This function also lower cases the string. The optional second parameter allows you to pass in your own character, otherwise a dash (-) is used.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><script>var output = MString.urlTitle("The quick brown fox jumped over the lazy dog"); document.write('MString.urlTitle("The quick brown fox jumped over the lazy dog"); <br />' + typeof output + ' ' + output);</script></code></pre>
					<pre><code><script>var output = MString.urlTitle("The quick brown fox jumped over the lazy dog", "+"); document.write('MString.urlTitle("The quick brown fox jumped over the lazy dog", "+"); <br />' + typeof output + ' ' + output);</script></code></pre>
				</section>
				
				<section id="section_escapeHtml">
					<?php 
					$data['title'] = 'escapeHtml(unsafe:String):String';
					$data['content'] = nl2br('Converts html elements to safe viewable charcters so not to affect the written HTML.');
					MLoad::template_application('_ui/library_function', $data);
					?>
				</section>
				
				<section id="section_firstToUpperCase">
					<?php 
					$data['title'] = 'firstToUpperCase(string:String):String';
					$data['content'] = nl2br('Turns the first letter of the passed in string to a capital letter.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><script>var output = MString.firstToUpperCase("a string of lower case letters."); document.write('MString.firstToUpperCase("a string of lower case letters."); <br />' + typeof output + ' ' + output);</script></code></pre>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
