<?php
	$user_id=$_POST['user_id'];
	$password=$_POST['password'];
	$con=mysqli_connect("localhost","root","","cricket");
	if (!$con) {
		die("not able to connect to data base");
	}
	$result=mysqli_query($con,"SELECT * FROM loginform WHERE user_id ='".$user_id."'AND password ='".$password."'") 
		or die("failed to query database" .mysql_error());
	$row=mysqli_fetch_array($result);
	if($user_id!="" || $password!=""){
		if($user_id==$row[1] && $row[2]==$password){	
			session_start();
			$_SESSION['user_id']=$user_id;
			$_SESSION['password']=$password;
			header('location: user_update.php');
		}
		else{
			header('location: index.php');
		}
	}
	else{
		header('location: index.php');
	}
	mysqli_close($con);		
	
?>