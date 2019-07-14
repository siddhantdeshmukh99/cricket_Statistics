<?php
	session_start();
	$number1=$_POST['number'];
	$username=$_POST['user_name'];
	$new_password=$_POST['new_password'];
	$sid=$_SESSION['user_id'];
	$con=mysqli_connect("localhost","root","","cricket");
	if (!$con) {
		die("not able to connect to data base");
	}
	$query="UPDATE loginform SET user_id='$username',password='$new_password',number1='$number1' WHERE user_id='$sid'";
	echo $query;
	mysqli_query($con,$query)or die("query could not execute".mysql_error());
	$_SESSION['user_id']=$username;
	$_SESSION['password']=$new_password;
	mysqli_close($con);	
	header("location:update_user.php");
?>