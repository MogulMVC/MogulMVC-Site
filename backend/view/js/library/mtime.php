<?php 
$data['php_version'] = 'mtime';
MLoad::template_application('template/toolbar_js', $data);
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
			
			<h2>Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
			
				<section id="section_sec2hms">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'sec2hms(sec:int):String';
					$data['content'] = nl2br('Takes 1 argument of seconds and converts it to a string in the format of hh:mm:ss.');
					MLoad::template_application('ui/library_function', $data);
					?>
					<pre><code><script>var random = MNumber.random(0, 10000); var calc = MTime.sec2hms(random); document.write('MTime.sec2hms(' + random + '); <br />' + typeof calc + ' ' + calc);</script></code></pre>
				</section>			
			</div>
			
		</td>

	</tr>

</table>
