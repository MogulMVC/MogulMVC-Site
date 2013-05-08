<?php MLoad::template_application('template/toolbar_general'); ?>

<div class="MContentSpacer"></div>

<div class="MContent800">
	
	<h1>Installation</h1>
	
	<section>
		
		<h2>Requirements</h2>
		<hr />
		
		<div class="indent">
		
			<h3>Web Server</h3>
			<p>Any web server that supports PHP. Mogul MVC has been tested on Apache, NGINX and HipHop for PHP. Apache is prefered.<br />
				Mogul MVC also requires a way to rewrite the path. In Apache this is provided by mod_rewrite.
			</p>
	
			<h3>PHP Version</h3>
			<p>Mogul MVC requires PHP 5.3.</p>
		
			<h3>Recommendations</h3>
			<p>Apache 2 running on a Linux system.</p>
			<p>Apache mod_rewrite extension.</p>
			<p>PHP 5.3</p>
		
		</div>
	
	</section>
	
	<section>
		
		<h2>How to Install</h2>
		<hr />
		
		<p>To install and start using Mogul MVC you need to first get the source code. As Mogul MVC is not open source yet I expect you to talk to me about getting the source code. I am willing to give it to anyone interested in the project.</p>
	
		<p>After you get the source code you will notice there are 2 folders in the root directory as well as an .htaccess file. The two folders are backend and frontend. We will discuss the .htaccess file later but for now know that it is a way to make Apache work with Mogul MVC's organizational system.</p>
	
		<pre><code>/backend/
/frontend/
/.htaccess</code></pre>
	
		<p>Move the backend and frontend folders onto your apache server and point your document root to the frontend directory. Keeping the backend folder out of the document root keeps your PHP code safe as it is never in a public facing server.</p>
	
			<pre><code>/backend/
/frontend/ &#8592; This becomes the document root
/.htaccess</code></pre>
	
		<p>So, what does the .htaccess file do? To understand that I first have to tell you that you can also point the document root to the folder containing both the backend and frontend folders. This would make the backend and frontend folders accessible to the outside world and is generally a bad practice. If you do this the .htaccess file there is to redirect the incoming signal from Apache to the frontend folder which thus runs the application.</p>
		
	</section>
	
</div>

<div class="MContentSpacer"></div>
