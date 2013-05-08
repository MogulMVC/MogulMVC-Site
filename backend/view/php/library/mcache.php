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
					$data['added'] = '1305';
					$data['title'] = 'cache($minutes:Number):void';
					$data['content'] = nl2br('This function should be called at the top of a function withing a controller you would like to cache. The only parameter needed is the amount of minutes you want Mogul MVC to serve a cache file before recaching the page.
					
For example to cache a page for 15 minutes you would add this within the function representing the page you want to cache.
<pre><code>MCache::cache(15);</code></pre>	
Pages are chached into the cache folder within your application directory and are named using a md5 hashed concatinated string of all $_COOKIE, $_FILES, $_GET, $_POST, $_SESSION, and requested URL variables. This means that a cached pages receiving new $_GET, $_POST or any of the other superglobal variable will be recached rather than serve an existing cached page. This is useful for creating cached pages for different logged in users.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
				
			</div>
			
		</td>

	</tr>

</table>
