<?php 
include_once "include/db.php" 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Blogku</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav>
		<ul>
			<a href="index.php"><li>Home</li></a>
			<a href="blog.php"><li>Blog</li></a>
			<?php if(!isset($_SESSION['username'])){ ?>
			<a href="login.php"><li>Login</li></a>
			<?php }else{ ?>
			<a href="logout.php"><li><?= $_SESSION['username'] ?> (Logout)</li></a>	
			<?php } ?>
		</ul>
	</nav>

	<div class="container">