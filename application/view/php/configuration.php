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
				
				<p>Mogul MVC can load css, js, and php libraries every time the framework runs. CSS and JS loaded with autoload will also be automatically minified when switching an application from development to production mode.</p>
				
				<p class="MTextBold">Autoload can load library files from 8 locations.</p>
				
				<ul>
					<li>The framework's CSS folder.</li>
					<li>The application's CSS folder.</li>
					<li>External CSS.</li>
					<li>The framework's CSS folder.</li>
					<li>The application's JS folder.</li>
					<li>External JS.</li>
					<li>The framework's PHP folder.</li>
					<li>The application's PHP folder.</li>
				</ul>
				
				<p>Autoloaded CSS will appear in the head by default. Autoloaded JS will appear in the foot by default.</p>
				
				<p>To autoload a library open the autoload.php file and add the location of the file inside the appropriate array. Base location of the files comes from the <a href="#section_config">config.php</a> file.</p>
				
				<br />
				<br />
	
			</section>
			
			<section id="section_config">
	
				<h2>Config - config.php</h2>
				<hr />
				
				
	
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
