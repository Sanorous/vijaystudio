<?php ob_start(); ?>
<?php
require("db.php");
$id =$_REQUEST['Name'];
$result = mysql_query("SELECT * FROM form WHERE Name  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$Name=$test['Name'] ;
				$Designation= $test['Designation'] ;
				$Dob= $test['Dob'] ;
				$other= $test['other'] ;
				$Mobile= $test['Mobile'] ;
                				

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Result - Admin</title>
</head>

<body>
<form method="post">
<table style="padding-left:450px">
<tr>
		<td>Name:</td>
		<td><input type="text" name="Name"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="Search" /></td>
	</tr>
</table>
</form>

<table style="padding-left:450px">
	<tr><td>Name:</td><td><?php echo $Name ?></td></tr>
	<tr><td>Designation:</td><td><?php echo $Designation ?></td></tr>
	<tr><td>Dob:</td><td><?php echo $Dob ?></td></tr>
	<tr><td>Zone:</td><td><?php echo $other ?></td></tr>
	<tr><td>Mobile:</td><td><?php echo $Mobile ?></td></tr>
	
	</tr>
</table>
	<?php ob_end_flush(); ?>
	
	<div style="padding-left:450px"> <a href="dob.php"> Click here to serach by Date of Birth</a></div>
	<!--<div style="padding-left:450px"> <a href="main.php"> Click here to complete database</a></div>-->
</body>
</html>
