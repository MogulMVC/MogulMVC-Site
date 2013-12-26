<?php 
$data['php_version'] = MURL::segment(3);
MLoad::template_application('_template/toolbar_js', $data);
?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_jsFramework">
					<li class="MSideBarListItem MCursorPointer">
						<span>jsFramework</span>
					</li>
				</a>
				
				<a href="#section_jsApplication">
					<li class="MSideBarListItem MCursorPointer">
						<span>jsApplication</span>
					</li>
				</a>
				
				<a href="#section_jsCache">
					<li class="MSideBarListItem MCursorPointer">
						<span>jsCache</span>
					</li>
				</a>
				
				<a href="#section_jsExternal">
					<li class="MSideBarListItem MCursorPointer">
						<span>jsExternal</span>
					</li>
				</a>


				<a href="#section_cssFramework">
					<li class="MSideBarListItem MCursorPointer">
						<span>cssFramework</span>
					</li>
				</a>
				
				<a href="#section_cssApplication">
					<li class="MSideBarListItem MCursorPointer">
						<span>cssApplication</span>
					</li>
				</a>


				<a href="#section_cssCache">
					<li class="MSideBarListItem MCursorPointer">
						<span>cssCache</span>
					</li>
				</a>
				
				<a href="#section_cssExternal">
					<li class="MSideBarListItem MCursorPointer">
						<span>cssExternal</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MLoad</h1>
			
			<p>While the JavaScript version of Mload is not as robust and not as widely used as the PHP version it is still useful for creating dynamic JavaScript powered applications.</p>
			<p>All MLoad methods will append either a CSS or JavaScript file to the head of the document.</p>
			
			<h2>Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_jsFramework">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'jsFramework(file:String):void';
					$data['content'] = nl2br('This function appends a script tag to the head with the source attribute starting from the <code>frontend/framework/js</code> directory.');
					MLoad::template_application('ui/library_function', $data);
					?>
				</section>
				
				<section id="section_jsApplication">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'jsApplication(file:String):void';
					$data['content'] = nl2br('This function appends a script tag to the head with the source attribute starting from the <code>frontend/js</code> directory.');
					MLoad::template_application('ui/library_function', $data);
					?>
				</section>
				
				<section id="section_jsCache">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'jsCache(file:String):void';
					$data['content'] = nl2br('This function appends a script tag to the head with the source attribute starting from the <code>frontend/cache</code> directory.');
					MLoad::template_application('ui/library_function', $data);
					?>
				</section>
				
				<section id="section_jsExternal">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'jsExternal(url:String):void';
					$data['content'] = nl2br('This function appends a script tag to the head with an external source attribute. This function is very useful for dynamically loading libraries from third parties like Google, Twitter, and Facebook.');
					MLoad::template_application('ui/library_function', $data);
					?>
				</section>
				
				<section id="section_cssFramework">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'cssFramework(file:String):void';
					$data['content'] = nl2br('This function appends a css link tag to the head with the source attribute starting from the <code>frontend/framework/css</code> directory.');
					MLoad::template_application('ui/library_function', $data);
					?>
				</section>
				
				<section id="section_cssApplication">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'cssApplication(file:String):void';
					$data['content'] = nl2br('This function appends a css link tag to the head with the source attribute starting from the <code>frontend/css</code> directory.');
					MLoad::template_application('ui/library_function', $data);
					?>
				</section>
				
				<section id="section_cssCache">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'cssCache(file:String):void';
					$data['content'] = nl2br('This function appends a css link tag to the head with the source attribute starting from the <code>frontend/cache</code> directory.');
					MLoad::template_application('ui/library_function', $data);
					?>
				</section>
				
				<section id="section_cssExternal">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'cssExternal(url:String):void';
					$data['content'] = nl2br('This function appends a css link tag to the head with an external source attribute.');
					MLoad::template_application('ui/library_function', $data);
					?>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
