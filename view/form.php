<?php
// in order to make the website run with certain parameters the webpage needs to function properly
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/../controller/login-verify.php");

	if (!authenticateUser()) {
		header("Location:" . $path . "index.php");
		die();
	}
?>
<!-- creating a div box for the blog post -->
	<div id="one">
		Create a Blog Post
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
<!-- allows me to make a submit button and design the webpage -->
	<div>
		<button type="Submit" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
  			Submit
		</button>
	</div>
</form>