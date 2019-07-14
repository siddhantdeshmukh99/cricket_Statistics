<?php
	session_start();
	if(!isset($_SESSION['user_id'])){
		header('location: index.php');
	}
	if (isset($_POST['Add']) ) {
		$country=$_POST['country'];
		$age=$_POST['age'];
		$format=$_POST['format'];
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$id=$_POST['id'];
		$con=mysqli_connect("localhost","root","","cricket");
		if(!$con){
			die("Could not connect to database");
		}
		mysqli_query($con,"INSERT INTO stats(average,runs,fifties,hundreds,wickets,economy,format,overs,id) VALUES(0,0,0,0,0,0,'$format',0,$id)");
		$result=mysqli_query($con,"INSERT INTO player(id,first_name,last_name,age,country) VALUES($id,'$first_name','$last_name',$age,'$country')");
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
		ul li a{
			text-decoration: none;
			font-family: courier;
			font-size: 23px;
			font-weight: 600;
			color: white;
			transition: 0.25s ease;
		}
		.update table{
			position: absolute;
			font-family: courier;
			font-size: 23px;
			font-weight: 600;
			color: white;
			top: 52%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		.update table tr td{
			margin:0;
			padding-left: 80px;
			padding-right: 80px;
			padding-top: 20px;
	
		}
		.update table tr td input[type="text"]{
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
		.update table tr td input[type="submit"]{
			border: none;
			outline: none;
			height: 25px;
			background: orange;
			border-radius: 10px;
			color: white;
			font-size: 16px;
			width: 50%;
		}
		.update table tr td input[type="submit"]:hover{
			color: black;
			background-color: darkorange;
			cursor: pointer;
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
	<div class="update">
		<form method="POST" action="add_data.php">
		<table>
			<tr>
				<td>ID:</td>
				<td><input type="text" name="id" placeholder="ID" required></td>
			</tr>
			<tr>
				<td>First:</td>
				<td><input type="text" name="first_name" placeholder="Name" required></td>
			</tr>
			<tr>
				<td>Last:</td>
				<td><input type="text" name="last_name" placeholder="Name" required></td>
			</tr>
			<tr>	
				<td>Country:</td>
				<td><input type="text" name="country" placeholder="Country" required></td>
			</tr>
			<tr>
				<td>Format:</td>
				<td><input type="text" name="format" placeholder="Format" requried></td>
			</tr>
			<tr>
				<td>Age:</td>
				<td><input type="text" name="age" placeholder="age" requried></td>
			</tr>
			<tr align="center">
				<td colspan="2"><input type="submit" name="Add" value="Add"></td>
			</tr>
		</table>
		</form>
	</div>
</body>
</html>
