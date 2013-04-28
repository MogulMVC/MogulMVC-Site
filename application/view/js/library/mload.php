<?php 
$data['php_version'] = 'mload';
MLoad::template_application('template/toolbar_js', $data);
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
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_jsFramework">
					<?php 
					$data['title'] = 'jsFramework(file:String):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_jsApplication">
					<?php 
					$data['title'] = 'jsApplication(file:String):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_jsCache">
					<?php 
					$data['title'] = 'jsCache(file:String):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_jsExternal">
					<?php 
					$data['title'] = 'jsExternal(url:String):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_cssFramework">
					<?php 
					$data['title'] = 'cssFramework(file:String):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_cssApplication">
					<?php 
					$data['title'] = 'cssApplication(file:String):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_cssCache">
					<?php 
					$data['title'] = 'cssCache(file:String):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_cssExternal">
					<?php 
					$data['title'] = 'cssExternal(url:String):void';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
