<?php 
$data['js_version'] = MURL::segment(3);
MLoad::template_application('_template/toolbar_php', $data);
?>

<?php MLoad::php_framework('core/util/MURL'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_protocol">
					<li class="MSideBarListItem MCursorPointer">
						<span>protocol</span>
					</li>
				</a>
				
				<a href="#section_subdomain">
					<li class="MSideBarListItem MCursorPointer">
						<span>subdomain</span>
					</li>
				</a>
				
				<a href="#section_domain">
					<li class="MSideBarListItem MCursorPointer">
						<span>domain</span>
					</li>
				</a>
				
				<a href="#section_base">
					<li class="MSideBarListItem MCursorPointer">
						<span>base</span>
					</li>
				</a>
				
				<a href="#section_current">
					<li class="MSideBarListItem MCursorPointer">
						<span>current</span>
					</li>
				</a>
				
				<a href="#section_segment">
					<li class="MSideBarListItem MCursorPointer">
						<span>segment</span>
					</li>
				</a>
				
				<a href="#section_curl">
					<li class="MSideBarListItem MCursorPointer">
						<span>curl</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MURL</h1>
			<span class="MNoteG">MURL is loaded by default.</span>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_protocol">
					<?php 
					$data['title'] = 'protocol():String';
					$data['content'] = nl2br('As expected protocol returns a string representation of the protcol being used.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><?php echo 'MURL::protocol(); <br />'; ?><?php echo var_dump(MURL::protocol()); ?></code></pre>
				</section>
				
				<section id="section_subdomain">
					<?php 
					$data['title'] = 'subdomain():String';
					$data['content'] = nl2br('The subdomain function return a string of the subdomain of the page being requested. If no subdomain is preset it will return an empty string.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><?php echo 'MURL::subdomain(); <br />'; ?><?php echo var_dump(MURL::subdomain()); ?></code></pre>
				</section>
				
				<section id="section_domain">
					<?php 
					$data['title'] = 'domain():String';
					$data['content'] = nl2br('The domain function returns the domain of the site plus the top level domain.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><?php echo 'MURL::domain(); <br />'; ?><?php echo var_dump(MURL::domain()); ?></code></pre>
				</section>
				
				<section id="section_canonical">
					<?php 
					$data['title'] = 'canonical():String';
					$data['content'] = nl2br('The canonical function returns the root location of the web site.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><?php echo 'MURL::canonical(); <br />'; ?><?php echo var_dump(MURL::canonical()); ?></code></pre>
				</section>
				
				<section id="section_current">
					<?php 
					$data['title'] = 'current():String';
					$data['content'] = nl2br('The current function returns the current url being viewed.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><?php echo 'MURL::current(); <br />'; ?><?php echo var_dump(MURL::current()); ?></code></pre>
				</section>
				
				<section id="section_segment">
					<?php 
					$data['title'] = 'segment($segment:int):String';
					$data['content'] = nl2br('The segment function returns parts of the URL devided along forward slashes. Just like arrays they are 0 based with the cannonical representing segment 0. However unlike arrays 0 is not a valid index. 

Any segment requested but not in existence will return an empty string.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><?php echo 'MURL::segment(1); <br />'; ?><?php echo var_dump(MURL::segment(1)); ?></code></pre>
					<pre><code><?php echo 'MURL::segment(2); <br />'; ?><?php echo var_dump(MURL::segment(2)); ?></code></pre>
					<pre><code><?php echo 'MURL::segment(3); <br />'; ?><?php echo var_dump(MURL::segment(3)); ?></code></pre>
					<pre><code><?php echo 'MURL::segment(4); <br />'; ?><?php echo var_dump(MURL::segment(4)); ?></code></pre>
				</section>
				
				<section id="section_curl">
					<?php 
					$data['title'] = 'curl($url:String):Mixed';
					$data['content'] = nl2br('The curl function mimics the command line curl function avalible on *nix systems. It will download and return any remote page.');
					MLoad::template_application('_ui/library_function', $data);
					?>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
