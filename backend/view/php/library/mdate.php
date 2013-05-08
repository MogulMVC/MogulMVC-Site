<?php 
$data['js_version'] = MURL::segment(3);
MLoad::template_application('template/toolbar_php', $data);
?>

<?php MLoad::php_framework('core/util/MDate'); ?>

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
			<span class="MNoteY">Loaded from</span>
			<pre><code>core/util/MDate</code></pre>
			
			<h2>Public Methods</h2>
			<hr />
			<br />
			
			<div class="indent">
				
				<section id="section_datetime">
					<?php 
					$data['added'] = '1211';
					$data['title'] = 'datetime():String';
					$data['content'] = 'The datetime function is a shortcut for the PHP <code>date("Y-m-d H:i:s");</code> function. This has been added because it is useful to use when updating databases.';
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php echo 'MDate::datetime(); <br />'; ?><?php echo var_dump(MDate::datetime()); ?></code></pre>
				</section>
	
				<section id="section_date">
					<?php 
					$data['added'] = '1305';
					$data['title'] = 'date():String';
					$data['content'] = 'The date function is a shortcut for the PHP <code>date("Y-m-d");</code> function.';
					MLoad::template_application('template/library_function', $data);
					?>
					<pre><code><?php echo 'MDate::date(); <br />'; ?><?php echo var_dump(MDate::date()); ?></code></pre>
				</section>
				
			</div>
					
		</td>

	</tr>

</table>
