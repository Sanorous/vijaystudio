<?php ob_start(); ?>
<?
//the example of inserting data with variable from HTML form
//input.php
mysql_connect("localhost","root","");//database connection
mysql_select_db("payroll");

//This gets all the other information from the form 
 $unqid=$_POST['unqid'] ;
 $Name=$_POST['Name'] ;
 $Designation= $_POST['Designation'] ;
 $OrderNo= $_POST['OrderNo'] ;
 $Date= $_POST['Date'] ;
   
//inserting data order
$order = "INSERT INTO details (unqid, Name, Designation, OrderNo, Date)
			VALUES
			('$unqid', '$Name', '$Designation', '$OrderNo', '$Date')"; 

//declare in the order variable
$result = mysql_query($order);	//order executes
if(success)
{
    echo '
        <script type="text/javascript">
            alert("Congratulation: You have been added Successfully"); 
            window.location.href = "http://localhost/payroll6/jaybabani.com/ultra-admin/cal.php";</script>';  
}
//} else{ 
	//echo("<br>Input data is fail");
//}
?>
<?php ob_end_flush(); ?>