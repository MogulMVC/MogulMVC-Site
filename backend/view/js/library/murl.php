<?php 
$data['php_version'] = 'murl';
MLoad::template_application('template/toolbar_js', $data);
?>

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
				
				<a href="#section_reset">
					<li class="MSideBarListItem MCursorPointer">
						<span>reset</span>
					</li>
				</a>
				
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MURL</h1>
			
			<h2>Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_protocol">
					<?php 
					$data['title'] = 'protocol():String';
					$data['content'] = nl2br('As expected protocol returns a string representation of the protcol being used.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><script>var protocol = MURL.protocol(); document.write('MURL.protocol(); <br />' + typeof protocol + ' ' + protocol);</script></code></pre>
				</section>
				
				<section id="section_subdomain">
					<?php 
					$data['title'] = 'subdomain():String';
					$data['content'] = nl2br('The subdomain function return a string of the subdomain of the page being requested. If no subdomain is preset it will return an empty string.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><script>var subdomain = MURL.subdomain(); document.write('MURL.subdomain(); <br />' + typeof subdomain + ' ' + subdomain);</script></code></pre>
				</section>
				
				<section id="section_domain">
					<?php 
					$data['title'] = 'domain():String';
					$data['content'] = nl2br('The domain function returns the domain of the site plus the top level domain.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><script>var domain = MURL.domain(); document.write('MURL.domain(); <br />' + typeof domain + ' ' + domain);</script></code></pre>
				</section>
				
				<section id="section_canonical">
					<?php 
					$data['title'] = 'canonical():String';
					$data['content'] = nl2br('The canonical function returns the root location of the web site.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><script>var canonical = MURL.canonical(); document.write('MURL.canonical(); <br />' + typeof canonical + ' ' + canonical);</script></code></pre>
				</section>
				
				<section id="section_current">
					<?php 
					$data['title'] = 'current():String';
					$data['content'] = nl2br('The current function returns the current url being viewed.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><script>var current = MURL.current(); document.write('MURL.current(); <br />' + typeof current + ' ' + current);</script></code></pre>
				</section>
				
				<section id="section_segment">
					<?php 
					$data['title'] = 'segment(segment:int):String';
					$data['content'] = nl2br('The segment function returns parts of the URL devided along forward slashes. Just like arrays they are 0 based with the cannonical representing segment 0. However unlike arrays 0 is not a valid index. 

Any segment requested but not in existence will return an empty string.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><script>var segment = MURL.segment(1); document.write('MURL.segment(1); <br />' + typeof protocol + ' ' + segment);</script></code></pre>
					<pre><code><script>var segment = MURL.segment(2); document.write('MURL.segment(2); <br />' + typeof protocol + ' ' + segment);</script></code></pre>
					<pre><code><script>var segment = MURL.segment(3); document.write('MURL.segment(3); <br />' + typeof protocol + ' ' + segment);</script></code></pre>
					<pre><code><script>var segment = MURL.segment(4); document.write('MURL.segment(4); <br />' + typeof protocol + ' ' + segment);</script></code></pre>
				</section>
				
				<section id="section_reset">
					<?php 
					$data['title'] = 'reset():void';
					$data['content'] = nl2br('The reset function reloads the current page first asking the user if they want to reload the page.');
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
							
			</div>
			
		</td>

	</tr>

</table>
