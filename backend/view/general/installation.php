<?php MLoad::template_application('_template/toolbar_general'); ?>

<div class="MContentSpacer"></div>

<div class="MContent800">
	
	<h1>Installation</h1>
	
	<section>
		
		<h2>Requirements</h2>
		<hr />
		
		<p>MogulPHP has very few requirements and will work on most shared hosted environments.</p>

		<div class="indent">
		
			<h3>Web Server</h3>
			<p>Any web server that supports PHP. MogulPHP has been tested on Apache, NGINX and HipHop for PHP. Apache is prefered.<br />
				MogulPHP also requires a way to rewrite the path. In Apache this is provided by mod_rewrite.
			</p>
	
			<h3>PHP Version</h3>
			<p>MogulPHP requires PHP 5.3.</p>
		
			<h3>Recommendations</h3>
			<p>Apache 2 running on a Linux system.</p>
			<p>Apache mod_rewrite extension.</p>
			<p>PHP 5.3</p>
		
		</div>
	
	</section>
	
	<section>
		
		<h2>How to Install</h2>
		<hr />
		
		<p>To install and start using MogulPHP you need to first get the source code. To download the source code click the "Download" button on the home page.</p>
	
		<p>After you get the source code you will notice there are 2 directories in the root directory as well as an .bowerrc, .htaccess, bower.json, and composer.json file. The two directories are backend and frontend. We will discuss the .htaccess file is configured to make Apache work with MogulPHP's organizational system. The .bowerrc and bower.json files are for frontend <a href="http://bower.io/">Bower</a> package managment. The composer.json file is for backend <a href="http://getcomposer.org/">Composer</a> package managment.</p>
	
		<pre><code>/backend/
/frontend/
/.bowerrc
/.htaccess
/bower.json
/composer.json</code></pre>
	
		<p>Move the backend and frontend directories onto your Apache server and point your document root to the frontend directory. Keeping the backend directory out of the document root keeps your PHP code safe as it is never in a public facing server.</p>
	
			<pre><code>/backend/
/frontend/ &#8592; This becomes the document root
/.bowerrc
/.htaccess
/bower.json
/composer.json</code></pre>
	
		<p>So, what does the .htaccess file do? To understand that I first have to tell you that you can also point the document root to the directory containing both the backend and frontend directories. This would make the backend and frontend directories accessible to the outside world and is generally a bad practice. If you do this the .htaccess file there is to redirect the incoming signal from Apache to the frontend directory which thus runs the application.</p>
		
	</section>
	
</div>

<div class="MContentSpacer"></div>
