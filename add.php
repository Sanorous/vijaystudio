<?php ob_start(); ?>
<?php 
 
 
 //This gets all the other information from the form 
 $Name=$_POST['Name'] ;
 $Mobile= $_POST['Mobile'] ;
 $Email= $_POST['Email'] ;
 $Address= $_POST['Address'] ;
 $Date= $_POST['Date'] ;
 $Occasion= $_POST['Occasion'] ;
 $Occasion_date= $_POST['Occasion_date'] ;
 $Time= $_POST['Time'] ;
 $Venue= $_POST['Venue'] ;
 $Camera= $_POST['Camera'] ;
 $Video= $_POST['Video'] ;
 $Crane= $_POST['Crane'] ;
 $Occasion1= $_POST['Occasion1'] ;
 $Occasion_date1= $_POST['Occasion_date1'] ;
 $Time1= $_POST['Time1'] ;
 $Venue1= $_POST['Venue1'] ;
 $Camera1= $_POST['Camera1'] ;
 $Video1= $_POST['Video1'] ;
 $Crane1= $_POST['Crane1'] ;
 $Occasion2= $_POST['Occasion2'] ;
 $Occasion_date2= $_POST['Occasion_date2'] ;
 $Time2= $_POST['Time2'] ;
 $Venue2= $_POST['Venue2'] ;
 $Camera2= $_POST['Camera2'] ;
 $Video2= $_POST['Video2'] ;
 $Crane2= $_POST['Crane2'] ;
 $Occasion3= $_POST['Occasion3'] ;
 $Occasion_date3= $_POST['Occasion_date3'] ;
 $Time3= $_POST['Time3'] ;
 $Venue3= $_POST['Venue3'] ;
 $Camera3= $_POST['Camera3'] ;
 $Video3= $_POST['Video3'] ;
 $Crane3= $_POST['Crane3'] ;
 $Occasion4= $_POST['Occasion4'] ;
 $Occasion_date4= $_POST['Occasion_date4'] ;
 $Time4= $_POST['Time4'] ;
 $Venue4= $_POST['Venue4'] ;
 $Camera4= $_POST['Camera4'] ;
 $Video4= $_POST['Video4'] ;
 $Crane4= $_POST['Crane4'] ;
 $Total= $_POST['Total'] ;
 $Advance= $_POST['Advance'] ;
 $Balance= $_POST['Balance'] ;
 $Others= $_POST['Others'] ;

 
 // Connects to your Database 
mysql_connect("50.62.209.123", "studio", "vijay@123") or die(mysql_error()) ; 
 mysql_select_db("vijay") or die(mysql_error()) ; 
 
 //Writes the information to the database 
 mysql_query("INSERT INTO `client`(Name,Mobile,Email,Address,Date,Occasion,Occasion_date,Time,Venue,Camera,Video,Crane,Occasion1,Occasion_date1,Time1,Venue1,Camera1,Video1,Crane1,Occasion2,Occasion_date2,Time2,Venue2,Camera2,Video2,Crane2,Occasion3,Occasion_date3,Time3,Venue3,Camera3,Video3,Crane3,Occasion4,Occasion_date4,Time4,Venue4,Camera4,Video4,Crane4,Total,Advance,Balance,Others) 
		 VALUES ('$Name','$Mobile','$Email','$Address','$Date','$Occasion','$Occasion_date','$Time','$Venue','$Camera','$Video','$Crane','$Occasion1','$Occasion_date1','$Time1','$Venue1','$Camera1','$Video1','$Crane1','$Occasion2','$Occasion_date2','$Time2','$Venue2','$Camera2','$video2','$Crane2','$Occasion3','$Occasion_date3','$Time3','$Venue3','$Camera3','$Video3','$Crane3','$Occasion4','$Occasion_date4','$Time4','$Venue4','$Camera4','$Video4','$Crane4','$Total','$Advance','$Balance','$Others')") ; 
 
 
 header("Location: clients.php");
 ?>
<?php ob_end_flush(); ?>