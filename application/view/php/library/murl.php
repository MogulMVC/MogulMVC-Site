<?php 
$data['js_version'] = 'murl';
MLoad::template_application('template/toolbar_php', $data);
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
			<span class="MNoteG">MURL is loaded by the system by default.</span>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_protocol">
					<?php 
					$data['title'] = 'protocol():String';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
					
					<pre><code><?php echo MURL::protocol(); ?></code></pre>
					
				</section>
				
				<section id="section_subdomain">
					<?php 
					$data['title'] = 'subdomain():String';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
					
					<pre><code><?php echo MURL::subdomain(); ?></code></pre>
					
				</section>
				
				<section id="section_domain">
					<?php 
					$data['title'] = 'domain():String';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
					
					<pre><code><?php echo MURL::domain(); ?></code></pre>
					
				</section>
				
				<section id="section_base">
					<?php 
					$data['title'] = 'base():String';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
					
					<pre><code><?php echo MURL::base(); ?></code></pre>
					
				</section>
				
				<section id="section_current">
					<?php 
					$data['title'] = 'current():String';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
					
					<pre><code><?php echo MURL::current(); ?></code></pre>
					
				</section>
				
				<section id="section_segment">
					<?php 
					$data['title'] = 'segment($segment:int):String';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
					
					<pre><code><?php echo MURL::segment(1); ?></code></pre>
					<pre><code><?php echo MURL::segment(2); ?></code></pre>
					<pre><code><?php echo MURL::segment(3); ?></code></pre>
					
				</section>
				
				<section id="section_curl">
					<?php 
					$data['title'] = 'curl($url:String):Mixed';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
