<?php MLoad::template_application('template/toolbar_js'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_show">
					<li class="MSideBarListItem MCursorPointer">
						<span>show</span>
					</li>
				</a>
				
				<a href="#section_showInside">
					<li class="MSideBarListItem MCursorPointer">
						<span>showInside</span>
					</li>
				</a>
				
				<a href="#section_hide">
					<li class="MSideBarListItem MCursorPointer">
						<span>hide</span>
					</li>
				</a>
				
				<a href="#section_hideInside">
					<li class="MSideBarListItem MCursorPointer">
						<span>hideInside</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MSearchable</h1>
			
			<p>All MSearchable functions work on DOM elements with the attribute of <code>data-searchable="true"</code>.</p>
			
			<h2>Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_show">
					<?php 
					$data['title'] = 'show(search:String):void';
					$data['content'] = 'This accepts a string to search for and will only show data-searchable elemments which contain the string being searched for. All other data-searchable elements will be hidden.';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_showInside">
					<?php 
					$data['title'] = 'showInside(search:String, search:String):void';
					$data['content'] = 'This accepts 2 parameters. The first is a string to search for. The second is the id of a container to search within. Unlike the show function, which searches the entire DOM, this function will search only within a specific element. It will show all data-searchable elements within the search element containing the search string and hide all others.';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_hide">
					<?php 
					$data['title'] = 'hide(search:String):void';
					$data['content'] = 'This accepts a string to search for and will hide all data-searchable elemments which contain the string being searched for. All data-searchable elements not containing the search string will be shown.';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
				<section id="section_hideInside">
					<?php 
					$data['title'] = 'hideInside(search:String, search:String):void';
					$data['content'] = 'This accepts 2 parameters. The first is a string to search for. The second is the id of a  container to search within. Unlike the hide function, which searches the entire DOM, this function will search only within a specific element. It will hide all data-searchable elements within the search element containing the search string and show all others.';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
