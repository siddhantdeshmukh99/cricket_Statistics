<?php
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$number1=$_POST['number'];
	$username=$_POST['user_name'];
	$new_password=$_POST['new_password'];
	$con=mysqli_connect("localhost","root","","cricket");
	if(!$con){
		die("Could not connect to database");
	}
	mysqli_query($con,"INSERT INTO loginform(user_id,password,number1,firstname,lastname) VALUES('$username','$new_password','$number1','$firstname','$lastname')") or die("query could not execute".mysql_error());
	mysqli_close($con);
	header('location:add_user.php')
?>