<?php MLoad::template_application('template/toolbar_general'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_cache">
					<li class="MSideBarListItem MCursorPointer">
						<span>Cache - cache</span>
					</li>
				</a>
				
				<a href="#section_command">
					<li class="MSideBarListItem MCursorPointer">
						<span>Command - command</span>
					</li>
				</a>
				
				<a href="#section_config">
					<li class="MSideBarListItem MCursorPointer">
						<span>Configuration - config</span>
					</li>
				</a>
				
				<a href="#section_controller">
					<li class="MSideBarListItem MCursorPointer">
						<span>Controller - controller</span>
					</li>
				</a>
				
				<a href="#section_lib">
					<li class="MSideBarListItem MCursorPointer">
						<span>Libraries - lib</span>
					</li>
				</a>
				
				<a href="#section_model">
					<li class="MSideBarListItem MCursorPointer">
						<span>Model - model</span>
					</li>
				</a>
				
				<a href="#section_public">
					<li class="MSideBarListItem MCursorPointer">
						<span>Public - public</span>
					</li>
				</a>
				
				<a href="#section_view">
					<li class="MSideBarListItem MCursorPointer">
						<span>View - view</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>Folders</h1>
			
			<p>The following will only cover the directories within your application directoy as the directories in the system directory should not be touched.</p>
			
			<section id="section_cache">
	
				<h2>Cache - cache</h2>
				<hr />
				<br />
				
				<p>Nothing should be placed in this folder. It is a folder used by Mogul MVC to store minified CSS and JavaScript as well as cached HTML pages when using <a href="/php/library/mcache">MCache</a>.</p>
	
			</section>
			
			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
			
			<section id="section_command">
	
				<h2>Command - command</h2>
				<hr />
				<br />
				
				<p>This directory is for storing CRON jobs as well as commands for building and migrating databases. Any PHP command you want to run from the command line goes here.</p>
	
			</section>
			
			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
			
			<section id="section_config">
	
				<h2>Configuration - config</h2>
				<hr />
				<br />
				
				<p>
					Used to store configuration files used in the running of Mogul MVC.
					<br />
					See <a href="/php/configuration">PHP Configuration</a> for more detail about how to use these files.
				</p>
	
			</section>
			
			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
			
			<section id="section_controller">
	
				<h2>Controller - controller</h2>
				<hr />
				<br />
				
				<p>The controller folder is where you put all your controllers. There are also two sub type of controller listed below.<br />
					See <a href="/php/controllers">PHP Controllers</a> for more detail about how to create controllers as well as actions and apis.</p>
				
				<h3>Action - action</h3>
				<p>Your form and AJAX actions go in this folder.</p>
				
				<h3>API - api</h3>
				<p>Your APIs go in this folder.</p>
	
			</section>
			
			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
			
			<section id="section_lib">
	
				<h2>Libraries - lib</h2>
				<p>Mogul MVC allows for 3 different types of libraries, listed below.<br />
					Only libraries that include PHP or use PHP variables should be added to the lib folder.<br />
					Mogul MVC looks first in the public folder to find a CSS and JS library, then the cache folder, and finally the lib folder. If it find it in the lib folder it will compile it and place it in the cache folder.  
				</p>
	
					<h3>CSS - css</h3>
					<p>The css folder is where you would put your dynamically created CSS files.</p>
					
					<h4>Third Party - 3rdparty</h4>
					<p>Dynamically created third party libraries.</p>
					
					<h4>Core - core</h4>
					<p>Dynamically created core libraries.</p>
					
					<h3>JavaScript - js</h3>
					<p>The js folder is where you would put your dynamically created JavaScript files.</p>
				
					<h4>Third Party - 3rdparty</h4>
					<p>Dynamically created third party libraries.</p>
					
					<h4>Core - core</h4>
					<p>Dynamically created core libraries.</p>
						
					<h3>PHP - php</h3>
					<p>As PHP cannot be compiled all your PHP libraries go in this folder.</p>
					<h4>Third Party - 3rdparty</h4>
					<p>Third party PHP libraries go here.</p>
					<h4>Core - core</h4>
					<p>Core PHP libraries go here.</p>
	
			</section>
			
			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
			
			<section id="section_model">
	
				<h2>Model - model</h2>
				<hr />
				<br />
				
				<p>Model files are stored in here. To learn to create a model see<a href="/php/models">PHP Models</a>.</p>
				
				<h3>VO - vo</h3>
				<p>If you want to use value objects with your models you can store vos here.<br />
					vos allow for easier creation of database objects with certain values preset.
				</p>
	
			</section>
			
			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
			
			<section id="section_public">
	
				<h2>Public</h2>
				<hr />
				<br />
	
				<h3>CSS - css</h3>
					<h4>Third Party - 3rdparty</h4>
					<h4>Core - core</h4>
				
				<h3>Images - img</h3>
				
				<h3>JavaScript - js</h3>
					<h4>Third Party - 3rdparty</h4>
					<h4>Core - core</h4>
				
				<h3>Miscellaneous - misc</h3>
				
				<h3>Upload - upload</h3>
	
			</section>
			
			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
			
			<section id="section_view">
				
				<h2>View - view</h2>
				<hr />
				<br />
				
				<h3>Template - template</h3>
	
			</section>
			
			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
			
		</td>

	</tr>

</table>
