<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: welcome.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome to Vijay Studio Client Management System</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>Please Login</h1>
<div id="login">
<h2>Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="Username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>