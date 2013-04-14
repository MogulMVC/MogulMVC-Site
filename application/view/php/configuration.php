<?php MLoad::template_application('template/toolbar_php'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_about">
					<li class="MSideBarListItem MCursorPointer">
						<span>About Configuration</span>
					</li>
				</a>
				
				<a href="#section_autoload">
					<li class="MSideBarListItem MCursorPointer">
						<span>Autoload - autoload.php</span>
					</li>
				</a>
				
				<a href="#section_config">
					<li class="MSideBarListItem MCursorPointer">
						<span>Config - config.php</span>
					</li>
				</a>
				
				<a href="#section_constants">
					<li class="MSideBarListItem MCursorPointer">
						<span>Constants - constants.php</span>
					</li>
				</a>
				
				<a href="#section_database">
					<li class="MSideBarListItem MCursorPointer">
						<span>Database - database.php</span>
					</li>
				</a>
				
				<a href="#section_routes">
					<li class="MSideBarListItem MCursorPointer">
						<span>Routes - routes.php</span>
					</li>
				</a>
				
				<a href="#section_sessions">
					<li class="MSideBarListItem MCursorPointer">
						<span>Sessions - session.php</span>
					</li>
				</a>
				
				<a href="#section_variables">
					<li class="MSideBarListItem MCursorPointer">
						<span>Variables - variables.php</span>
					</li>
				</a>

			</ul>
		</td>

		<td class="MWidthFull MPadding">
	
			<h1>PHP Configuration</h1>

			<section id="section_about">
	
				<h2>About Configuration</h2>
				<hr />
				
				<p>Mogul MVC is built with certain design and organizational patterns in mind. These design and organizational patterns make sense to use and so we make them the default configuration.</p>
				<p>However, one size fits all never looks good. Because of that we made our configuration section as robust as possibly while also remaining as organized as possible.</p>
				<p>Below are the every configuration file available in the Mogul MVC application/config folder.</p>
				<p>These configuration file affect all folder naming and organization in the application as well as routing, database connectivity, and session management.</p>
	
				<br />
				<br />
	
			</section>

			<section id="section_autoload">
	
				<h2>Autoload - autoload.php</h2>
				<hr />
				
				<p>Mogul MVC can load css, js, and php libraries every time the framework runs.
					<br />
				CSS and JS loaded with autoload will also be automatically minified when switching an application from development to production mode.</p>
				
				<p class="MTextBold">Autoload can load library files from 8 locations.</p>
				
				<ul class="MWell">
					
					<p class="MNoteY right">Autoloaded CSS will appear in the head by default.<br />Autoloaded JS will appear in the foot by default.</p>
					<p class="MNoteY right" style="margin-right:20px;">Precompiled CSS and JS files should be placed in the <span class="MTextBold">public/css/</span> and the <span class="MTextBold">public/js/</span> directories respectively.</p>
					<p class="MNoteY right" style="margin-right:20px;">CSS and JS needing to be dynamically compiled with PHP should be placed in the <span class="MTextBold">lib/css/</span> and <span class="MTextBold">lib/js/</span> directories respectively.</p>
					
					<li>-- The framework's CSS folder.</li>
					<li>-- The application's CSS folder.</li>
					<li>-- External CSS.</li>
					<li>-- The framework's CSS folder.</li>
					<li>-- The application's JS folder.</li>
					<li>-- External JS.</li>
					<li>-- The framework's PHP folder.</li>
					<li>-- The application's PHP folder.</li>
				</ul>
				
				<h3>Example</h3>
				
				<p>To autoload a library open the autoload.php file and add the location of the file inside the appropriate array. Files should be specified from the base directory of the type of library being loaded. Base directory of the files comes from <a href="#section_config">config.php</a>.</p>
				
				<p>A third party PHP library called <span class="MTextBold">SomeLibrary.php</span> would by default be placed in <span class="MTextBold">/application/lib/php/3rdparty/SomeLibrary.php</span> and be loaded as follows.</p>
				
				<pre><code>$GLOBALS['AUTOLOAD_PHP_APPLICATION'] = array('3rdparty/SomeLibrary');</code></pre>
				
				<p>As you can see file extensions are not needed as the framework determines the correct file extension. This is true for locally stored CSS and JS as well.</p>
				
				<p class="MTextRed MTextBold">IMPORTANT!</p>
				<p>Always name your CSS and JS library files with dashes instead of periods, otherwise Mogul MVC will error when loading your file.</p>
				<p>jquery.scrollTo.js should be jquery-scrollTo.js</p>
				
				<br />
				<br />
	
			</section>
			
			<section id="section_config">
	
				<h2>Config - config.php</h2>
				<hr />
				
				<p>The config.php file allows you to specify most organizational components of your application as well as select a default head, header, footer, foot, and controller.</p>
				
				<p>All configuration options are defined as constants.</p>
				
				<h3>Application Information</h3>
				<p>All Mogul MVC applications need a company, name, description, id, password, and version.</p>
				<p>These constants are used during the creation of pages and loading of assets such as images, CSS, and JS files.</p>
				<p>The password is needed when running commands from the CLI and web interface.</p>
				
				<h3>Environment</h3>
				<p>There are two environments Mogul MVC can be run in, <span class="MTextBold">development</span> and <span class="MTextBold">production</span>.</p>
				<p>When in development mode all errors will be displayed and all CSS and JS will be loaded from seperate files.</p>
				<p>When in production mode no errors will be displayed and Mogul MVC will automatically combine and minify all CSS and JS files loaded from the <a href="#section_autoload">autoload.php</a>.</p>
				
				<h3>Action and API</h3>
				<p>Action and API files are special controller files for reciving and broadcasting data. Mogul MVC needs a special URL keyword to invoke action and api requests as instead of looking for normal controllers.</p>
				
				<h3>Directories</h3>
				<p>Organiztion is key in Mogul MVC. Each file you create has a place to be put, but we allow you to rename and change these places. The config.php directories section is where you can change the default directories Mogul MVC uses to store and load your files.</p>
				
				<h3>Controllers</h3>
				<p>A default controller is the controller that runs at the root of your site.</p>
				<p>A 404 controller, as the name suggests, runs when an 404 error is thrown.</p>
				
				<h3>Templates</h3>
				<p>Templates define the default head, header, footer, and foot files to be used in an application. These file will automatically be included when rendering a <a href="/php/views">view</a>.</p>
				
				<br />
				<br />
	
			</section>
			
			<section id="section_constants">
	
				<h2>Constants - constants.php</h2>
				<hr />
				
				<p>Mogul MVC allows you to define constants to be used throughout the application at a very low level of the application run process. Constants are created shortly after the core libraries are in included but before the desired controller is instantiated.</p>

				<p>To create a constant open the constants file and add a constant as you normally would in PHP.</p>
	
				<br />
				<br />
	
			</section>
			
			<section id="section_database">
	
				<h2>Database - database.php</h2>
				<hr />
				
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
	
			</section>
			
			<section id="section_routes">
	
				<h2>Routes - routes.php</h2>
				<hr />
				
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
	
			</section>
			
			<section id="section_sessions">
	
				<h2>Sessions - session.php</h2>
				<hr />
				
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
	
			</section>
			
			<section id="section_variables">

				<h2>Variables - variables.php</h2>
				<hr />
				
				<p>Mogul MVC allows you to define global variables to be used throughout the application at a very low level of the application run process. Global variables are created shortly after the core libraries are in included but before the desired controller is instantiated.</p>

				<p>To create a global variable open the variable file and add a global variable as you normally would in PHP.</p>
	
				<br />
				<br />
	
			</section>
			
		</td>

	</tr>

</table>
