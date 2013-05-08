<?php MLoad::template_application('template/toolbar_general'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_backend">
					<li class="MSideBarListItem MCursorPointer MCenter">
						<span>----- Backend -----</span>
					</li>
				</a>
				
				<a href="#section_backend_cache">
					<li class="MSideBarListItem MCursorPointer">
						<span>Cache - cache</span>
					</li>
				</a>
				
				<a href="#section_backend_command">
					<li class="MSideBarListItem MCursorPointer">
						<span>Command - command</span>
					</li>
				</a>
				
				<a href="#section_backend_config">
					<li class="MSideBarListItem MCursorPointer">
						<span>Configuration - config</span>
					</li>
				</a>
				
				<a href="#section_backend_controller">
					<li class="MSideBarListItem MCursorPointer">
						<span>Controller - controller</span>
					</li>
				</a>
				
				<a href="#section_backend_lib">
					<li class="MSideBarListItem MCursorPointer">
						<span>Libraries - lib</span>
					</li>
				</a>
				
				<a href="#section_backend_model">
					<li class="MSideBarListItem MCursorPointer">
						<span>Model - model</span>
					</li>
				</a>
				
				<a href="#section_backend_view">
					<li class="MSideBarListItem MCursorPointer">
						<span>View - view</span>
					</li>
				</a>
				
				<a href="#section_frontend">
					<li class="MSideBarListItem MCursorPointer MCenter">
						<span>----- Frontend -----</span>
					</li>
				</a>
				
				<a href="#section_frontend_cache">
					<li class="MSideBarListItem MCursorPointer">
						<span>Cache - cache</span>
					</li>
				</a>
				
				<a href="#section_frontend_css">
					<li class="MSideBarListItem MCursorPointer">
						<span>CSS - css</span>
					</li>
				</a>
				
				<a href="#section_frontend_img">
					<li class="MSideBarListItem MCursorPointer">
						<span>Images - img</span>
					</li>
				</a>
				
				<a href="#section_frontend_js">
					<li class="MSideBarListItem MCursorPointer">
						<span>JavaScript - js</span>
					</li>
				</a>
				
				<a href="#section_frontend_misc">
					<li class="MSideBarListItem MCursorPointer">
						<span>Miscellaneous - misc</span>
					</li>
				</a>
				
				<a href="#section_frontend_upload">
					<li class="MSideBarListItem MCursorPointer">
						<span>Upload - upload</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>Folders</h1>
			
			<p>Mogul MVC is organized between two different directories. The <span class="MTextBold">backend</span> directory for all your PHP code, and the <span class="MTextBold">frontend</span> directory for CSS, JavaScript, images, and any other public static files.</p>
			
			<p>Within the backend and frontend directories you will find a directory called <span class="MTextBold">framework</span>. Unless you know what you're doing you should not alter any content within this folder.</p>
			
			<p>Instead we will be exploring the other directories in the backend and frontend folders. We will start with the backend directory.</p>

			<div id="section_backend">
			
				<h1>Backend</h1>
				
				<p>The backend directory is organized as follows.</p>
				
				<pre><code>/cache/
	/command/
	/config/
	/controller/
		/action/
		/api/
	/framework/ &#8592; Don't alter anything in here
	/lib/
		/core/
		/vendor/
	/model/
		/vo/
	/view/
		/template/</code></pre>
			
				<section id="section_backend_cache">
		
					<h2>Backend Cache - cache</h2>
					<hr />
					
					<p>Nothing should be placed in this folder. It is a folder used by Mogul MVC to store cached HTML pages when using <a href="/php/library/mcache">MCache</a>.</p>
		
				</section>
				
				<section id="section_backend_command">
		
					<h2>Backend Command - command</h2>
					<hr />
					
					<p>This directory is for storing CRON jobs as well as commands for building and migrating databases. Any PHP command you want to run from the command line goes here.</p>
		
				</section>
				
				<section id="section_backend_config">
		
					<h2>Backend Configuration - config</h2>
					<hr />
					
					<p>
						Used to store configuration files used in the running of Mogul MVC.
						<br />
						See <a href="/php/configuration">PHP Configuration</a> for more detail about how to use these files.
					</p>
		
				</section>
				
				<section id="section_backend_controller">
		
					<h2>Backend Controller - controller</h2>
					<hr />
					
					<p>The controller folder is where you put all your controllers. There are also two sub type of controller listed below.<br /> See <a href="/php/controllers">PHP Controllers</a> for more detail about how to create controllers as well as actions and apis.</p>
					
					<div class="indent">
						
						<h3>Action - action</h3>
						<p>Your form and AJAX actions go in this folder.</p>
						
						<h3>API - api</h3>
						<p>Your APIs go in this folder.</p>
					
					</div>
		
				</section>
				
				<section id="section_backend_lib">
		
					<h2>Backend Libraries - lib</h2>
					<hr />
					
					<p>Mogul MVC allows for 3 different types of libraries, listed below.<br />
						Only libraries that include PHP or use PHP variables should be added to the lib folder.<br />
						Mogul MVC looks first in the public folder to find a CSS and JS library, then the cache folder, and finally the lib folder. If it find it in the lib folder it will compile it and place it in the cache folder.  
					</p>
		
					<div class="indent">
						
						<h3>Vendor - vendor</h3>
						<p>Vendor PHP libraries go here.</p>
						
						<h3>Core - core</h3>
						<p>Core PHP libraries go here.</p>
						
					</div>
						
				</section>
				
				<section id="section_backend_model">
		
					<h2>Backend Model - model</h2>
					<hr />
					
					<p>Models are used to store function for quick database access. Mogul MVC offers two types of models, but both types go within this folder. Model files are stored in here.<br />To learn to create and use models see <a href="/php/models">PHP Models</a>.</p>
						
					<div class="indent">
						
						<h3>VO - vo</h3>
						<p>If you want to use value objects with your models you can store vos here.<br />
							Value objects allow for easier creation of database objects with certain values preset such as created and updated.<br />
							To learn to create and use vos see <a href="/php/models">PHP Models</a>.</p>
					
					</div>
		
				</section>
				
				<section id="section_backend_view">
					
					<h2>Backend View - view</h2>
					<hr />
					
					<p>Views are used to render PHP variables out to an HTML page.<br />
						To learn to create and use views see <a href="/php/views">PHP Views</a>.</p>
					
					<div class="indent">
					
						<h3>Template - template</h3>
						<p>Templates are reusable UI elements that can be passed data and used in conjunction with views.<br />
							To learn to create and use templates see <a href="/php/views">PHP Views</a>.</p>
						</p>
					
					</div>
		
				</section>
				
			</div><!-- section_backend -->
			
			<div id="section_frontend">
				
				<h1>Frontend</h1>
				
				<p>Mogul MVC's frontend directory is loosely based on the <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a> project.</p>
				
				<p>The frontend application directory is organized as follows.</p>
				
				<pre><code>/application/
	/cache/
	/css/
		/core/
		/vendor/
	/framework/ &#8592; Don't alter anything in here
	/img/
	/js/
		/core/
		/vendor/
	/misc/
	/upload/
		/.htaccess</code></pre>
				
				<section id="section_frontend_cache">
					
					<h2>Frontend Cache - cache</h2>
					<hr />
					
					<p>Nothing should be placed in this folder. It is a folder used by Mogul MVC to store minified CSS and JavaScript when in production mode.</p>
					
				</section>
				
				<section id="section_frontend_css">
					
					<h2>Frontend CSS - css</h2>
					<hr />
					
					<p>The frontend css directory is divided into two folder, just like the backend lib and frontend js directories. These folders are core and vendor.</p>
					
					<div class="indent">
						
						<h3>Vendor - vendor</h3>
						<p>A place to put css files not written by you. For example, Twitter Bootstrap or Flat UI would be placed here as they are provided by third party vendors.</p>
						
						<h3>Core - core</h3>
						<p>A place to put css files that are written by you. The css files that are needed for your site and were not provided by third party vendors.</p>
					
					</div>
					
				</section>
				
				<section id="section_frontend_img">
					
					<h2>Frontend Images - img</h2>
					<hr />
					
					<p>This is where you put all images relating to your project.</p>
					
				</section>
				
				<section id="section_frontend_js">
					
					<h2>Frontend JavaScript - js</h2>
					<hr />
					
					<p>The frontend js directory is divided into two folder, just like the backend lib and frontend css directories. These folders are core and vendor.</p>
					
					<div class="indent">
						
						<h3>Vendor - vendor</h3>
						<p>A place to put js files not written by you. For example, Twitter Boostrap or jQuery Mobile would be placed here as they are provided by third party vendors. jQuery and jQuery UI are provided by the core framework and only should be placed here if you need to use a different version.</p>
						
						<h3>Core - core</h3>
						<p>A place to put js files that are written by you. The js files that are needed for your site and were not provided by third party vendors.</p>
					
					</div>
					
				</section>
				
				<section id="section_frontend_misc">
					
					<h2>Frontend Miscellaneous - misc</h2>
					<hr />
					
					<p>A place to put any file that does not fall into other categories. For example, videos, PDFs, or zip files.</p>
					
				</section>
				
				<section id="section_frontend_upload">
					
					<h2>Frontend Upload - upload</h2>
					<hr />
					
					<p>This is where uploaded files should be uploaded to. This directory contains a .htaccess file which disallows the execution of web scripts. This means that if a user uploads a PHP file then tries to access it the script will be served back as a file rather than be executed as a script.</p>
					
				</section>
				
			</div><!-- section_frontend -->
			
		</td>

	</tr>

</table>
