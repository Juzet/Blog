<!-- looking for the config in folder model   -->
<!-- verifying the require once file -->
<?php
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/../controller/login-verify.php");
// if the authentication is wronf then the header to the index path will die
	if (!authenticateUser()) {
		header("Location:" . $path . "index.php");
		die();
	}
?>
<!-- echoing the blog post form in the nav -->
	<nav>
		<ul>
			<li><a href="<?php echo $path . "post.php" ?>">Blog Post Form</a></li>
		</ul>
	</nav>
?>
