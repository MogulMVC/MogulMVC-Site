<?php MLoad::template_application('_template/toolbar_js'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_set">
					<li class="MSideBarListItem MCursorPointer">
						<span>set</span>
					</li>
				</a>
				
				<a href="#section_get">
					<li class="MSideBarListItem MCursorPointer">
						<span>get</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MCookie</h1>
			
			<p>Setting and getting cookies is a must for user validation in several cases. While pure JavaScript allows for cookie access it is lengthy to write at times. MCookie is makes cookie management in JavaScript very easy.</p>
			
			<h2>Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_set">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'set(name:String, value:Mixed, expires:Number, path:String, domain:String, secure:Boolean):void';
					$data['content'] = nl2br('This function creates a cookie on the clients machine. It mimics the syntax of the PHP function setcookie making it easy to transition between PHP and JavaScript.');
					MLoad::template_application('ui/library_function', $data);
					?>
				</section>
				
				<section id="section_get">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'get(name:String):Mixed';
					$data['content'] = nl2br('This function returns a cookie by name. This is similar to how the superglobal $_COOKIE works in PHP.');
					MLoad::template_application('ui/library_function', $data);
					?>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
