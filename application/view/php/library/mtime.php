<?php 
$data['js_version'] = 'mtime';
MLoad::template_application('template/toolbar_php', $data);
?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_sec2hms">
					<li class="MSideBarListItem MCursorPointer">
						<span>sec2hms</span>
					</li>
				</a>
				
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MTime</h1>
			<span class="MNoteY">Loaded from</span>
			<pre><code>core/util/MTime</code></pre>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_sec2hms">
					<?php 
					$data['title'] = 'sec2hms';
					$data['content'] = '';
					MLoad::template_application('template/library_function', $data);
					?>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
