<?php
include('session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Invoice for Vijay Studio</title>
	
	<link rel='stylesheet' type='text/css' href='css/style1.css' />
	<link rel='stylesheet' type='text/css' href='css/print1.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example1.js'></script>

</head>

<body>

<?php
require("db.php");
$id =$_REQUEST['Id'];
$result = mysql_query("SELECT * FROM client WHERE Id  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$Id= $test['Id'];
				$Name= $test['Name'] ;
				$Mobile= $test['Mobile'] ;
				$Email= $test['Email'] ;
                $Address= $test['Address'] ;
                $Date= $test['Date'] ;
                $Occasion= $test['Occasion'] ;
                $Occasion_date= $test['Occasion_date'] ;
                $Time= $test['Time'] ;
                $Venue= $test['Venue'] ;
                $Camera= $test['Camera'] ;
                $Video= $test['Video'] ;
                $Crane= $test['Crane'] ;
                $Occasion1= $test['Occasion1'] ;
                $Occasion_date1= $test['Occasion_date1'] ;
                $Time1= $test['Time1'] ;
                $Venue1= $test['Venue1'] ;
                $Camera1= $test['Camera1'] ;
                $Video1= $test['Video1'] ;
                $Crane1= $test['Crane1'] ;
                $Occasion2= $test['Occasion2'] ;
                $Occasion_date2= $test['Occasion_date2'] ;
                $Time2= $test['Time2'] ;
                $Venue2= $test['Venue2'] ;
                $Camera2= $test['Camera2'] ;
                $Video2= $test['Video2'] ;
                $Crane2= $test['Crane2'] ;
                $Occasion3= $test['Occasion3'] ;
                $Occasion_date3= $test['Occasion_date3'] ;
                $Time3= $test['Time3'] ;
                $Venue3= $test['Venue3'] ;
                $Camera3= $test['Camera3'] ;
                $Video3= $test['Video3'] ;
                $Crane3= $test['Crane3'] ;
                $Occasion4= $test['Occasion4'] ;
                $Occasion_date4= $test['Occasion_date4'] ;
                $Time4= $test['Time4'] ;
                $Venue4= $test['Venue4'] ;
                $Camera4= $test['Camera4'] ;
                $Video4= $test['Video4'] ;
                $Crane4= $test['Crane4'] ;
                $Book_type= $test['Book_type'] ;
                $Photobook_size= $test['Photobook_size'] ;
                $Album_cover= $test['Album_cover'] ;
                $Paper_type= $test['Paper_type'] ;
                $Color_code= $test['Color_code'] ;
                $Calendars= $test['Calendars'] ;
                $Pages= $test['Pages'] ;
                $Sheets= $test['Sheets'] ;
                $other_canverra= $test['other_canverra'] ;
                $other_canverra1= $test['other_canverra1'] ;
                $Total= $test['Total'] ;
                $Advance= $test['Advance'] ;
                $Balance= $test['Balance'] ;
                $Others= $test['Others'] ;
                                			
if(isset($_POST['save']))
{	
	$Name_save = $_POST['Name'];
	$Designation_save = $_POST['Designation'];
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


	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>
		
		<div id="">
                
              </div>
              <table style="border:hidden">
              <tr>
              <td><img id="image" width="200px" hieght="111px" src="images/logo3.jpg" alt="logo" /></td>
              <td><p style="font-size:42px; text-align:center; text-decoration:underline" ><font face="copperplate">VIJAY STUDIO</font></p> 
              <p style="font-size:16px; text-align:center;"><font face="candara"> 9-A New Janpath Complex, Opp Income Tax Office, Ashok Marg, Hazratganj, Lucknow.</font></p>
              <p style="font-size:16px;"><font face="candara"><b>Phone:</b> +91 9450 525252; +91 9415 577610</font></p>
              <p><span style="font-size:16px;"><font face="candara"><b>E-mail:</b> vijaystudio610@gmail.com</font></span></p>
              <p style="font-size:16px;"><font face="candara"><span style=""><b>Website:</b> www.vijaystudiolko.com  </span><span style="padding-left:10px"><b>Facebook:</b> facebook.com/vijaystudiolko</span></font></p> </td>
              </tr></table>
            </div>
            
            
		<!--<div id="identity">
		
            <textarea id="address">9-A New Janpath Complex
Opp Income Tax Office, Ashok Marg,
Hazratganj, Lucknow.

Phone: +91 9450 525252</textarea>

            <div id="logo">

              
              
		
		</div>
		
		<div style="clear:both"></div>-->
		
		<div id="page-wrap">
		<div id="customer">
<hr/><br />
			
			<table><tr>
			<td style="width:70%">
			<p> <font face="candara"><b>Name:</b><?php echo "<span style ='font:18px; color:black; padding-left:5px'>". $Name ."</span>" ?> <br />
             <b>Address:</b><?php echo "<span style ='font:18px; color:black; padding-left:5px'>". $Address ."</span>" ?><br />
             <b>Contact:</b><?php echo "<span style ='font:18px; color:black; padding-left:5px'>". $Mobile ."</span>" ?></font></p>
             </td>

           <td style="width:30%">
            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><!--<textarea>-->00<?php echo $Id ?><!--</textarea>--></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><?php echo $Date ?></td>
                </tr>
                <!--<tr>
                    <td class="meta-head">Amount Due</td>
					<td><div class="due">Rs.<?php echo $Balance ?>/-</div></td>
                </tr>-->

            </table></td></tr></table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th style="width:25%">Date (mm/dd/yyyy)</th>
		      <th style="width:30%">Ocassion</th>
		      <th style="width:30%">Venue</th>
		      <th style="width:15%">Time</th>
		  </tr>
		  <!--style="text-align:center"-->
		  <tr class="item-row">
			  <td class="description" style="width:25%; border:1px"><?php echo $Occasion_date ?></td>
		      <td class="item-name" style="width:30%; border:1px"><?php echo $Occasion ?></td>
		      <td class="cost" style="width:30%; border:1px"><?php echo $Venue ?></td>
		      <td class="qty" style="width:15%; border:1px"><?php echo $Time ?></td>
		      
		  </tr>
		  
		  <tr class="item-row">
		      <td class="description"><?php echo $Occasion_date1 ?></td>
		      <td class="item-name"><?php echo $Occasion1 ?></td>
		      <td class="cost"><?php echo $Venue1 ?></td>
		      <td class="qty"><?php echo $Time1 ?></td>
		      
		  </tr>
		  
		  <tr class="item-row">
		      <td class="description"><?php echo $Occasion_date2 ?></td>
		      <td class="item-name"><?php echo $Occasion2 ?></td>
		      <td class="cost"><?php echo $Venue2 ?></td>
		      <td class="qty"><?php echo $Time2 ?></td>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="description"><?php echo $Occasion_date3 ?></td>
		      <td class="item-name"><?php echo $Occasion3 ?></td>
		      <td class="cost"><?php echo $Venue3 ?></td>
		      <td class="qty"><?php echo $Time3 ?></td>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="description"><?php echo $Occasion_date4 ?></td>
		      <td class="item-name"><?php echo $Occasion4 ?></td>
		      <td class="cost"><?php echo $Venue4 ?></td>
		      <td class="qty"><?php echo $Time4 ?></td>
		  </tr>
		  </table>
		
		  <table id="items">
		
		  <tr>
		      <th style="width:12%">Book Type</th>
		      <th style="width:12%">Photobook Size</th>
		      <th style="width:12%">Album Cover</th>
		      <th style="width:12%">Paper Type</th>
		      <th style="width:12%">Color Code</th>
		      <th style="width:12%">Calendars</th>
		      <th style="width:12%">Pages</th>
		      <th style="width:12%">Sheets</th>
		      <th style="width:12%">Other</th>
		  </tr>
		  <!--style="text-align:center"-->
		  <tr class="item-row">
			  <td style="width:12%"><?php echo $Book_type ?></td>
		      <td style="width:12%"><?php echo $Photobook_size ?></td>
		      <td style="width:12%"><?php echo $Album_cover ?></td>
		      <td style="width:12%"><?php echo $Paper_type ?></td>
		      <td style="width:12%"><?php echo $Color_code ?></td>
		      <td style="width:12%"><?php echo $Calendars ?></td>
		      <td style="width:12%"><?php echo $Pages ?></td>
		      <td style="width:12%"><?php echo $Sheets ?></td>
		      <td style="width:12%"><?php echo $Other_canverra ?></td>
		      <!--<td class="qty" style="width:15%; border:1px"><?php echo $Time ?></td>-->
		      
		  </tr>
		  
		  
		  </table>
            <br />
		  
		  <table id="meta">
                <tr>
                    <td class="meta-head">Total</td>
                    <td><!--<textarea>-->Rs. <?php echo $Total ?>/-<!--</textarea>--></td>
                </tr>
                <tr>

                    <td class="meta-head">Advance</td>
                    <td>Rs. <?php echo $Advance ?>/-</td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
					<td><div class="due" style="font-weight:bold">Rs. <?php echo $Balance ?>/-</div></td>
                </tr>

            </table>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br /> 
            <br />
            <br />
		
		<div id="">
		  <h3 style="text-align:center; text-decoration:underline">Terms & Conditions</h3>
		 <p>1. 20% of Total amount should be given at the time of Booking. 50% should be given on the day of Occasion and the left 30% will be given on delivering the data. </p>
		 <p>2. 100% of LED Wall, LCD plasma & CRANE charges will be given at the time of booking.</p>
		 <p>3. Data should be taken within 2 months else there will be no responsibility of studio. </p>
		 <p>4. No responsibilities of studio for Digital Camera and Video Camera technical issues </p>
		 <p>5. Convenience Charges for venue will be given by Client.</p>
		 <p>6. All sorts of disputes will be subject to Lucknow High Court.</p>
		 <p>7. During the programme, Photographer and his instruments responsibility will be of Client. </p>
		 <p>8. During the uses of arms in programme, camera will be off.</p>
		 <p>9. Photos and data will not be given in Pen Drive and Hard Disk.</p>
		</div>
	
	</div>
	
</body>

</html>