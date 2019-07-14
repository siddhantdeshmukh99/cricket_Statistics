<?php
	session_start();
	if(!isset($_SESSION['user_id'])){
		header('location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ICC  user</title>
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<style type="text/css">

		ul .active{
			border: 2px solid white;
			border-radius: 5px;
		}
		
		.view{
			font-family: courier;
			font-size: 23px;
			font-weight: 600;
			color: white;
		}
		.view form{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		.view input{
			width: 100%;
			margin-bottom: 20px;
		}
		.view input[type="text"]{
			border:none;
			outline: none;
			border-bottom: 2px solid white;
			color: white;
			font-size: 20px;
			background: transparent;
		}
		.view input[type="submit"]{
			border:none;
			outline: none;
			height: 25px;
			background: orange;
			border-radius: 10px;
			color: white;
			font-size: 16px;
		}
		.view input[type="submit"]:hover{
			cursor: pointer;
			background-color: darkorange;
			color:black;
		}
		
		
	</style>
</head>
<body>
	<ul>
		<li class="active"><a href="user_view.php">View Stats</a></li>
		<li><a href="user_update.php">Update Stats</a></li>
		<li><a href="add_user.php">Add Profile</a></li>
		<li><a href="update_user.php">Update Profile</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	<div class="view">
		<form method="POST" action="view.php">
			Country Name:
			<p><input type="text" name="country" placeholder="country" required></p>
			Format:
			<p><input type="text" name="format" placeholder="Format"></p>
			<p><input type="submit" name="submit" value="search"></p>
		</form>
	</div>
</body>
</html>