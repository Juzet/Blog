<!-- looking for the config in folder model   -->
<?php
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/../controller/login-verify.php");

	if (!authenticateUser()) {
		header("Location:" . $path . "index.php");
		die();
	}
?>
<!-- links the link on blog to the page post -->
<nav>
	<ul>
		<li><a href="<?php echo $path . "post.php" ?>">Blog Post Form</a></li>
	</ul>
</nav>
?>
