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
		.options ul{
			position: absolute;
			list-style: none;
			left: 50%;
			top: 50%;
			transform: translate(-50%,-50%);
		}
		.options ul li{
			display: inline-block;
			border: white solid 2px;
			border-radius: 5px;
		}
		.options ul a li{
			color: white;
			font-family: courier;
			font-size: 23px;
			font-weight: 600;
			transition: 0.25s ease;
			padding: 20px;
		}
		.options ul li:hover{
			background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));
			color: orange;
		}
	</style>
</head>
<body>
	<ul>
		<li><a href="user_view.php">View Stats</a></li>
		<li class="active"><a href="user_update.php">Update Stats</a></li>
		<li><a href="add_user.php">Add Profile</a></li>
		<li><a href="update_user.php">Update Profile</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	<div class="options">
		<ul>
			<a href="change.php"><li>Change</li></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			<a href="add_data.php"><li>&nbsp Add &nbsp</li></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			<a href="delete.php"><li>Delete</li></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		</ul>
	</div>
</body>
</html>
