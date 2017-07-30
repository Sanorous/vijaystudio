<?php ob_start(); ?>
<?
//the example of inserting data with variable from HTML form
//input.php
mysql_connect(“50.62.209.123:3306”,”studio”,”vijay@123”);//database connection
mysql_select_db(“vijay”);

//This gets all the other information from the form 
 $unqid=$_POST['unqid'] ; //1
 $date1=$_POST['date1'] ; //2
 $date2=$_POST['date2'] ;  //3
 $days= $_POST['days'] ; //4
 $payband= $_POST['payband'] ; //5
 $gradepay= $_POST['gradepay'] ; //6
 $old_payband= $_POST['old_payband'] ; //7
 $old_gradepay= $_POST['old_gradepay'] ; //8
 $basic= $_POST['basic'] ; //9
 $da= $_POST['da'] ; //10
 $hra= $_POST['hra'] ; //11
 $cca= $_POST['cca'] ; //12
 $gis= $_POST['gis'] ; //13
 $pa= $_POST['pa'] ; //14
 $total= $_POST['total'] ; //15
 $old_basic= $_POST['old_basic'] ; //16
 $old_hra= $_POST['old_hra'] ; //17
 $old_cca= $_POST['old_cca'] ; //18
 $old_gis= $_POST['old_gis'] ; //19
 $old_pa= $_POST['old_pa'] ; //20
 $old_total= $_POST['old_total'] ; //21
 $basic2= $_POST['basic2'] ; //22
 $basic1= $_POST['basic1'] ; //23
 $da2= $_POST['da2'] ; //24
 $da1= $_POST['da1'] ; //25
 $hra2= $_POST['hra2'] ; //26
 $hra1= $_POST['hra1'] ; //27
 $cca2= $_POST['cca2'] ; //28
 $cca1= $_POST['cca1'] ; //29
 $gis2= $_POST['gis2'] ; //30
 $gis1= $_POST['gis1'] ; //31
 $pa2= $_POST['pa2'] ; //32
 $pa1= $_POST['pa1'] ; //33
 $total10= $_POST['total10'] ; //34
 $total11= $_POST['total11'] ; //35
 $diff_basic= $_POST['diff_basic'] ; //36
 $diff_da= $_POST['diff_da'] ; //37
 $diff_hra= $_POST['diff_hra'] ; //38
 $diff_cca= $_POST['diff_cca'] ; //39
 $diff_gis= $_POST['diff_gis'] ; //40
 $diff_pa= $_POST['diff_pa'] ; //41
 $fftotal= $_POST['fftotal'] ; //42
 
//inserting data order
$order = "INSERT INTO calculations (unqid, date1, date2, days, payband, gradepay, old_payband, old_gradepay, basic, da, hra, cca, gis, pa, total, old_basic, old_hra, old_cca, old_gis, old_pa, old_total, basic2, basic1, da2, da1, hra2, hra1, cca2, cca1, gis2, gis1, pa2, pa1, total10, total11, diff_basic, diff_da, diff_hra, diff_cca, diff_gis, diff_pa, fftotal )
			VALUES
			('$unqid', '$date1', '$date2', '$days', '$payband', '$gradepay', '$old_payband', '$old_gradepay', '$basic', '$da', '$hra', '$cca', '$gis', '$pa', '$total', '$old_basic', '$old_hra', '$old_cca', '$old_gis', '$old_pa', '$old_total',  '$basic2', '$basic1', '$da2', '$da1', '$hra2', '$hra1', '$cca2', '$cca1', '$gis2', '$gis1', '$pa2', '$pa1', '$total10', '$total11', '$diff_basic', '$diff_da', '$diff_hra', '$diff_cca', '$diff_gis', '$diff_pa', '$fftotal')"; 

//declare in the order variable
$result = mysql_query($order);	//order executes
if(success)
{
    echo '
        <script type="text/javascript">
            alert("Congratulation: Your entries have been added Successfully"); 
            window.location.href = "http://localhost/payroll6/jaybabani.com/ultra-admin/cal.php";</script>';  
}
 else{ 
	echo("<br>Input data is fail");
}
?>
<?php ob_end_flush(); ?>