<?php MLoad::template_application('template/toolbar_js'); ?>

<table class="MWidthFull">
	
	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
	
				<div class="MSideBarMenu">
					<input type="text" id="inputContent" class="MWidthFull" placeholder="Custom Messages / Value"/>
				</div>
	
				<li id="createButton" class="MSideBarListItem">
					<span>New Button</span>
				</li>
	
				<li id="createListItem" class="MSideBarListItem">
					<span>New List Item</span>
				</li>
	
				<li id="createNote" class="MSideBarListItem">
					<span>New Note</span>
				</li>
	
				<li id="createPopup" class="MSideBarListItem">
					<span>New Popup</span>
				</li>
	
				<li id="createProgressBar" class="MSideBarListItem">
					<span>New Progress Bar</span>
				</li>
	
				<li id="createRatingsBar" class="MSideBarListItem">
					<span>New Ratings Bar</span>
				</li>
	
				<li id="createSystemMessage" class="MSideBarListItem">
					<span>New System Message</span>
				</li>
				
				<li class="MSideBarListItem">
					<button class="MButtonR MWidthFull" id="clear">Clear Elements</button>
				</li>
				
				<pre id="newCode" class="MPaddingSmall" style="margin:10px;"></pre>
	
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>JavaScript UI Elements</h1>
			
			<p>Click a UI element to the left to add it to the screen and see the source code to make it.</p>
			<p>These UI elements can also be created using HTML markup. See the <a href="/css/ui_elements">CSS UI Elements page</a> for details.</p>
			
			<div id="newContent"></div>
		</td>

	</tr>
</table>

<script>
	$(document).ready(function() {
		$('#createButton').click(createButton);
		$('#createListItem').click(createListItem);
		$('#createNote').click(createNote);
		$('#createPopup').click(createPopup);
		$('#createProgressBar').click(createProgressBar);
		$('#createRatingsBar').click(createRatingsBar);
		$('#createSystemMessage').click(createSystemMessage);
		
		$('#clear').click(function(){
			$('#newContent').html('')
			$('#MSystemMessageContainer').html('');
			$('#newCode').html('');
		});
	});

	function createButton() {
		var input = $('#inputContent').val();

		var object = new MButton(input);
		$('#newContent').append(object);
		
		$('#newCode').html("<code>var object = new MButton(" + input + ");<br />$('#newContent').append(object);</code>");
	};

	function createListItem() {
		var object = new MListItem();
		$('#newContent').append(object);
		
		$('#newCode').html("<code>var object = new MListItem();<br />$('#newContent').append(object);</code>");
	};

	function createNote() {
		var input = $('#inputContent').val();

		var object = new MNote(input);
		$('#newContent').append(object);
		
		$('#newCode').html("<code>var object = new MNote(" + input + ");<br />$('#newContent').append(object);</code>");
	};

	function createPopup() {
		var input = $('#inputContent').val();

		var object = new MPopup(input);
		$('#newContent').append(object);
		
		$('#newCode').html("<code>var object = new MPopup(" + input + ");<br />$('#newContent').append(object);</code>");
	};

	function createProgressBar() {
		var input = $('#inputContent').val();

		var object = new MProgressBar(input);
		$('#newContent').append(object);
		
		$('#newCode').html("<code>var object = new MProgressBar(" + input + ");<br />$('#newContent').append(object);</code>");
	};

	function createRatingsBar() {
		var input = $('#inputContent').val();

		var object = new MRatingsBar(input);
		$('#newContent').append(object);
		
		$('#newCode').html("<code>var object = new MRatingsBar(" + input + ");<br />$('#newContent').append(object);</code>");
	};

	function createSystemMessage() {
		var input = $('#inputContent').val();

		var object = new MSystemMessage(input);
		MSystemMessageContainer.append(object, 5000, MConfig.speedFast);
		
		$('#newCode').html("<code>var object = new MSystemMessage(" + input + ");<br />MSystemMessageContainer.append(object, 5000, MConfig.speedFast);</code>");
	};
</script>