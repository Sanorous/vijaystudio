<?php ob_start(); ?>
<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>UPTESA- Uttar Pradesh Technical Education Service Association</title>

</head>

<body style="background-image: url('http://hdwallpaperd.com/wp-content/uploads/closeup-leaves-water-drops-wallpaper-for-1920x1080-hdtv-1080p-18-168.jpg')">
<center>

<form enctype="multipart/form-data" action="add.php" method="post">
<table>

	<tr>
		<td>नाम : </td><td><input type="text" name="Name" class="required"/></td>
	</tr>
	<tr>
		<td>पदनाम :</td><td><textarea rows="2" cols="50" name="Designation" class="required"></textarea></td>
	</tr>
	<tr>
		<td>जन्मतिथि : </td><td><input type="text" name="Dob" class="required"/><br> </td>
	</tr>
	<tr>
		<td>संस्था का नाम :</td><td><textarea rows="4" cols="50" name="Employer" class="required"></textarea></td>
	</tr>
	<tr>
		<td>मोबाइल : </td><td><input type="text" name="Mobile" class="required" /><br> </td>
	</tr>
	
	<tr><td>&nbsp;</td>
		<td><input type="submit" name="submit" value="Submit" /></td>
	</tr>
</table>
</form>
<div> 
</div>

</center>
	<?php ob_end_flush(); ?>
</body>
</html>
