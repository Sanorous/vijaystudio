<?php ob_start(); ?>
<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>A</title>

</head>

<body style="background-image: url('images/ComputerDesktopWallpapersCollection727_058.jpg')">
<center>

<table border="1">
	
			<?php
			include("db.php");
			
				
			$result=mysql_query("SELECT * FROM form");
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['UserId'];	
				echo "<tr align='center'>";	
				echo"<td width='5%'><font color='black'>" .$test['UserId']."</font></td>";
				echo"<td width='15%'><font color='black'>" .$test['Name']."</font></td>";
				echo"<td width='25%'><font color='black'>" .$test['Designation']."</font></td>";
				echo"<td width='15%'><font color='black'>". $test['Dob']. "</font></td>";
				echo"<td width='15%'><font color='black'>". $test['other']. "</font></td>";
				echo"<td width='15%'><font color='black'>". $test['Mobile']. "</font></td>";
				echo"<td widht='15%'> <a href ='view.php?UserId=$id'>Edit</a>";
				echo"<td width='5%'> <a href ='del.php?UserId=$id'><center>Delete</center></a>"; 
									
				echo "</tr>";
			}
			mysql_close($conn);
			?>
</table>
</center>
	<?php ob_end_flush(); ?>
</body>
</html>
