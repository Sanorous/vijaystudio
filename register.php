<?php ob_start(); ?>
<?php 
 
 
 //This gets all the other information from the form 
 $Name= $_POST['Name'] ;
 $Designation= $_POST['Designation'] ;
 $Dob= $_POST['Dob'] ;
 $Employer= $_POST['Employer'] ;
 $Mobile= $_POST['Mobile'] ;
 $E-Mail= $_POST['E-Mail'] ;
 $other= $_POST['other'] ;
 
 // Connects to your Database 
 mysql_connect("50.62.209.123:3306", "uptesa", "uptesa@123") or die(mysql_error()) ; 
 mysql_select_db("kush") or die(mysql_error()) ; 
 
 //Writes the information to the database 
 mysql_query("INSERT INTO `form`(Name,Designation,Dob,Employer,Mobile,E-Mail,other) 
		 VALUES ('$Name','$Designation','$Dob','$Employer','$Mobile','$E-Mail','$other')") ; 
 
 
 header("Location: success.html");
 ?>
<?php ob_end_flush(); ?>