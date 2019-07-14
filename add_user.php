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
		div{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		div form{
			font-family: courier;
			font-size: 23px;
			font-weight: 600;
			color: white;
		}
		div form tr td{
			margin:0;
			padding-left: 80px;
			padding-right: 80px;
			padding-top: 25px;
	
		}
		div form tr td input[type="text"],input[type="password"]{
			margin:0;
			padding: 5px;
			outline: none;
			border: none;
			width: 100%;
			border-bottom: 2px solid white;
			background:transparent;
			color: white;
			font-size: 16px;
		}
		div form table input[type="submit"]{
			border: none;
			outline: none;
			height: 25px;
			background: orange;
			border-radius: 10px;
			color: white;
			font-size: 16px;
			width: 50%;
		}
		div form table input[type="submit"]:hover{
			color: black;
			background-color: darkorange;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<ul>
		<li><a href="user_view.php">View Stats</a></li>
		<li><a href="user_update.php">Update Stats</a></li>
		<li class="active"><a href="add_user.php">Add Profile</a></li>
		<li><a href="update_user.php">Update Profile</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	<div>
		<form method="POST" action="add.php">
			<table>
				<tr>
					<td>First Name</td>
					<td><input type="text" name="firstname" placeholder="First Name" required></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input type="text" name="lastname" placeholder="Last Name" required></td>
				</tr>
				<tr>
					<td>Phone</td> 
					<td><input type="text" name="number" placeholder="Number" required></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="user_name" placeholder="Username" required></td>
				</tr>
				<tr>
					<td>New Password</td>
					<td><input type="Password" name="new_password" placeholder="Password" requried></td>
				</tr>
				<tr align="center">
					<td colspan="2"><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
