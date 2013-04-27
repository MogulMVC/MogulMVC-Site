<?php MLoad::template_application('template/toolbar_php'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_">
					<li class="MSideBarListItem MCursorPointer">
						<span>cache</span>
					</li>
				</a>
				
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MCache</h1>
			<span class="MNoteY">Loaded from</span>
			<pre><code>core/util/MCache</code></pre>
			
			<p>The MCache class manages the creation, storing, and retrieval of pages created by the framework. Specifying a page to cache happens at the controller level. The resulting cached HTML page is given a time to live, after which a new page is created and re-cached. Until the page is recreated the cached page is served. This can increase the speed of pages being loaded, while decreasing the timeliness of information being presented to the use. For some pages this trade-off is acceptable and preferable to increasing processing power and memory of the server running the application.</p>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_cache">
					<?php 
					$data['title'] = 'cache';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
