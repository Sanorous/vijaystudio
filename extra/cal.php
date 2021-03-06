﻿
<!DOCTYPE html>
<html class=" ">
    
<head>
        <!-- 
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 1.0
         * This file is part of Ultra Admin Theme.
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Payroll : Vidhan Sabha Sachivalaya</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->
            

        <!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datepicker/css/datepicker.css" rel="stylesheet" type="text/css" media="screen"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
        <link href="assets/plugins/icheck/skins/minimal/minimal.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 

     <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/datepicker/css/datepicker.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/daterangepicker/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/timepicker/css/timepicker.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/datetimepicker/css/datetimepicker.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/ios-switch/css/switch.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/typeahead/css/typeahead.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/multi-select/css/multi-select.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 

        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->
        
       <script language=javascript>
<!--//

function dm(amount) 
{
  string = "" + amount;
  dec = string.length - string.indexOf('.');
  if (string.indexOf('.') == -1)
  return string + '.00';
  if (dec == 1)
  return string + '00';
  if (dec == 2)
  return string + '0';
  if (dec > 3)
  return string.substring(0,string.length-dec+3);
  return string;
}



function calculate()
{

  QtyA = 0;  QtyB = 0;  QtyC = 0;
  TotA = 0;  TotB = 0;  TotC = 0;

  PrcA = 1.25; PrcB = 2.35; PrcC = 3.45;

 
 
  if (document.ofrm.qtyA.value > "")
     { QtyA = document.ofrm.qtyA.value };
  document.ofrm.qtyA.value = eval(QtyA);  
 
  if (document.ofrm.qtyB.value > "")
     { QtyB = document.ofrm.qtyB.value };
  document.ofrm.qtyB.value = eval(QtyB);  
 
  if (document.ofrm.qtyC.value > "")
     { QtyC = document.ofrm.qtyC.value };
  document.ofrm.qtyC.value = eval(QtyC);
 
 
  TotA = QtyA * PrcA;
  document.ofrm.totalA.value = dm(eval(TotA));
 
  TotB = QtyB * PrcB;
  document.ofrm.totalB.value = dm(eval(TotB));
 
  TotC = QtyC * PrcC;
  document.ofrm.totalC.value = dm(eval(TotC));
 
 
  Totamt = 
     eval(TotA) +
     eval(TotB) +
     eval(TotC) ;
    
  document.ofrm.GrandTotal.value = dm(eval(Totamt));
  
} 


function validNum(theForm)
{
  var checkOK = "0123456789.,";
  var checkStr = theForm.qtyA.value;
  var allValid = true;
  var validGroups = true;
  var decPoints = 0;
  var allNum = "";
  for (i = 0;  i < checkStr.length;  i++)
  {
    ch = checkStr.charAt(i);
    for (j = 0;  j < checkOK.length;  j++)
      if (ch == checkOK.charAt(j))
        break;
    if (j == checkOK.length)
    {
      allValid = false;
      break;
    }
    if (ch == ".")
    {
      allNum += ".";
      decPoints++;
    }
    else if (ch == "," && decPoints != 0)
    {
      validGroups = false;
      break;
    }
    else if (ch != ",")
      allNum += ch;
  }
  if (!allValid)
  {
    alert("Please enter only digit characters in the \"Class A quantity\" field.");
    theForm.qtyA.focus();
    return (false);
  }

  if (decPoints > 1 || !validGroups)
  {
    alert("Please enter a valid number in the \"Class A quantity\" field.");
    theForm.qtyA.focus();
    return (false);
  }

  var checkOK = "0123456789.,";
  var checkStr = theForm.qtyB.value;
  var allValid = true;
  var validGroups = true;
  var decPoints = 0;
  var allNum = "";
  for (i = 0;  i < checkStr.length;  i++)
  {
    ch = checkStr.charAt(i);
    for (j = 0;  j < checkOK.length;  j++)
      if (ch == checkOK.charAt(j))
        break;
    if (j == checkOK.length)
    {
      allValid = false;
      break;
    }
    if (ch == ".")
    {
      allNum += ".";
      decPoints++;
    }
    else if (ch == "," && decPoints != 0)
    {
      validGroups = false;
      break;
    }
    else if (ch != ",")
      allNum += ch;
  }
  if (!allValid)
  {
    alert("Please enter only digit characters in the \"Class B quantity\" field.");
    theForm.qtyB.focus();
    return (false);
  }

  if (decPoints > 1 || !validGroups)
  {
    alert("Please enter a valid number in the \"Class B quantity\" field.");
    theForm.qtyA.focus();
    return (false);
  }

  var checkOK = "0123456789.,";
  var checkStr = theForm.qtyC.value;
  var allValid = true;
  var validGroups = true;
  var decPoints = 0;
  var allNum = "";
  for (i = 0;  i < checkStr.length;  i++)
  {
    ch = checkStr.charAt(i);
    for (j = 0;  j < checkOK.length;  j++)
      if (ch == checkOK.charAt(j))
        break;
    if (j == checkOK.length)
    {
      allValid = false;
      break;
    }
    if (ch == ".")
    {
      allNum += ".";
      decPoints++;
    }
    else if (ch == "," && decPoints != 0)
    {
      validGroups = false;
      break;
    }
    else if (ch != ",")
      allNum += ch;
  }
  if (!allValid)
  {
    alert("Please enter only digit characters in the \"Class C quantity\" field.");
    theForm.qtyC.focus();
    return (false);
  }

  if (decPoints > 1 || !validGroups)
  {
    alert("Please enter a valid number in the \"Class C quantity\" field.");
    theForm.qtyC.focus();
    return (false);
  }


  calculate();
  return (true);
} 


//-->
</script>      
                    
    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
        <div class='page-topbar '>
            <div class='logo-area'>

            </div>
            <div class='quick-area'>
                <div class='pull-left'>
                    <ul class="info-menu left-links list-inline list-unstyled">
                        <li class="sidebar-toggle-wrap">
                            <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        
                        <li class="">Pradeep Verma</li>
                        <li class="">Arjun Singh</li>
                        <li class="hidden-sm hidden-xs searchform">
</li>
                    </ul>
                </div>		
                <div class='pull-right'>
                    <ul class="info-menu right-links list-inline list-unstyled">
                        <li class="profile">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <img src="data/profile/profile.png" alt="user-image" class="img-circle img-inline">
                                <span>Admin <i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu profile animated fadeIn">
                                <li>
                                    <a href="#settings">
                                        <i class="fa fa-wrench"></i>
                                        Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#profile">
                                        <i class="fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#help">
                                        <i class="fa fa-info"></i>
                                        Help
                                    </a>
                                </li>
                                <li class="last">
                                    <a href="ui-login.html">
                                        <i class="fa fa-lock"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>			
                </div>		
            </div>

        </div>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <div class="page-sidebar ">


                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

                    <!-- USER INFO - START -->
                    <div class="profile-info row">

                        <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                            <a href="ui-profile.html">
                                <img src="data/profile/profile.png" class="img-responsive img-circle">
                            </a>
                        </div>

                        <div class="profile-details col-md-8 col-sm-8 col-xs-8">

                            <h3>
                                <a href="ui-profile.html">Admin</a>

                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="profile-status online"></span>
                            </h3>

                            <p class="profile-title">Payroll</p>

                        </div>

                    </div>
                    <!-- USER INFO - END -->



                    <ul class='wraplist'>	
                        <li class=""> 
                            <a href="index-2.html">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">Homepage</span>
                            </a>
                        </li>
                       
                            <li class="">
                            <a href="javascript:;">
                                <i class="fa fa-sliders"></i>
                                <span class="title">Forms</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="form-elements.html">Form Elements</a>
                                </li>
                                <li>
                                    <a class="" href="form-components.html">Form Components</a>
                                </li>
                                <li>
                                    <a class="" href="form-wizard.html">Form Wizard</a>
                                </li>
                                <li>
                                    <a class="" href="form-validation.html">Form Validations</a>
                                </li>
                                <li>
                                    <a class="" href="form-fileupload.html">File Upload & Dropzone</a>
                                </li>
                                <li>
                                    <a class="" href="form-editors.html">Editors</a>
                                </li>
                                <li>
                                    <a class="" href="form-masks.html">Input Masks</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-gift"></i>
                                <span class="title">Extra</span>
                                <span class="arrow "></span><span class="label label-orange">NEW</span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-invoice.html">Invoice</a>
                                </li>
                                
                                <li>
                                    <a class="" href="ui-lockscreen.html">Lock Screen</a>
                                </li>
                            </ul>
                        </li>
                        
                        
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-table"></i>
                                <span class="title">Tables</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="tables-basic.html">Basic tables</a>
                                </li>
                                <li>
                                    <a class="" href="tables-data.html">Data Tables</a>
                                </li>
                                <li>
                                    <a class="" href="tables-responsive.html">Responsive Tables</a>
                                </li>
                            </ul>
                        </li>
                        
                        
                    </ul>

                </div>
                <!-- MAIN MENU - END -->



               



            </div>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

<div class="pull-left"><h2 class="title">Calculations</h2>                      </div>
<div class="clearfix"></div>
                    <!--php code start-->
                       
                       
				<form method="POST" action="submit1.php" name="ofrm">
				<table border="2" cellpadding="0" width="100%" id="table2">
							
                            <tr>

                                <td style="width:40%">Date Range:
                                <input type="text" size="15" name="date1" id="date1">
								<input type="text" size="15" name="date2" id="date2">
								Total Days:<input type="text" size="8" id="days" name="days"></td>
                                <td style="width:20%">Pay Band: 
                                <select size="1" id="payband" class="validate['required']" title="" type="select" name="payband">
								<option value="">Select a Pay Band</option>
								<option value="5200-20200">5200-20200</option>
								<option value="9300-34800">9300-34800</option>
								<option value="15600-37900">15600-37900</option>
								<option value="37400-67000">37400-67000</option>
								</select></td>

                                <td style="width:25%">Grade Pay:
                                
                                <select id="5200-20200"  class="gradepay"  style="display: none;" name="gradepay" onchange="ChangeDropdowns(this.value)">
      <option value="">select a Grade Pay</option> 
      <option value="1800" data-hra="1100" data-cca="170" data-gis="100">1800</option>
      <option value="1900" data-hra="1160" data-cca="240" data-gis="100">1900</option>
      <option value="2000" data-hra="1200" data-cca="240" data-gis="100">2000</option>
      <option value="2400" data-hra="1470" data-cca="240" data-gis="100">2400</option>
      <option value="2800" data-hra="1670" data-cca="240" data-gis="100">2800</option>
      </select>
      
      <select id="9300-34800"  class="gradepay"  style="display: none;" name="gradepay" onchange="ChangeDropdowns(this.value)">
      <option value="">select a Grade Pay</option> 
      <option value="4200" data-hra="2020" data-cca="360" data-gis="200">4200</option>
      <option value="4600" data-hra="2760" data-cca="360" data-gis="200">4600</option>
      <option value="4800" data-hra="2810" data-cca="360" data-gis="200">4800</option>
      </select>
      
      <select id="15600-37900"  class="gradepay"  style="display: none;" name="gradepay" onchange="ChangeDropdowns(this.value)">
      <option value="">select a Grade Pay</option> 
      <option value="5400" data-hra="3150" data-cca="360" data-gis="200">5400</option>
      <option value="6600" data-hra="3780" data-cca="450" data-gis="400">6600</option>
      <option value="7600" data-hra="4480" data-cca="450" data-gis="400">7600</option>
      </select>
      
      <select id="37400-67000"  class="gradepay"  style="display: none;" name="gradepay" onchange="ChangeDropdowns(this.value)">
      <option value="">select a Grade Pay</option> 
      <option value="8700" data-hra="6910" data-cca="450" data-gis="400">8700</option>
      <option value="8900" data-hra="7280" data-cca="450" data-gis="400">8900</option>
      <option value="10000" data-hra="8200" data-cca="450" data-gis="400">10000</option>
      </select>
</td>
                   </tr>
                                               <tr>
								<td style="width:40%">Please fill the Id as above : <input type="text" name="unqid" size="20" tabindex="1" value="<?php echo $user['unqid']; ?>"></td>
								<td style="width:20%">Old Pay Band: 
                                <select size="1" id="old_payband" class="validate['required']" title="" type="select" name="old_payband">
								<option value="">Select a Pay Band</option>
								<option value="old_5200-20200">5200-20200</option>
								<option value="old_9300-34800">9300-34800</option>
								<option value="old_15600-37900">15600-37900</option>
								<option value="old_37400-67000">37400-67000</option>
								</select></td>

                                <td style="width:25%">Grade Pay:
                                
                                <select id="old_5200-20200"  class="old_gradepay"  style="display: none;" name="old_gradepay" onchange="ChangeDropdowns(this.value)">
      <option value="">select a Grade Pay</option> 
      <option value="1800" data-old_hra="1100" data-old_cca="170" data-old_gis="100">1800</option>
      <option value="1900" data-old_hra="1160" data-old_cca="240" data-old_gis="100">1900</option>
      <option value="2000" data-old_hra="1200" data-old_cca="240" data-old_gis="100">2000</option>
      <option value="2400" data-old_hra="1470" data-old_cca="240" data-old_gis="100">2400</option>
      <option value="2800" data-old_hra="1670" data-old_cca="240" data-old_gis="100">2800</option>
      </select>
      
      <select id="old_9300-34800"  class="old_gradepay"  style="display: none;" name="old_gradepay" onchange="ChangeDropdowns(this.value)">
      <option value="">select a Grade Pay</option> 
      <option value="4200" data-old_hra="2020" data-old_cca="360" data-old_gis="200">4200</option>
      <option value="4600" data-old_hra="2760" data-old_cca="360" data-old_gis="200">4600</option>
      <option value="4800" data-old_hra="2810" data-old_cca="360" data-old_gis="200">4800</option>
      </select>
      
      <select id="old_15600-37900"  class="old_gradepay"  style="display: none;" name="old_gradepay" onchange="ChangeDropdowns(this.value)">
      <option value="">select a Grade Pay</option> 
      <option value="5400" data-old_hra="3150" data-old_cca="360" data-old_gis="200">5400</option>
      <option value="6600" data-old_hra="3780" data-old_cca="450" data-old_gis="400">6600</option>
      <option value="7600" data-old_hra="4480" data-old_cca="450" data-old_gis="400">7600</option>
      </select>
      
      <select id="old_37400-67000"  class="old_gradepay"  style="display: none;" name="old_gradepay" onchange="ChangeDropdowns(this.value)">
      <option value="">select a Grade Pay</option> 
      <option value="8700" data-old_hra="6910" data-old_cca="450" data-old_gis="400">8700</option>
      <option value="8900" data-old_hra="7280" data-old_cca="450" data-old_gis="400">8900</option>
      <option value="10000" data-old_hra="8200" data-old_cca="450" data-old_gis="400">10000</option>
      </select>
</td>
                   </tr>
                            </table>
                            <br />
                            
                            
                        <table border="2" cellpadding="0" width="100%" id="dataTable">

                            <tr>

                                <td style="width:30%">
                                <input type="text" name="basic" id="basic" size="5" placeholder="Basic" onblur="calculateForm()">
                                <input type="text" name="da" id="da" size="3" placeholder="D.A." onblur="calculateForm()">
                                <input type="text" name="hra" id="hra" size="4" placeholder="H.R.A" onblur="calculateForm1()">
                                <input type="text" name="cca" id="cca" size="3" placeholder="C.C.A." onblur="calculateForm1()">
                                <input type="text" name="gis" id="gis" size="3" placeholder="GIS" onblur="calculateForm1()">
                                <input type="text" name="pa" id="pa" size="4" placeholder="Other" onblur="calculateForm1()">
                                <input type="text" name="total" size="6" placeholder="G. Total" id="total" onblur="roundNumber()">
                                </td>
                                <td style="width:30%">
                              <input type="text" name="old_basic" id="old_basic" size="5" placeholder="Basic" onblur="calculateForm2()">
                                <input type="text" name="old_hra" id="old_hra" size="4" placeholder="H.R.A" onblur="calculateForm3()">
                                <input type="text" name="old_cca" id="old_cca" size="3" placeholder="C.C.A" onblur="calculateForm3()">
                                <input type="text" name="old_gis" id="old_gis" size="3" placeholder="GIS" onblur="calculateForm3()">
                                <input type="text" name="old_pa" id="old_pa" size="4" placeholder="Other" onblur="calculateForm3()">
                                <input type="text" name="old_total" id="old_total" size="5" placeholder="Total" onblur="roundNumber()">
                                </td>

                        <td style="width:30%">
        <input type="text" name="basic2" id="basic2" size="7" placeholder="Basic New" onblur="calculateForm4()">-
        <input type="text" name="basic1" id="basic1" size="7" placeholder="Basic Old" onblur="calculateForm4()">=<br />
       	<input type="text" name="da2" id="da2" size="7" placeholder="D.A. New" onblur="calculateForm4()">-
        <input type="text" name="da1" id="da1" size="7" placeholder="D.A. Old" onblur="calculateForm4()">=<br />
        <input type="text" name="hra2" id="hra2" size="7" placeholder="H.R.A New" onblur="calculateForm4()">-
        <input type="text" name="hra1" id="hra1" size="7" placeholder="H.R.A Old" onblur="calculateForm4()">=<br />
        <input type="text" name="cca2" id="cca2" size="7" placeholder="C.C.A. New" onblur="calculateForm4()">-
        <input type="text" name="cca1" id="cca1" size="7" placeholder="C.C.A. Old" onblur="calculateForm4()">=<br />
        <input type="text" name="gis2" id="gis2" size="7" placeholder="GIS New" onblur="calculateForm4()">-
    	<input type="text" name="gis1" id="gis1" size="7" placeholder="GIS Old" onblur="calculateForm4()">=<br />
        <input type="text" name="total10" id="total10" size="7" placeholder="Total New" onblur="calculateForm5()">-
        <input type="text" name="total11" id="total11" size="7" placeholder="Total Old" onblur="calculateForm5()">=
            </td>
    	    <td style="width:30%">
       	<input type="text" name="diff_basic" id="diff_basic" size="14" placeholder="Basic Difference" onblur="calculateForm6()"><br />
       	<input type="text" name="diff_da" id="diff_da" size="14" placeholder="D.A. Difference" onblur="calculateForm6()"><br />
    	<input type="text" name="diff_hra" id="diff_hra" size="14" placeholder="H.R.A Difference" onblur="calculateForm6()"><br />
        <input type="text" name="diff_cca" id="diff_cca" size="14" placeholder="C.C.A. Difference" onblur="calculateForm6()"><br />
        <input type="text" name="diff_gis" id="diff_gis" size="14" placeholder="GIS Difference" onblur="calculateForm6()"><br />
        <input type="text" name="fftotal" id="fftotal" size="14" placeholder="Total Diff." onblur="calculateForm7()">
        	</td>
                                
                                <!--<td style="width:30%">
                                <input type="text" name="basic" id="basic" size="5" placeholder="Basic" onblur="calculateForm()">
                                <input type="text" name="da" id="da" size="3" placeholder="D.A." onblur="calculateForm()">
                                <input type="text" name="total" size="5" placeholder="Total" id="total1">
                                <input type="text" name="hra" id="hra" size="5" placeholder="H.R.A" onblur="calculateForm1()">
                                <input type="text" name="cca" id="cca" size="5" placeholder="C.C.A." onblur="calculateForm1()">
                                <input type="text" name="gis" id="gis" size="5" placeholder="GIS" onblur="calculateForm1()">
                                <input type="text" name="pa" id="pa" size="5" placeholder="Other" onblur="calculateForm1()">
                                <input type="text" name="total" size="8" placeholder="Total" id="total2">
                                </td>-->

                                              

                            </tr>
                            
                            <!--<tr>

                                <td style="width:40%">Total Salary</td>

                                <td style="width:30%">Drawn</td>

                                <td style="width:30%">Arrear</td>               

                            </tr>-->
							
							

                         
		</table>
			
			
			
                        <table border="0" cellpadding="0" width="550" id="table3">
                            <tr>
                                <td width="563">
                                    <p align="center">
                                    <input type="submit" value="Submit" name="subButton" tabindex="50">&nbsp;&nbsp;&nbsp;&nbsp; 
                                    <input type="reset" value="Reset" name="resetButton" tabindex="50"></td>
                            </tr>
                        </table>
                    </form>
                    
                    <table border="1">
                       <tr align='center' style="color:brown">
				<td width='7%'><font color='brown'> Id</font></td>
				<td width='7%'><font color='brown'>Days</font></td>
				<td width='7%'><font color='brown'>Basic</font></td>
				<td width='7%'><font color='brown'>D.A.</font></td>
				<td width='7%'><font color='brown'>H.R.A.</font></td>
				<td width='7%'><font color='brown'>C.C.A.</font></td>
				<td width='7%'><font color='brown'>G.I.S.</font></td>
				<td width='7%'><font color='brown'>P.A.</font></td>
				<td width='7%'><font color='brown'>Total</font></td>
				<td width='7%'><font color='brown'>Basic</font></td>
				<td width='7%'><font color='brown'>H.R.A.</font></td>
				<td width='7%'><font color='brown'>C.C.A.</font></td>
				<td width='7%'><font color='brown'>G.I.S.</font></td>
				<td width='7%'><font color='brown'>P.A.</font></td>
				<td width='7%'><font color='brown'>Total</font></td>
				<td width='7%'><font color='brown'>Basic</font></td>
				<td width='7%'><font color='brown'>D.A.</font></td>
				<td width='7%'><font color='brown'>H.R.A</font></td>
				<td width='7%'><font color='brown'>C.C.A.</font></td>
				<td width='7%'><font color='brown'>G.I.S.</font></td>
				<td width='7%'><font color='brown'>P.A.</font></td>
				<td width='7%'><font color='brown'>Total</font></td>
				<td widht='7%'>Edit </td>
				<td width='7%'>Delete</td>						
				</tr>
	
			<?php
			include("db.php");
			$id =$_REQUEST['unqid'];
			$result = mysql_query("SELECT * FROM calculations WHERE unqid  = '$id'");
			$test = mysql_fetch_array($result);
			{
								
				$id = $test['unqid'];	
				
				echo "<tr align='center'>";	
				echo"<td width='7%'><font color='black'>" .$test['unqid']."</font></td>";
				echo"<td width='7%'><font color='black'>" .$test['days']."</font></td>";
				echo"<td width='7%'><font color='black'>" .$test['basic']."</font></td>";
				echo"<td width='7%'><font color='black'>" .$test['da']."</font></td>";
				echo"<td width='7%'><font color='black'>". $test['hra']. "</font></td>";
				echo"<td width='7%'><font color='black'>". $test['cca']. "</font></td>";
				echo"<td width='7%'><font color='black'>". $test['gis']. "</font></td>";
				echo"<td width='7%'><font color='black'>". $test['pa']. "</font></td>";
				echo"<td width='7%'><font color='black'>". $test['total']. "</font></td>";
				echo"<td width='7%'><font color='black'>" .$test['old_basic']."</font></td>";
				echo"<td width='7%'><font color='black'>". $test['old_hra']. "</font></td>";
				echo"<td width='7%'><font color='black'>". $test['old_cca']. "</font></td>";
				echo"<td width='7%'><font color='black'>". $test['old_gis']. "</font></td>";
				echo"<td width='7%'><font color='black'>". $test['old_pa']. "</font></td>";
				echo"<td width='7%'><font color='black'>". $test['old_total']. "</font></td>";
				echo"<td width='7%'><font color='black'>" .$test['diff_basic']."</font></td>";
				echo"<td width='7%'><font color='black'>" .$test['diff_da']."</font></td>";
				echo"<td width='7%'><font color='black'>". $test['diff_hra']. "</font></td>";
				echo"<td width='7%'><font color='black'>". $test['diff_cca']. "</font></td>";
				echo"<td width='7%'><font color='black'>". $test['diff_gis']. "</font></td>";
				echo"<td width='7%'><font color='black'>". $test['diff_pa']. "</font></td>";
				echo"<td width='7%'><font color='black'>". $test['fftotal']. "</font></td>";
				echo"<td widht='7%'> <a href ='view.php?unqid=$id'>Edit</a>";
				echo"<td width='7%'> <a href ='del.php?unqid=$id'><center>Delete</center></a>"; 
									
				echo "</tr>";
			}
			mysql_close($conn);
			?>
</table>
	
                   <table border="2" cellpadding="0" width="100%" id="dataTable">
			<!--<tr>
			

                               <input type="button" value="Add Row" onclick="addRow('dataTable')">             

                            </tr>-->
		<tr>
			<td width="250">
								<input type="text" name="basic" id="basic" size="5" placeholder="Basic" onblur="calculateForm()">
                                <input type="text" name="da" id="da" size="3" placeholder="D.A." onblur="calculateForm()">
                                <input type="text" name="total" size="5" placeholder="Total" id="total1">
                                <input type="text" name="hra" id="hra" size="5" placeholder="H.R.A" onblur="calculateForm1()">
                                <input type="text" name="cca" id="cca" size="5" placeholder="C.C.A." onblur="calculateForm1()">
                                <input type="text" name="gis" id="gis" size="5" placeholder="GIS" onblur="calculateForm1()">
                                <input type="text" name="pa" id="pa" size="5" placeholder="Other" onblur="calculateForm1()">
                                <input type="text" name="total" size="8" placeholder="Total" id="total2">
                                <input type="text" name="total3" id="total3" size="3" placeholder="D.A." onblur="calculateForm3()">
                                <input type="text" name="total4" id="total4" size="3" placeholder="total" onblur="calculateForm3()">
                                <input type="text" name="ftotal" id="ftotal" size="14" placeholder="Total Diff." onblur="calculateForm7()">
        	
                                </td>
		</tr>         </table>
                        <p>&nbsp;</p>

                </section>
            </section>
            <!-- END CONTENT -->
            <div class="page-chatapi hideit">

                <div class="search-bar">
                    <input type="text" placeholder="Search" class="form-control">
                </div>

                <div class="chat-wrapper">
                    <h4 class="group-head">Groups</h4>
                    <ul class="group-list list-unstyled">
                        <li class="group-row">
                            <div class="group-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Work</a></h4>
                            </div>
                        </li>
                        <li class="group-row">
                            <div class="group-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Friends</a></h4>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">Favourites</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_1' data-user-id='1'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clarine Vassar</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_2' data-user-id='2'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Brooks Latshaw</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_3' data-user-id='3'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clementina Brodeur</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">More Contacts</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_4' data-user-id='4'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Carri Busey</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_5' data-user-id='5'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Melissa Dock</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_6' data-user-id='6'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Verdell Rea</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_7' data-user-id='7'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Linette Lheureux</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_8' data-user-id='8'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Araceli Boatright</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_9' data-user-id='9'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clay Peskin</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_10' data-user-id='10'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Loni Tindall</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_11' data-user-id='11'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Tanisha Kimbro</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_12' data-user-id='12'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Jovita Tisdale</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/icheck/icheck.min.js" type="text/javascript"></script>
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/jquery-ui/smoothness/jquery-ui.min.js" type="text/javascript"></script> <script src="assets/plugins/datepicker/js/datepicker.js" type="text/javascript"></script> <script src="assets/plugins/daterangepicker/js/moment.min.js" type="text/javascript"></script> <script src="assets/plugins/daterangepicker/js/daterangepicker.js" type="text/javascript"></script> <script src="assets/plugins/timepicker/js/timepicker.min.js" type="text/javascript"></script> <script src="assets/plugins/datetimepicker/js/datetimepicker.min.js" type="text/javascript"></script> <script src="assets/plugins/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js" type="text/javascript"></script> <script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.min.js" type="text/javascript"></script> <script src="assets/plugins/tagsinput/js/bootstrap-tagsinput.min.js" type="text/javascript"></script> <script src="assets/plugins/select2/select2.min.js" type="text/javascript"></script> <script src="assets/plugins/typeahead/typeahead.bundle.js" type="text/javascript"></script> <script src="assets/plugins/typeahead/handlebars.min.js" type="text/javascript"></script> <script src="assets/plugins/multi-select/js/jquery.multi-select.js" type="text/javascript"></script> <script src="assets/plugins/multi-select/js/jquery.quicksearch.js" type="text/javascript"></script>
         <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 

<script src="assets/js/date.js" type="text/javascript"></script>
<script src="assets/js/calculate.js" type="text/javascript"></script>
<script src="assets/js/addrow.js" type="text/javascript"></script>
<script src="assets/js/additional.js" type="text/javascript"></script>

        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        
        <!-- Sidebar Graph - END --> 













        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>

</html>



