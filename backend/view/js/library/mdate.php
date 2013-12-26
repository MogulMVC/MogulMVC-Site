<?php 
$data['php_version'] = MURL::segment(3);
MLoad::template_application('_template/toolbar_js', $data);
?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_datetime">
					<li class="MSideBarListItem MCursorPointer">
						<span>datetime</span>
					</li>
				</a>
				
				<a href="#section_date">
					<li class="MSideBarListItem MCursorPointer">
						<span>date</span>
					</li>
				</a>
					
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>MDate</h1>

			<h2>Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_datetime">
					<?php 
					$data['title'] = 'datetime():String';
					$data['content'] = nl2br('The datetime function is the equal of the PHP date("Y-m-d H:i:s"); function. This has been added because it is useful to use when updating databases.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><script>var datetime = MDate.datetime(); document.write('MDate.datetime(); <br />' + typeof datetime + ' ' + datetime);</script></code></pre>
				</section>
				
				<section id="section_date">
					<?php 
					$data['title'] = 'date():String';
					$data['content'] = nl2br('The date function is the equal of the PHP date("Y-m-d"); function.');
					MLoad::template_application('_ui/library_function', $data);
					?>
					<pre><code><script>var date = MDate.date(); document.write('MDate.date(); <br />' + typeof date + ' ' + date);</script></code></pre>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
