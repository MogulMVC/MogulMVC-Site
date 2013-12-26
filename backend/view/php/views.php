<?php MLoad::template_application('_template/toolbar_php'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_types">
					<li class="MSideBarListItem MCursorPointer">
						<span>Types of Views</span>
					</li>
				</a>
				
				<a href="#section_create">
					<li class="MSideBarListItem MCursorPointer">
						<span>Create a View</span>
					</li>
				</a>
				
				<a href="#section_load">
					<li class="MSideBarListItem MCursorPointer">
						<span>Load a View</span>
					</li>
				</a>
				
			</ul>
		</td>

		<td class="MWidthFull MPadding">
	
			<h1>PHP Views</h1>

			<p>Views are files that create the HTML to be sent to the browser. They are composed of HTML, JavaScript, CSS and PHP variables passed in from the controller.</p> 
			
			<p>PHP within views performs minimalistic logic, only using if statements, loops, utility functions, and echoing out variables.</p>
	
			<section id="section_types">
	
				<h2>Types of Views</h2>
				<hr />
				
				<p>MogulPHP has two main types of views, views and templates.</p>
				
				<p>Views are full pages, minus the head, header, footer, foot, which closes the head. They are essentially just the content of the page.</p>
				
				<p>Templates are reusable UI elements. For example, each section element within this document is a template file. It can be reused as many times as needed and minimize the amount of code that needs to be written.</p>
	
			</section>
			
			<section id="section_create">
	
				<h2>Create a View</h2>
				<hr />
	
				<p>To create a view first start by creating HTML.</p>
				
				<pre><code><?php echo htmlspecialchars('<div>
	<p>Welcome Back User Name</p>
</div>'); ?></code></pre>
	
				<p>Once happy with the view replace all sections needing dynamic data with a PHP echo statement.</p>
				
				<pre><code><?php echo htmlspecialchars('<div>
	<p>Welcome Back <?php echo $user_name; ?></p>
</div>'); ?></code></pre>

				<p>In this example <code>$user_name</code> would be a variable passed in from the controller. In reality views contain far more HTML than the example above.</p>
				
				<p>Templates are created the same way as views. However as templates are only sections of a page they are more minimalistic.</p>
	
			</section>
			
			<section id="section_load">
	
				<h2>Load a View</h2>
				<hr />
				
				<p>Loading views happens in the controller using the MLoad class. Within the MLoad class there are four functions created to load different types of views. These are view, page, template_application, and template_framework.</p>
				
				<p>The view function loads a view from the view directory. It will include the head, header, footer, and foot template files you configured within your config.php file within the config directory.</p>
				
				<p>The page function will do nearly the same thing as the view function. However, only the head and foot will be loaded for a page.</p>
				
				<p>The template_application and  template_framework do the same thing but load from different locations.  The template_application function loads a view from the backend/view directory. The template_framework function loads a view from the backend/framework/view directory.</p>
				
				<p>MogulPHP has some built in templates which it uses when loading in CSS JavaScript.</p>
				
				<p>All the view loading functions accept two parameters, the second being optional.</p>
				
				<p>The first parameter is the file to load, starting from the view directory in all but the template_framework's case. The second parameter is an associative array, containing all variables you wish to use within the view.</p>
				
				<p>Assume we have a associative array declared within the controller which has several indexes. That associative array would be passed a view as follows.</p>
				
				<pre><code><?php echo htmlspecialchars('$data["user_id"] = 10;
$data["user_name"] = "John Smith";

MLoad::view("my_view", $data);'); ?></code></pre>
				
				<p>Each index within that associative array would become a declared variable within the view.</p>
	
				<p><code>$data["user_id"]</code> becomes <code>$user_id</code> and <code>$data["user_name"]</code> becomes <code>$user_name</code>.</p>
	
			</section>
			
		</td>

	</tr>

</table>
