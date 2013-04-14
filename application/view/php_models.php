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
				
				<a href="#section_create">
					<li class="MSideBarListItem MCursorPointer">
						<span>Types of Models</span>
					</li>
				</a>
				
				<a href="#section_classes">
					<li class="MSideBarListItem MCursorPointer">
						<span>Create</span>
					</li>
				</a>
				
			</ul>
		</td>

		<td class="MWidthFull MPadding">

			<h1 class="MTextRight">PHP Controllers</h1>
			
			<section id="section_about">
	
				<h2>About Controllers</h2>
				<hr />
				
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
			
			<section id="section_classes">
	
				<h2>Classes</h2>
				<hr />
	
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
	
			</section>
			
			<section id="section_functions">
	
				<h2>Functions</h2>
				<hr />
				
				<?php for($i = 0; $i < 10; $i++):?>
					<br />
				<?php endfor;?>
	
			</section>
			
		</td>

	</tr>

</table>
