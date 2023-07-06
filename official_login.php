
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="officialogin.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
</head>
<style type="text/css">
@media (min-width:768px){
	body{
	background: black;
}
form{
	margin-top: 50px;
	margin-left: 30%;
	background: grey;
	color: white;
	width: 350px;
	height: 500px;
}
img{
	border-radius: 50%;
	width: 70px;
	height: 70px;
	margin-left: 140px;
	margin-top: 10px;
}
p{
	text-align: center;
	font-size: 20px;
	font-weight: bold;
	font-family:nunito;
	font-weight: bold;
	color: darkblue;
}
.inn input{
	margin-left: 15px;
	height: 35px;
	width: 90%;
	border: 2px solid brown;
}
.sub input{
	margin-left: 130px;
	background: brown;
	color: white;
	border: none;
	border-radius: 5px;
	margin-top: 30px;
	cursor: pointer;
	padding: 10px;
	transition: .2s;
}
.sub input:hover{
	background: rosybrown;
}
::placeholder{
	text-align: center;
}
}
@media (max-width:767px){
	body{
	background: black;
}
form{
	margin-top: 50px;
	margin-left: 5%;
	background: grey;
	color: white;
	width: 350px;
	height: 500px;
}
img{
	border-radius: 50%;
	width: 70px;
	height: 70px;
	margin-left: 140px;
	margin-top: 10px;
}
p{
	text-align: center;
	font-size: 20px;
	font-weight: bold;
	font-family:nunito;
	font-weight: bold;
	color: darkblue;
}
.inn input{
	margin-left: 15px;
	height: 35px;
	width: 90%;
	border: 2px solid brown;
}
.sub input{
	margin-left: 130px;
	background: brown;
	color: white;
	border: none;
	border-radius: 5px;
	margin-top: 30px;
	cursor: pointer;
	padding: 10px;
	transition: .2s;
}
.sub input:hover{
	background: rosybrown;
}

::placeholder{
	text-align: center;
}
}

</style>
<body>
	<form method="post">
		<img src="images/logo.jpg">
		<p>ADMIN LOGIN</p>
<div class="inn">
		<input type="text" name="username" placeholder="Admin User name"><br><br>
		<input type="password" name="password" placeholder="provide a valid password"><br>
</div>

<div class="sub">
		<input type="submit" name="" value="ENTER">
</div>
	</form>

	<?php
$username='Ojoh';
$password='Admin';

session_start();
if($_POST['username']==$username && $_POST['password']==$password){
		$_SESSION['username']=$username;
		echo "<script>alert('Welcome')</script>";
		echo "<script>location.href='fetch.php'</script>";
	}

	else{	
	echo "<script>alert('username or password incorrect')</script>";
}
	?>
</body>
</html>