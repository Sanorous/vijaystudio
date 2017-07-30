<?php ob_start(); ?>
<?php
require("db.php");
$id =$_REQUEST['Id'];
$result = mysql_query("SELECT * FROM client WHERE Id  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$Name= $test['Name'] ;
				$Mobile= $test['Mobile'] ;
				$Email= $test['Email'] ;
                $Address= $test['Address'] ;
                $Date= $test['Date'] ;
                $Occasion= $test['Occasion'] ;
                $Occasion_date= $test['Occasion_date'] ;
                $Time= $test['Time'] ;
                $Venue= $test['Venue'] ;
                $Occasion1= $test['Occasion1'] ;
                $Occasion_date1= $test['Occasion_date1'] ;
                $Time1= $test['Time1'] ;
                $Venue1= $test['Venue1'] ;
                $Occasion2= $test['Occasion2'] ;
                $Occasion_date2= $test['Occasion_date2'] ;
                $Time2= $test['Time2'] ;
                $Venue2= $test['Venue2'] ;
                $Occasion3= $test['Occasion3'] ;
                $Occasion_date3= $test['Occasion_date3'] ;
                $Time3= $test['Time3'] ;
                $Venue3= $test['Venue3'] ;
                $Occasion4= $test['Occasion4'] ;
                $Occasion_date4= $test['Occasion_date4'] ;
                $Time4= $test['Time4'] ;
                $Venue4= $test['Venue4'] ;
                $Total= $test['Total'] ;
                $Advance= $test['Advance'] ;
                $Balance= $test['Balance'] ;                			
if(isset($_POST['save']))
{	
	//$Name_save = $_POST['Name'];
	//$Designation_save = $_POST['Designation'];
	$Dob_save = $_POST['Dob'];
	$Employer_save = $_POST['Employer'];
	$Mobile_save = $_POST['Mobile'];
	$other_save = $_POST['other'];

	mysql_query("UPDATE form SET Name ='$Name_save', Designation ='$Designation_save', Dob ='$Dob_save', Employer='$Employer_save', Mobile='$Mobile_save', other='$other_save' WHERE UserId = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	header("Location: clients.php");			
}
mysql_close($conn);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Manager</title>
</head>

<body>
<form method="post">
<table>
<tr>
		<td>Name:</td><td><input type="text" name="Name" value="<?php echo $Name ?>"/></td></tr>
	<tr><td>Designation:</td><td><textarea rows="1" cols="50" name="Designation"><?php echo $Designation ?></textarea></td></tr>
	<tr><td>Dob:</td><td><input type="text" name="Dob" value="<?php echo $Dob ?>"/></td></tr>
	<tr><td>Employer:</td><td><input type="text" name="Employer" value="<?php echo $Employer ?>"/></td></tr>
	<tr><td>Mobile:</td><td><input type="text" name="Mobile" value="<?php echo $Mobile ?>"/></td></tr>
	<tr><td>other:</td><td><input type="text" name="other" value="<?php echo $other ?>"/></td></tr>
	<tr><td>&nbsp;</td>	<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

	<?php ob_end_flush(); ?>
</body>
</html>
