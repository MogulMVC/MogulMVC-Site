<?php MLoad::template_application('template/toolbar_php'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_about">
					<li class="MSideBarListItem MCursorPointer">
						<span>About Controllers</span>
					</li>
				</a>
				
				<a href="#section_create">
					<li class="MSideBarListItem MCursorPointer">
						<span>Types of Controllers</span>
					</li>
				</a>
				
				<a href="#section_create">
					<li class="MSideBarListItem MCursorPointer">
						<span>Create a Controller</span>
					</li>
				</a>
				
				<a href="#section_load">
					<li class="MSideBarListItem MCursorPointer">
						<span>How Controllers are Loaded</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">

			<p class="MIntent">NOT COMPLETE</p>

			<section id="section_about">
				
				<h1>PHP Controllers</h1>
				
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
	
			</section>
	
			<section id="section_create">
	
				<h2>Create</h2>
				<hr />
	
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
	
			</section>
			
			<section id="section_load">
	
				<h2>How Controllers are Loaded</h2>
				<hr />
	
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
				
				<h3>Classes</h3>
				
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
				
				<h3>Functions</h3>
				
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
	
			</section>
			
		</td>

	</tr>

</table>