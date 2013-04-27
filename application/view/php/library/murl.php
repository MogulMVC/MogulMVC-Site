<?php 
$data['js_version'] = 'murl';
MLoad::template_application('template/toolbar_php', $data);
?>

<?php MLoad::php_framework('core/util/MURL'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_">
					<li class="MSideBarListItem MCursorPointer">
						<span>Default</span>
					</li>
				</a>
				
				<a href="#section_">
					<li class="MSideBarListItem MCursorPointer">
						<span>Sub</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MURL</h1>
			<p>Loaded from <span class="MTextBold">core/util/MURL</span></p>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_protocol">
					<?php 
					$data['title'] = 'protocol';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
					
					<pre><code><?php echo MURL::protocol(); ?></code></pre>
					
				</section>
				
				<section id="section_subdomain">
					<?php 
					$data['title'] = 'subdomain';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
					
					<pre><code><?php echo MURL::subdomain(); ?></code></pre>
					
				</section>
				
				<section id="section_domain">
					<?php 
					$data['title'] = 'domain';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
					
					<pre><code><?php echo MURL::domain(); ?></code></pre>
					
				</section>
				
				<section id="section_base">
					<?php 
					$data['title'] = 'base';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
					
					<pre><code><?php echo MURL::base(); ?></code></pre>
					
				</section>
				
				<section id="section_current">
					<?php 
					$data['title'] = 'current';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
					
					<pre><code><?php echo MURL::current(); ?></code></pre>
					
				</section>
				
				<section id="section_segment">
					<?php 
					$data['title'] = 'segment';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
					
					<pre><code><?php echo MURL::segment(1); ?></code></pre>
					<pre><code><?php echo MURL::segment(2); ?></code></pre>
					<pre><code><?php echo MURL::segment(3); ?></code></pre>
					
				</section>
				
				<section id="section_curl">
					<?php 
					$data['title'] = 'curl';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
					
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
