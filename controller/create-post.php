<!-- creating variables for the post -->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../post.css">
		<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700italic' rel='stylesheet' type='text/css'>
	</head>
	<body id="body1">
		<header id="data">
				<h1> JUZET ARANA </h1>
		</header>
		<div id="container">
<?php
// requiring the config file
	require_once(__DIR__ . "/../model/config.php");
// this is creating a connection using the mysqli method
// $host, $username, $password, $database are being stored in the connection
	$connection = new mysqli($host, $username, $password, $database);
// variable allowas you to input a post
// this is inputing the post into the php database and it filters the post as well
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
// we are storing the date and the time in a variable
	$date = new DateTime('today'); 
// using the America/Los Angeles time zone so that we can use the time in the state/city we are in
	$time = new DateTime('America/Los_Angeles');
// this is inserting a post and asking you to insert the title and the post you want to put 
	$query = $_SESSION["connection"]->query ("INSERT INTO posts SET title = '$title' , post = '$post'");
// if the query is true it prints out the post with the title
	if($query) {
		echo"<div id='box'><p>Title: $title</p></div>";
		echo"<div class='first'><p>Post: $post</p></div>";
		echo"<div class='second'><h1><center><p>About Me</p></center></h1><p>Unerdwear.com marshmallow danish chupa chups dessert pastry cheesecake. Cotton candy pudding dessert tart sweet roll chocolate bar jelly-o ice cream topping. Unerdwear.com chocolate bar tiramisu sesame snaps cotton candy marzipan. Lollipop brownie bonbon. Chocolate cake bear claw powder sweet roll. Chupa chups pie oat cake powder. Gingerbread fruitcake sugar plum gummi bears jelly. Jujubes toffee unerdwear.com icing brownie. Chupa chups cookie icing. Jelly beans brownie jelly beans applicake marshmallow cake. Cake jujubes bear claw powder ice cream sweet soufflé cookie brownie. Jelly-o sugar plum danish chocolate cake apple pie.</p></div>";
		echo"Posted on: " . $date->format ("m/d/y") . " at " . $time->format("h:i");
		// echo"<div id='done'> . </div>";
	}
// if the query is false then the connecton error will pop up
	else {
		echo"<p>" . $_SESSION["connection"]->error . "</p>";
	}
	require_once(__DIR__ . "/../controller/read-posts.php");
?>	
	</div>

	<footer>
		&copy Juzet Arana
	</footer>
	</body>
</html>