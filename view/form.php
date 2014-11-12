<?php
// in order to make the website run with certain parameters the webpage needs to function properly
require_once(__DIR__ . "/../model/config.php");
?>

<div id="one">
<h1>Create a Blog Post</h1>
</div>

<form method ="post" action ="<?php echo $path . "controller/create-post.php"; ?>">
	<div id="title">
		<!-- labels the boxes -->
		<label for="title">Title:</label>
		<!-- allows you to put a single line -->
		<input type="text" name="title"/>
	</div>

	<div id="post">
		<!-- lables the post box -->
		<label for="post">Post: </label>
		<!-- allows you input multiple lines -->
		<textarea name="post"></textarea>
	</div>
		<!-- allows me to make a submit button -->

	<div id="submit">
		<button type="submit">Submit</button>
	</div>
</form>