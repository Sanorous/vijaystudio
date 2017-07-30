<?php  
	$conn = mysql_connect('50.62.209.123:3306', 'studio', 'vijay@123');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("vijay", $conn);
?>

