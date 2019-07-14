<?php
	session_start();
	if(!isset($_SESSION['user_id'])){
		header('location: index.php');
	}
	$country="";
	$format="";
	if(isset($_GET['country']) && isset($_GET['format'])){
		$country=$_GET['country'];
		$format=$_GET['format'];
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
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		.update table tr td{
			margin:0;
			padding-left: 80px;
			padding-right: 80px;
			padding-top: 25px;
	
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
		.radio{
			padding-left: 5px;
			font-family:arial;
			color: #EFEFC8;
			font-size: 16px;
			font-weight: 400;	
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
		<form method="POST" action="update.php">
		<table>
			<tr>	
				<td>Country:</td>
				<td><input type="text" name="country" placeholder="Country" value="<?php echo $country;?>" required></td>
			</tr>
			<tr>
				<td>Format:</td>
				<td><input type="text" name="format" placeholder="Format" value="<?php echo $format; ?>" required></td>
			</tr>
			<tr>
				<td>ID:</td>
				<td><input type="text" name="id" placeholder="ID" required></td>
			</tr>
			<tr>
				<td>Runs:</td>
				<td><input type="text" name="runs" placeholder= "Runs" required></td>
			</tr>
			<tr>
				<td>Status</td>
				<td class="radio"><input type="radio" name="status" value= "Not out" checked>Not out &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="radio" name="status" value= "out">Out</td>
			</tr>
			<tr>
				<td>Wickets:</td>
				<td><input type="text" name="wickets" placeholder= "wickets" required></td>
			</tr>
			<tr>
				<td>Runs Given</td>
				<td><input type="text" name="runs_given" placeholder= "Runs" required></td>
			</tr>
			<tr>
				<td>Overs</td>
				<td><input type="text" name="overs" placeholder= "Overs" required></td>
			</tr>
			<tr align="center">
				<td colspan="2"><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
		</form>
	</div>
</body>
</html>
