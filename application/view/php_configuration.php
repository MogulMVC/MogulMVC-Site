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
	
			<h1 class="MTextRight">PHP Configuration</h1>

			<section id="section_about">
	
				<h2>About Configuration</h2>
				<hr />
				
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
	
			</section>

			<section id="section_autoload">
	
				<h2>Autoload - autoload.php</h2>
				<hr />
				
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
	
			</section>
			
			<section id="section_config">
	
				<h2>Config - config.php</h2>
				<hr />
				
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
	
			</section>
			
			<section id="section_constants">
	
				<h2>Constants - constants.php</h2>
				<hr />
				
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
	
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
				
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
	
			</section>
			
		</td>

	</tr>

</table>
