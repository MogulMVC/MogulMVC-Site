<?php MLoad::template_application('template/toolbar_php'); ?>

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<a href="#section_types">
					<li class="MSideBarListItem MCursorPointer">
						<span>Types of Models</span>
					</li>
				</a>
				
				<a href="#section_create">
					<li class="MSideBarListItem MCursorPointer">
						<span>Create a Model</span>
					</li>
				</a>
				
				<a href="#section_load">
					<li class="MSideBarListItem MCursorPointer">
						<span>Load a Model</span>
					</li>
				</a>

				<a href="#section_use">
					<li class="MSideBarListItem MCursorPointer">
						<span>Use a Model</span>
					</li>
				</a>
				
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<h1>PHP Models</h1>
			
			<p>Models provide a means of interacting with a database.</p>
	
			<section id="section_types">
	
				<h2>Types of Models</h2>
				<hr />
	
				<p>Mogul MVC includes 2 different types of models.</p>

				<p>MPDO models are the basic model type. They provide no abstraction and allows maximum control over you CRUD functions. It is also the faster of the two models.</p>

				<p>MactiveRecord models are the advanced model type. They provide a robust abstraction layer for your model. These models are forks of the PHP Active Record project. They have been integrated with the Mogul MVC database configuration.</p>
	
			</section>
			
			<section id="section_create">
	
				<h2>Create a Model</h2>
				<hr />

				<div class="indent">

					<h3>MPDO</h3>

					<p>To create a PDO model you first make a class file named after your table followed by Model.php. This file would be placed in the backend model folder. For example if your table is called users then your model would be UserModel.php and be placed in the model folder.</p>
				
					<pre><code><?php echo htmlspecialchars('/backend/
	/model/
		/UserModel.php
/frontend/
/.htaccess'); ?></code></pre>
				
					<p>You must load the <code>'core/MPDO'</code> library from your autoload or from within the model class.</p>
				
					<p>Inside this model you will create all your functions to interact with the database. These functions should be public functions and are commonly refereed to as CRUD, because they will do one of four things, Create, Read, Update, and Delete.</p>
				
					<p>Below is an example of a read function.</p>
				
					<pre><code><?php echo htmlspecialchars('public function read_by_id($id) {
	
	$DB = MPDO::connection(0);

	$query = $DB -> prepare(\'
		SELECT * from user
		WHERE id = ?\');
		
	$query -> execute(array($id));

	$object = $query -> fetch();

	return $object;

}'); ?></code></pre>
				
					<p>Notice how we use <code>MPDO::connection(0);</code> on the first line of the function. <code>MPDO::connection(0);</code> will return a PDO object connected to the 0th database in your <code>database.php</code> file within the config folder.</p>
					
					<p>Imagine your 0th entry in your database.php file is called 'user_connection'. You can also connect to this table with the following code.</p>
					
					<code>MPDO::connection('user_connection');</code>
					
					<p>Mogul MVC will understand that you are looking for a specifically named index within the <code>$GLOBALS['DB'];</code> array.</p>
					
					<p>Also, Mogul MVC will only connect once to each database you need so as to minimize the amount of concurrent connections to the database.</p>
					
					<p>All your model's methods should accept input and return a value. We recommend the following.</p>

					<div class="MWell">
					<li>Create should accept an object to be added to a database. The return the object added to the database including the id or false if the object was not added.</li>
					<li>Read should accept some means of finding the row. They return an object, or false if no object was found.</li>
					<li>Update should accept an object to be updated. They return the updated object or false if the row was not updated.</li>
					<li>Delete should accept some means of finding the row to delete. They return true if the row was deleted and false if there was an error.</li>
					</div>
					
					<h3>MActiveRecord</h3>

		<p>MActiveRecord models are models based on the Active Record pattern. They are based on the <a href="http://www.phpactiverecord.org/">PHPActiveRecord</a> project, but add some automatic configuration capabilities.</p>

<p>Like MPDO models MActiveRecord models are named after your table. If your table is 'user' you would again name your model UserModel.php. However, unlike MPDO models you don't have to add any CRUD functions as these will be created dynamically by the MActiveRecord class.</p>

<p>You need to load the core/db/MActiveRecord library in either the autoload.php file, or within the model class itself. After this your model must extend MActiveRecord. The final thing you will need to do is specify the table the model should connect to. Below is an example of a MActiveRecord model.</p>

<pre><code><?php echo htmlspecialchars('<?php

MLoad::php_framework(\'core/db/MActiveRecord\');

class UserModel extends MActiveRecord {

	public static $table = \'user\';

}') ;?></code></pre>
	
			<p>To learn more about how to write MActiveRecord models see the <a href="http://www.phpactiverecord.org/">PHPActiveRecord</a> project's documentation.</p>
					
				<h3>MPDO vs MActiveRecord</h3>
					
				<p>When should you use MPDO models over MactiveRecord models?</p>
					
				<p>MActiveRecord models are very automated and easy to write as all the SQL is written dynamically by the MActiveRecord class. Such a level of automation and ease of use compromises performance. MActiveRecord can be 8X slower than MPDO models and depending on the amount of rows being retrieved from the database can be much more memory intensive. However, MActiveRecord models are substantially faster to write and develop with. For this reason we recommend using MActiveRecord models for rapid development of prototypes. Once an application is working and more speed is required you should change your models to MPDO models.</p>

<p>MPDO models use the PDO driver to connect to databases and retrieve data. This is the only level of abstraction as all the SQL is written by you. This makes MPDO models a lot faster than MActiveRecord models, but less intuitive.</p>
					
				</div>

			</section>
	
			<section id="section_load">
	
				<h2>Load a Model</h2>
				<hr />
				
				<p>Loading a model into memory is very simple. To load a model you use the MLoad class and the model function. MLoad will look in the model folder for your model and load it into memory.</p>
				
				<p>To load a model called UserModel.php do the following.</p>
				
				<pre><code>MLoad::model('UserModel');</code></pre>
				
				<p>Notice that we don't have to specify an extension as Mogul MVC assumes models are PHP models.</p>
				
				After loading a model you can then make a new instance of it and access the database using the model's functions.

				<p>For an MPDO model you would do the following.</p>
<pre><code><?php echo htmlspecialchars('MLoad::model("UserModel");
$user_model = new UserModel();
$user_object = $user_model -> read_by_id(2);'); ?></code></pre>

				<p>An MActiveRecord model would do the following.</p>
<pre><code><?php echo htmlspecialchars('MLoad::model("UserModel");
$user_object = UserModel::find_by_id(2);'); ?></code></pre>
	
			</section>
	
			<section id="section_use">
	
				<h2>Use a Model</h2>
				<hr />
				
				<p>Using a model varies based on the type of model you are using. The following will cover MPDO models. If you want to learn how to use an MActiveRecord model please see the PHPActiveRecord documentation as it outlines the use of Active Record models better than we can.</p>

				<p>As stated above, to use a model you must first load it. This is done with the MLoad class and the model function.</p>
				
				<pre><code><?php echo htmlspecialchars("MLoad::model('UserModel);");?></code></pre>
				
				<p>After loading the model you have can create a new instance of the model.</p>
				
				<pre><code><?php echo htmlspecialchars('$user_mode = new UserModel();'); ?></code></pre>
				
				<p>As all functions in MPDO models are public function you can access them as you would any other method within a class.</p>
				
				<p>Imagine you have a model called UserModel which contains a function called read_by_id. You would call that function as follows.</p>
				
				<pre><code><?php echo htmlspecialchars('$user_info = $user_model -> read_by_id(2);'); ?></code></pre>
				
				<p>We would pass in a number so the function can pull the appropriate data from the database.</p>
	
			</section>

			
		</td>

	</tr>

</table>
