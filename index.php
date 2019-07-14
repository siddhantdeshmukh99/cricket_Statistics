<?php
	session_start();
?>
<html>
<head>
	<title>ICC</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<style type="text/css">
		ul .active{
			border: 2px solid white;
			border-radius: 5px;
		}
		.loginbox{
			width: 320px;
			height: 480px;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
			padding: 80px 60px;
			font-family: courier;
			color: white;
			border: 2px solid;
			border-radius: 20px;
			background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3));
		}
		h2{
			margin: 0;
			padding: 0 0 40px;
			text-align: center;
			font-size: 23px;
		}
		.loginbox p{
			margin: 0;
			padding: 0;
			font-size: 20px;
			font-weight: 600;
		}
		.loginbox input{
			width: 100%;
			margin-bottom: 20px;
		}
		.loginbox input[type="text"],input[type="Password"]{
			border:none;
			border-bottom: 1px solid white;
			background: transparent;
			outline: none;
			color: white;
			font-size: 16px;
		}
		.loginbox input[type="submit"]{
			border:none;
			outline: none;
			height: 25px;
			background: orange;
			border-radius: 10px;
			color: white;
			font-size: 16px;
		}
		.loginbox input[type="submit"]:hover{
			cursor: pointer;
			background-color: darkorange;
			color:black;
		}
	</style>
</head>
<body>
	<ul>
		<li class="active"><a href="index.php">Home</a></li>
		<li><a href="about.php">About Us<a/></li>
		<li><a href="contact.php">Contact<a/></li>
	</ul>
	<div class="loginbox">
		<h2>Login Here</h2>
		<form method="POST" action="login.php">
			<p>User Id:</p><br>
			<input type="text" name="user_id" placeholder="enter username"><br><br>
			<p>Password:</p><br>
			<input type="Password" name="password" placeholder="enter Password"><br><br>
			<input type="submit" name="login" value="Login" >
		</form>
	</div>
</body>
</html>
