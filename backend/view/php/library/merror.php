<?php MLoad::template_application('_template/toolbar_php'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_error404">
					<li class="MSideBarListItem MCursorPointer">
						<span>error_404</span>
					</li>
				</a>
				
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MError</h1>
			<span class="MNoteG">MError is loaded by default.</span>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_error404">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'error_404():void';
					$data['content'] = 'This function will send a 404 header to the browser as well as serve the <code>APPLICATION_ERROR_404_CONTROLLER</code> configured within the <code>config.php</code> file.</p><p>Other frameworks serve a static HTML page as a 404 page, however, serving a controller rather than a static page is useful when you would like to do more than just display an error.
					
For example, a 404 error controller allows you to display dynamic information such as a the name of user getting the error or a list of breadcrumbs based on the URL. Further functionality can be added to the 404 controller before serving the view. For example loggin the error URL in a database for future reference.';
					MLoad::template_application('ui/library_function', $data);
					?>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
