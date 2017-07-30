<?php ob_start(); ?>


<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$connection = mysql_connect("localhost", "root", "");
// Selecting Database
//$db = mysql_select_db("company", $connection);
mysql_connect("50.62.209.123", "studio", "vijay@123") or die(mysql_error()) ; 
mysql_select_db("vijay") or die(mysql_error()) ; 
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username from login where username='$user_check'");
$row = mysql_query($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
//mysql_close($connection); // Closing Connection
//header('Location: index.php'); // Redirecting To Home Page
}
?>

<?php ob_end_flush(); ?>