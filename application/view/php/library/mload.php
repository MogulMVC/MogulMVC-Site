<?php 
$data['js_version'] = MURL::segment(3);
MLoad::template_application('template/toolbar_php', $data);
?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_model">
					<li class="MSideBarListItem MCursorPointer">
						<span>model</span>
					</li>
				</a>
				
				<a href="#section_vo">
					<li class="MSideBarListItem MCursorPointer">
						<span>vo</span>
					</li>
				</a>
				
				<a href="#section_view">
					<li class="MSideBarListItem MCursorPointer">
						<span>view</span>
					</li>
				</a>
				
				<a href="#section_page">
					<li class="MSideBarListItem MCursorPointer">
						<span>page</span>
					</li>
				</a>
				
				<a href="#section_template_application">
					<li class="MSideBarListItem MCursorPointer">
						<span>template_application</span>
					</li>
				</a>
				
				<a href="#section_template_framework">
					<li class="MSideBarListItem MCursorPointer">
						<span>template_framework</span>
					</li>
				</a>
				
				<a href="#section_php_framework">
					<li class="MSideBarListItem MCursorPointer">
						<span>php_framework</span>
					</li>
				</a>
				
				<a href="#section_php_application">
					<li class="MSideBarListItem MCursorPointer">
						<span>php_application</span>
					</li>
				</a>
				
				<a href="#section_js_framework">
					<li class="MSideBarListItem MCursorPointer">
						<span>js_framework</span>
					</li>
				</a>
				
				<a href="#section_js_application">
					<li class="MSideBarListItem MCursorPointer">
						<span>js_application</span>
					</li>
				</a>
				
				<a href="#section_js_cache">
					<li class="MSideBarListItem MCursorPointer">
						<span>js_cache</span>
					</li>
				</a>
				
				<a href="#section_js_external">
					<li class="MSideBarListItem MCursorPointer">
						<span>js_external</span>
					</li>
				</a>
				
				<a href="#section_css_framework">
					<li class="MSideBarListItem MCursorPointer">
						<span>css_framework</span>
					</li>
				</a>
				
				<a href="#section_css_application">
					<li class="MSideBarListItem MCursorPointer">
						<span>css_application</span>
					</li>
				</a>
				
				<a href="#section_css_cache">
					<li class="MSideBarListItem MCursorPointer">
						<span>css_cache</span>
					</li>
				</a>
				
				<a href="#section_css_external">
					<li class="MSideBarListItem MCursorPointer">
						<span>css_external</span>
					</li>
				</a>
				
				<a href="#section_img_src_framework">
					<li class="MSideBarListItem MCursorPointer">
						<span>img_src_framework</span>
					</li>
				</a>
				
				<a href="#section_img_src_application">
					<li class="MSideBarListItem MCursorPointer">
						<span>img_src_application</span>
					</li>
				</a>
				
				<a href="#section_icon_src_framework">
					<li class="MSideBarListItem MCursorPointer">
						<span>icon_src_framework</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<p class="MIntent">NOT COMPLETE</p>
			
			<h1>MLoad</h1>
			<span class="MNoteG">MLoad is loaded by the system by default.</span>
			
			<p>MLoad is the library that you will use most while devloping with Mogul MVC. It is how all libraries, models, views, and many other files are loaded into memory or added to the HTML page being generated.</p>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
				
				<section id="section_model">
					<?php 
					$data['title'] = 'model($model:String):void';
					$data['content'] = nl2br('This function loads a model into memory. It basically works as an require_once statement with some additional benifits. One additional benifit is auto pathing. A path is determined to your models directory based on the config.php files directory entries, all you need to be is specify the file to load.
					
The function accepts 1 argument, the file name of the model being loaded starting from the model directory. The file extension is optional.

A model called <code>UserModel.php</code> located in <code>application/model/</code> can be loaded the following way.<pre><code>MLoad::model("UserModel");</code></pre>This places the model into memory and allows you to create new instances of it or call static methods inside of it.

For more information about models see <a href="/php/models/">PHP Models</a>');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_vo">
					<?php 
					$data['title'] = 'vo($vo:String):void';
					$data['content'] = nl2br('VOs or value objects are structural containers for data. They are objects that only contain values and a constructor function. Value objects are very useful when auto populating a value within an object, for example the date created of an object about to be inserted into a database.

The function accepts 1 argument, the file name of the vo being loaded starting from the vo directory. The file extension is optional.

A vo called <code>UserVO.php</code> located in <code>application/model/vo/</code> can be loaded the following way.<pre><code>MLoad::vo("UserVO");</code></pre>This places the vo into memory and allows you to create new instances of it and assign values to it.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_view($view:String, $data:Array):void">
					<?php 
					$data['title'] = 'view($view:String, $data:Array):void';
					$data['content'] = nl2br('A view loads a head, header, template file from the view folder, footer, and foot, which closes the head. Views include site wide navigation content, which can be placed in the header and the footer.

The function accepts 2 arguments, the file name of the view being loaded starting from the view directory, and data that should be sent to that view.

Data passed to the view must be an associative array. Each key within the array will represent a variable in the view.

A view called <code>profile.php</code> located in <code>application/view/</code> can be loaded the following way.<pre><code>MLoad::view("profile");</code></pre> Any data needing to be passed should be passed as below. <pre><code>MLoad::view("profile", $data);</code></pre>For more information about views see <a href=”/php/views/”>PHP Views</a>.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_page">
					<?php 
					$data['title'] = 'page($page:String, $data:Array):void';
					$data['content'] = nl2br('A page loads a head, template file from the view folder, and foot, which closes the head. Pages do not include site wide navigation content. They are meant to share aesthetics of your site, but not navigation.
					
The function accepts 2 arguments, the file name of the page being loaded starting from the view directory, and data that should be sent to that page.

A page called <code>page.php</code> located in <code>application/view/</code> can be loaded the following way.<pre><code>MLoad::page("page");</code></pre> Any data needing to be passed should be passed as below. <pre><code>MLoad::page("profile", $data);</code></pre>Pages are created the same as views, so for more information about pages see <a href=”/php/views/”>PHP Views</a>');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_template_framework">
					<?php 
					$data['title'] = 'template_framework($template:String, $data:Array):void';
					$data['content'] = nl2br('Templates are reusable UI elements that can be passed data. Mogul MVC includes some built in template files for displaying messages and loading CSS and JS. 

The function accepts 2 arguments, the file name of the template being loaded starting from the framework view directory, and data that should be sent to that template.

A template called <code>message_complete.php</code> located in <code>framework/view/</code> can be loaded the following way.<pre><code>MLoad::template_framework("message_complete");</code></pre> Any data needing to be passed should be passed as below. <pre><code>MLoad::template_framework("message_complete", $data);</code></pre>A full list and example of Mogul MVC templates can be found on <a href=”/php/ui_elements”>PHP UI Elements</a>.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_template_application">
					<?php 
					$data['title'] = 'template_application($template:String, $data:Array):void';
					$data['content'] = nl2br('As stated above templates are reusable UI elements that can be passed data.

The function accepts 2 arguments, the file name of the template being loaded starting from the framework view directory, and data that should be sent to that template.

A template called <code>comment.php</code> located in <code>application/view/template</code> can be loaded the following way.<pre><code>MLoad::template_application("template/comment");</code></pre> Any data needing to be passed should be passed as below. <pre><code>MLoad::template_application(“template/comment", $data);</code></pre>You should create a template for each item you indent to use multiple times between views. This minimizes the amount of code needed to be written and allows you to easily update the look of simple code components.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_php_framework">
					<?php 
					$data['title'] = 'php_framework($library:String):void';
					$data['content'] = nl2br('Mogul MVC comes with many built in libraries that are useful for common programming tasks. Some libraries validate variables, others allow you to get information from the URL.

A library called <code>MValidate.php</code> located in <code>framework/lib/php/core/util</code> can be loaded the following way.<pre><code>MLoad::template_application("util/MValidate");</code></pre>A full list of Mogul MVC libraries can be found on <a href=”/php/libraries/”>PHP Libraries</a>.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_php_application">
					<?php 
					$data['title'] = 'php_application($library:String):void';
					$data['content'] = nl2br('You can create your own PHP libraries and use 3rd party libraries with Mogul MVC. These libraries can range from performing mathematical operations to security libraries for validating the session data of a logged in user.

A library called <code>UserAuthenticate.php</code> located in <code>application/lib/php/core</code> can be loaded the following way.<pre><code>MLoad::template_application("UserAuthenticate");</code></pre>To learn more about creating and a library see <a href=”/php/custom_libraries”>PHP Custom Libraries</a>.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_js_framework">
					<?php 
					$data['title'] = 'js_framework(js:String, $direction:String, $useHTTP:Boolean):void';
					$data['content'] = nl2br('Mogul MVC can load JavaScript files and place them in the head or foot automatically. This allows you to specify only the name and Mload will create the path to that file my itself.

Mogul MVC comes with some core JavaScript libraries and several 3rd party JavaScript libraries such as jQuery and swfobject. 

This function accepts 3 arguments, the name of the file being added to the page, the type of load, and if HTTP should be appended to the start of the file. The second 2 parameters are optional.

The type of load can be null, which loads acts as an autoload, echo, which echos the JavaScript line directly on the page at the point you call it, or return, which sends the script tag back to you as return data.

A library called <code>jquery.js</code> located in <code>framework/lib/js/vendor</code> can be loaded the following way.<pre><code>MLoad::template_application("vendor/jquery");</code></pre>A full list of 3rd party JavaScript libraries can be found on <a href=”/js/vendor_libraries/”>JavaScript 3rd Party Libraries</a>.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_js_application">
					<?php 
					$data['title'] = 'js_application($js:String, $direction:String, $useHTTP:Boolean):void';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_js_cache">
					<?php 
					$data['title'] = 'js_cache($js:String, $direction:String):void';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_js_external">
					<?php 
					$data['title'] = 'js_external($js:String, $direction:String):void';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_css_framework">
					<?php 
					$data['title'] = 'css_framework($css:String, $direction:String, $useHTTP:Boolean):void';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_css_application">
					<?php 
					$data['title'] = 'css_application($css:String, $direction:String, $useHTTP:Boolean):void';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_css_cache">
					<?php 
					$data['title'] = 'css_cache($css:String, $direction:String):void';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_css_external">
					<?php 
					$data['title'] = 'css_external($css:String, $direction:String):void';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_img_src_framework">
					<?php 
					$data['title'] = 'img_src_framework($img:String, $direction:String, $useHTTP:Boolean):void';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_img_src_application">
					<?php 
					$data['title'] = 'img_src_application($img:String, $direction:String, $useHTTP:Boolean)';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
			
				<section id="section_icon_src_framework">
					<?php 
					$data['title'] = 'icon_src_framework($img:String, $direction:String, $useHTTP:Boolean)';
					$data['content'] = nl2br('');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
