<?php 
$data['js_version'] = MURL::segment(3);
MLoad::template_application('template/toolbar_php', $data);
?>

<?php MLoad::php_framework('core/util/MTime'); ?>
<?php MLoad::php_framework('core/util/MNumber'); ?>

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
					$data['title'] = 'sec2hms($sec):String';
					$data['content'] = nl2br('Takes 1 argument of seconds and converts it to a string in the format of hh:mm:ss.');
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php $random = MNumber::random(0, 10000); echo 'MTime::sec2hms(' . $random . ');<br />' . MTime::sec2hms($random);?></code></pre>
				</section>
			
			</div>
			
		</td>

	</tr>

</table>
