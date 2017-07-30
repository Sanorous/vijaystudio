<?php ob_start(); ?>
<?php
  include("db.php");  

	$id =$_REQUEST['DivID'];
	
	
	// sending query
	mysql_query("DELETE FROM register WHERE DivID = '$id'")
	or die(mysql_error());  	
	
	header("Location: main.php");
?>
<?php ob_end_flush(); ?>