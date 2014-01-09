<?php MLoad::template_application('_template/toolbar_php'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_types">
					<li class="MSideBarListItem MCursorPointer">
						<span>Types of Controllers</span>
					</li>
				</a>
				
				<a href="#section_create">
					<li class="MSideBarListItem MCursorPointer">
						<span>Create a Controller</span>
					</li>
				</a>
				
				<a href="#section_invoke">
					<li class="MSideBarListItem MCursorPointer">
						<span>How Controllers are Invoked</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">

			<h1>PHP Controllers</h1>
			
			<p>Controllers are the first point in your application that is called during an incoming request.</p>
				
			<section id="section_types">
	
				<h2>Types of Controllers</h2>
				<hr />
				
				<p>MogulMVC has 3 different types of controllers. Action, API, and default.</p>
				
				<div class="indent">
				
					<h3>Normal Controllers</h3>
					
					<p>Lets start with the normal controllers. They are files located in the backend controller directory which are named after and contain a class matching the first segment of a URL being requested. For example, if site.com/users/profile was being requested a controller called Users.php would be invoked. This is untrue of Action and API controllers.</p>
					
					<h3>Actions and APIs</h3>
					
					<p>Action controllers work differently than normal controllers. Inside the config/config.php file there is a setting called <code>APPLICATION_ACTION_URL</code>. If the first segment of the URL is this string an Action controller will be served. Action controllers aren't classes. They are script which do one action and never serve up an HTML page. They were designed to be where AJAX and form actions are sent. Actions should always accept their variables as <code>$_POST</code> variables.</p>
					
					<p>API controllers work similarly to Action controllers. Their routing is controlled by the <code>APPLICATION_API_URL</code> constant defined in config/config.php. APIs are also not classes and generally will output XML or JSON data. They are for allowing AJAX calls to get new data from a databased. APIs should always accept their variables as <code>$_GET</code> variables.</p>
		
				</div>
	
			</section>
	
			<section id="section_create">
	
				<h2>Create</h2>
				<hr />
				
				<p>Controllers are classes named the same as the first segment of the URL being served. The second segment of the request is served by a function within the class. If there is no second segment the request is served by a function called index within the controller class.</p>
				
				<p>So assume we want to make a controller to serve a request for a page at site.com/blog/top50. We would first make a controller called Blog.php containing a class of Blog.</p>
				
				<pre><code><?php echo htmlspecialchars('Class Blog{
				
}'); ?></code></pre>
				
				<p>It's always a good idea to create a index function in case the second segment is not filled.</p>
				
				<pre><code><?php echo htmlspecialchars('Class Blog{
				
	function index(){

	}

}'); ?></code></pre>
				
				<p>Next we create a function called top50.</p>
				
				<pre><code><?php echo htmlspecialchars('Class Blog{
				
	function index(){

	}

	function top50(){

	}

}'); ?></code></pre>
				
				<p>Any code inside the top50 function will be run when site.com/blog/top50 is requested.</p>
	
			</section>
			
			<section id="section_invoke">
	
				<h2>How Controllers are Invoked</h2>
				<hr />
				
				<p>Because MogulMVC has 3 different types of controllers their are 3 different ways controllers are invoked. We will first focus on normal controllers, then discuss actions and apis together as they are invoked very similarly.</p>
				
				<div class="indent">
		
					<h3>Normal Controllers</h3>

					<p>Assume you are requesting a page at site.com/user/profile. This page would be served by the User.php controller.  Notice that the first u in Users.php is capitalized. This is required because this file contains a class called Users and a class should always have a capital first letter. The second segment of the URL would be serviced by adding a function inside the class called profile. Notice that this function is not capitalized.</p>
					
					<p>If the first segment of the URL is empty the APPLICATION_DEFAULT_CONTROLLER will be served. This file is configured in config/condig.php.</p>
					
					<p>If the second segment of the URL is empty the default function will be index.</p>
					
					<p>If the controller, function, or route to fulfill the requested URL exist a 404 page will be served.</p>				
					
					<h3>Actions and APIs</h3>
					
					<p>Actions and API controllers are served differently as discussed above.</p>

					<p>Actions are served based on the APPLICATION_ACTION_URL constant declared in the config/config.php file and APIs are served based on the APPLICATION_API_URL.</p>
					
					<p>Because Action and API controllers are served in a very similar manner we will be discussing them together.</p>
					
					<p>Assume the URL site.com/action/post_update were being requested. You might think this would be served by a controller called Action.php, but it wouldn't be. By default the APPLICATION_ACTION_URL is “action” and so this request would be a request for an action controller called post_update.php.</p>
					
					<p>This is similar if you are requesting site.com/api/get_posts. Because  APPLICATION_API_URL is “api” by default this would serve an API controller called get_posts.php.</p>
					
					<p>If you were to change the APPLICATION_ACTION_URL or APPLICATION_API_URL to a different string then site.com/action/post_update and site.com/api/get_posts would be served by controllers called Action and Api respecivly.</p>
				
				</div>
				
			</section>
			
		</td>

	</tr>

</table>
