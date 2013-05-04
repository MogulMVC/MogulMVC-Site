<?php MLoad::template_application('template/toolbar_php'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_about">
					<li class="MSideBarListItem MCursorPointer">
						<span>About Models</span>
					</li>
				</a>
				
				<a href="#section_types">
					<li class="MSideBarListItem MCursorPointer">
						<span>Types of Models</span>
					</li>
				</a>
				
				<a href="#section_create">
					<li class="MSideBarListItem MCursorPointer">
						<span>Create a Model</span>
					</li>
				</a>
				
				<a href="#section_load">
					<li class="MSideBarListItem MCursorPointer">
						<span>Load a Model</span>
					</li>
				</a>

				<a href="#section_use">
					<li class="MSideBarListItem MCursorPointer">
						<span>Use a Model</span>
					</li>
				</a>
				
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<p class="MIntent">NOT COMPLETE</p>
			
			<section id="section_about">
				
				<h1>PHP Models</h1>
				
				<p>Models provide a means of interacting with a database.</p>
	
			</section>
	
			<section id="section_types">
	
				<h2>Types of Models</h2>
				<hr />
	
				<p>Mogul MVC includes 2 different types of models.</p>

				<p>MPDO models are the basic model type. They provide no abstraction and allows maximum control over you CRUD functions. It is also the faster of the two models.</p>

				<p>MactiveRecord models are the advanced model type. They provide a robust abstraction layer for your model. These models are forks of the PHP Active Record project. They have been integrated with the Mogul MVC database configuration.</p>
	
			</section>
			
			<section id="section_create">
	
				<h2>Create a Model</h2>
				<hr />
	
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
	
			</section>
			
			<section id="section_load">
	
				<h2>Load a Model</h2>
				<hr />
	
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
	
			</section>
	
			<section id="section_use">
	
				<h2>Use a Model</h2>
				<hr />
	
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
	
			</section>

			
		</td>

	</tr>

</table>
