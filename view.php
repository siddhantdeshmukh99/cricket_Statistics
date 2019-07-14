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
		table{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);	
			font-family: courier;
			font-size: 22px;
			font-weight: 600;
			color: white;
		}
		table tr td{
			padding-left:  20px;
			padding-right:  20px;
			padding-top: 10px;
		}
		table tr th{
			padding-left:  20px;
			padding-right: 20px;
			padding-top: 10px;
			padding-bottom: 20px;
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
	<table>	
		<?php
			$con=mysqli_connect("localhost","root","","cricket");
			if (!$con) {
				die("not able to connect to data base");
			}
			if($_POST['country']!="" && $_POST['format']!=""){
				$country=$_POST['country'];
				$format=$_POST['format'];
				$result=mysqli_query($con,"SELECT id,first_name,runs,fifties,hundreds,average,wickets,economy FROM player NATURAL JOIN stats WHERE stats.format='$format' and player.country='$country'") or die("query not executed");
		    	echo "<tr><th>ID</th> <th>Name</th> <th>runs</th> <th>average</th> <th>hundreds</th> <th>fifties</th> <th>wickets</th> <th>economy</th></tr>";
				while($row = mysqli_fetch_assoc($result)) { 
					echo "<tr><td>".$row['id']."</td><td>".$row['first_name']."</td> <td>".$row['runs']."</td> <td>".$row['average']."</td> <td>".$row['hundreds']."</td> <td>".$row['fifties']."</td> <td>".$row['wickets']."</td> <td>".$row['economy']."</td></tr>";
				}
			}
			else if($_POST['country']!="" && $_POST['format']==""){
				$country=$_POST['country'];
				$result=mysqli_query($con,"SELECT id,first_name,runs,fifties,hundreds,average,wickets,economy,format FROM stats NATURAL JOIN player WHERE player.country='$country' ") or die("query not executed");
			    echo "<tr><th>ID</th><th>Name</th> <th>runs</th> <th>average</th> <th>hundreds</th> <th>fifties</th> <th>wickets</th> <th>economy</th> <th>format</th></tr>";
				while($row = mysqli_fetch_assoc($result)) { 
					echo "<tr><td>".$row['id']."</td><td>".$row['first_name']."</td> <td>".$row['runs']."</td> <td>".$row['average']."</td> <td>".$row['hundreds']."</td> <td>".$row['fifties']."</td> <td>".$row['wickets']."</td> <td>".$row['economy']."</td><td>".$row['format']."</td></tr>";
				}	
			}
			else header('location:user_view.php');
		?>
	</table>
</body>
</html>