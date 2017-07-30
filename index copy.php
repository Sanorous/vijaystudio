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
        <title>Vijay Studio : Client Manangement Application</title>
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

<!-- Javascript for font -->
<script type="text/javascript" src="http://www.google.com/jsapi"></script>

 <script type="text/javascript">
          // Load the Google Transliteration API
          google.load("elements", "1", {
                packages: "transliteration"
              });
          function onLoad() {
            var options = {
              sourceLanguage: 'en',
              destinationLanguage: ['hi'],
              shortcutKey: 'ctrl+g',
              transliterationEnabled: true
            };
            // Create an instance on TransliterationControl with the required
            // options.
            var control = new google.elements.transliteration.TransliterationControl(options);
            // Enable transliteration in the textfields with the given ids.
            var ids = [ "txtName","txtAddress"];
            control.makeTransliteratable(ids);
            // Show the transliteration control which can be used to toggle between
            // English and Hindi and also choose other destination language.
            control.showControl('translControl');
          }
          google.setOnLoadCallback(onLoad);
        </script>
        <!-- javascript google Ends here -->
        
        <script  type="text/javascript">
        var date = new Date();

var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var today = year + "-" + month + "-" + day;


document.getElementById('theDate').value = today;
        </script>
        
        <script>
        
        $(document).ready(function() {
    //this calculates values automatically 
    Balance();
    $("#Total, #Advance").on("keydown keyup", function() {
        Balance();
    });
});

function Balance() {
            var Total = document.getElementById('Total').value;
            var Advance = document.getElementById('Advance').value;
			var result = parseInt(Total) + parseInt(Advance);
			var result1 = parseInt(Total) - parseInt(Advance);
            if (!isNaN(result)) {
                document.getElementById('sum').value = result;
				document.getElementById('Balance').value = result1;
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
                        
                        <li class="">Click here to see full page view</li>
                        
                        <li class="hidden-sm hidden-xs searchform">
</li>
                    </ul>
                </div>		
                <div class='pull-right'>
                    <ul class="info-menu right-links list-inline list-unstyled">
                        <li class="profile">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <img src="data/profile/logo.jpg" alt="user-image" class="img-circle img-inline">
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
                                <img src="data/profile/logo.jpg" class="img-responsive img-circle">
                            </a>
                        </div>

                        <div class="profile-details col-md-8 col-sm-8 col-xs-8">

                            <h3>
                                <a href="ui-profile.html">Client Management</a>

                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="profile-status online"></span>
                            </h3>

                           <!-- <p class="profile-title"></p>-->

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
                            <a href="clients.php">
                                <i class="fa fa-sliders"></i>
                                <span class="title">Clients</span>
                                <span class="arrow "></span>
                            </a>
                            
                        </li>
                        <!--<li class=""> 
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
                        </li>-->
                        
                        
                    </ul>

                </div>
                <!-- MAIN MENU - END -->



               



            </div>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>
                   
                    
<div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 style="padding-left:20px">Client Management System for Vijay Studio</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            
                            
                             <form id="general_validate" action="add.php" method="post">

                            <div class="content-body">    <div class="row">

                                    <form id="general_validate" action="add.php" method="post">

                                        <div class="col-md-6 col-sm-6 col-xs-6">

                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control" id="Name" name="Name" placeholder="Name">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                               <div class="controls">
                                                    <input type="text" class="form-control" id="Mobile" name="Mobile" placeholder="Mobile (e.g. 9400123456)">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control" id="formfield2" name="Email" placeholder="E-mail (e.g. some@example.com)">
                                                </div>
                                            </div>

                                    		
                                            
                                            <!--<div class="form-group">
                                                <div class="controls">
                                                <input type="text" class="form-control datepicker" id="theDate" name="Occasion_date" placeholder="Occasion Date">
                                            </div>
                                            </div>-->

                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">

                                            <div class="form-group">
                                               <div class="controls">
                                                    <input type="text" class="form-control" id="Address" name="Address" placeholder="Address" >
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                               <div class="controls">
                                                <input type="text" class="form-control datepicker" id="theDate" name="Date" placeholder="Date">
                                            </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control" id="formfield1" name="Others" placeholder="Others">
                                                </div>
                                            </div>
                                            
                                            <!--<div class="form-group">
                                               <div class="controls">
                                                    <input type="text" class="form-control" id="Occasion" name="Occasion" placeholder="Occasion">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control" id="Venue" name="Venue" placeholder="Venue">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control" id="formfield1" name="Price" placeholder="Total Charges">
                                                </div>
                                            </div>

											<div class="form-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control" id="formfield1" name="Advance" placeholder="Advance Deposited">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control" id="formfield1" name="Balance" placeholder="Balance Amount">
                                                </div>
                                            </div>
                                            
											-->
											
                                        </div>
                                    </div>
                                        <div class="content-body">    
                                        <div class="form-group">
                                        
                                        <div class='row'>
                                        
                                    <div class="col-xs-2">
                                        <select class="" id="s2example-1" name="Occasion">
                                                <option></option>
                                                    <option>Bariksha</option>
                                                    <option>Engagement</option>
                                                    <option>Tilak</option>
                                                    <option>Haldi</option>
                                                    <option>Rashm/Sangeet</option>
                                                    <option>Wedding</option>
                                                    <option>Reception</option>
                                                    <option>Birthday</option>
                                                    <option>Mundan</option>
                                                    <option>Anniversary</option>
                                                    <option>Pre-Wedding</option>
                                                    <option>Post-Wedding</option>
                                                    <option>Inauguration</option>
                                                    <option>Events</option>
                                                    <option>Others</option>
                                                </optgroup>
                                            </select>
                                    </div>

                                    <div class="col-xs-2">
                <input type="text" class="form-control datepicker" data-start-view="2" placeholder="Occasion Date" name="Occasion_date">
                                        </div>

                                    <div class="col-xs-2">
                                        <input type="text" class="form-control timepicker col-md-4" data-template="dropdown" data-show-seconds="false" data-default-time="07:00 PM" data-show-meridian="true" data-minute-step="5" data-second-step="5" name="Time">
                                           </div>
                                           
                                           <div class="col-xs-2">
                                        <input type="text" class="form-control" id="Venue" name="Venue" placeholder="Venue">
                                    </div>

                                    <div class="col-xs-2">
                                        <select class="" id="s2example-2" name="Camera">
                                                <option></option>
                                                  
                                                    <option>Bariksha</option>
                                                    <option>Engagement</option>
                                                    <option>Tilak</option>
                                                    <option>Haldi</option>
                                                    <option>Rashm/Sangeet</option>
                                                    <option>Wedding</option>
                                                    <option>Reception</option>
                                                 
                                                </optgroup>
                                            </select>
                                            </div>

                                    <div class="col-xs-2">
                                        <input type="text" class="form-control" placeholder=".col-xs-2">
                                    </div>
                                </div>
                                </div>
                                        
                                        
                                        
                                        <div class="col-md-2 col-sm-2 col-xs-2">
										<div class="form-group">
                                            
                                            <select class="" id="s2example-1" name="Occasion">
                                                <option></option>
                                                  
                                                    <option>Bariksha</option>
                                                    <option>Engagement</option>
                                                    <option>Tilak</option>
                                                    <option>Haldi</option>
                                                    <option>Rashm/Sangeet</option>
                                                    <option>Wedding</option>
                                                    <option>Reception</option>
                                                    <option>Birthday</option>
                                                    <option>Mundan</option>
                                                    <option>Anniversary</option>
                                                    <option>Pre-Wedding</option>
                                                    <option>Post-Wedding</option>
                                                    <option>Inauguration</option>
                                                    <option>Events</option>
                                                    <option>Others</option>
                                                 
                                                </optgroup>
                                            </select></div> </div>
                                            
                                            <div class="col-md-2 col-sm-2 col-xs-2">
										<div class="form-group">
                                           <div class="controls">
                                  <input type="text" class="form-control datepicker" data-start-view="2" placeholder="Occasion Date" name="Occasion_date">
                                            </div>
                                        </div> </div>
                                        
                                        
                                        <div class="col-xs-2" style='padding-left:0px;'>
                                                <input type="text" class="form-control timepicker col-md-4" data-template="dropdown" data-show-seconds="false" data-default-time="07:00 PM" data-show-meridian="true" data-minute-step="5" data-second-step="5" name="Time">
                                            </div>
                                            
                                            
                                            <div class="col-xs-2" style='padding-left:0px;'>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control" id="Venue" name="Venue" placeholder="Venue">
                                                </div>
                                            </div></div>
                                            
                                            
                                            <div class="col-xs-2" style='padding-left:0px;'>
                                            <div class="form-group">
                                                <div class="controls">
                                                   <select class="" id="s2example-1" name="Camera">
                                                <option></option>
                                                  
                                                    <option>Bariksha</option>
                                                    <option>Engagement</option>
                                                    <option>Tilak</option>
                                                    <option>Haldi</option>
                                                    <option>Rashm/Sangeet</option>
                                                    <option>Wedding</option>
                                                    <option>Reception</option>
                                                 
                                                </optgroup>
                                            </select>
                                                </div>
                                            </div></div>
                                            
                                            
                                            
                                            
                                            <div class="col-md-3 col-sm-3 col-xs-3">
										<div class="form-group">
                                            
                                            <select class="" id="s2example-11" name="Occasion1">
                                                <option></option>
                                                  
                                                    <option>Bariksha</option>
                                                    <option>Engagement</option>
                                                    <option>Tilak</option>
                                                    <option>Haldi</option>
                                                    <option>Rashm/Sangeet</option>
                                                    <option>Wedding</option>
                                                    <option>Reception</option>
                                                    <option>Birthday</option>
                                                    <option>Mundan</option>
                                                    <option>Anniversary</option>
                                                    <option>Pre-Wedding</option>
                                                    <option>Post-Wedding</option>
                                                    <option>Inauguration</option>
                                                    <option>Events</option>
                                                    <option>Others</option>
                                                </optgroup>
                                            </select></div> </div>
                                            
                                            <div class="col-md-3 col-sm-3 col-xs-3">
										<div class="form-group">
                                           <div class="controls">
                                                <input type="text" class="form-control datepicker" name="Occasion_date1" data-start-view="2" placeholder="Occasion Date">
                                            </div>
                                        </div> </div>
                                        
                                        
                                        <div class="col-xs-2" style='padding-left:0px;'>
                                                <input type="text" class="form-control timepicker col-md-4" data-template="dropdown" data-show-seconds="false" data-default-time="" data-show-meridian="true" data-minute-step="5" data-second-step="5" name="Time1">
                                            </div>
                                            
                                            
                                            <div class="col-xs-4" style='padding-left:0px;'>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control" id="Venue" name="Venue1" placeholder="Venue">
                                                </div>
                                            </div></div>
                                            
                                            
                                            
                                            <div class="col-md-3 col-sm-3 col-xs-3">
										<div class="form-group">
                                            
                                            <select class="" id="s2example-22" name="Occasion2">
                                                <option></option>
                                                  
                                                    <option>Bariksha</option>
                                                    <option>Engagement</option>
                                                    <option>Tilak</option>
                                                    <option>Haldi</option>
                                                    <option>Rashm/Sangeet</option>
                                                    <option>Wedding</option>
                                                    <option>Reception</option>
                                                    <option>Birthday</option>
                                                    <option>Mundan</option>
                                                    <option>Anniversary</option>
                                                    <option>Pre-Wedding</option>
                                                    <option>Post-Wedding</option>
                                                    <option>Inauguration</option>
                                                    <option>Events</option>
                                                    <option>Others</option>
                                                </optgroup>
                                            </select></div> </div>
                                            
                                            <div class="col-md-3 col-sm-3 col-xs-3">
										<div class="form-group">
                                           <div class="controls">
                                                <input type="text" class="form-control datepicker" data-start-view="2" placeholder="Occasion Date" name="Occasion_date2">
                                            </div>
                                        </div> </div>
                                        
                                        
                                        <div class="col-xs-2" style='padding-left:0px;'>
                                                <input type="text" class="form-control timepicker col-md-4" data-template="dropdown" data-show-seconds="false" data-default-time="" data-show-meridian="true" data-minute-step="5" data-second-step="5" name="Time2">
                                            </div>
                                            
                                            
                                            <div class="col-xs-4" style='padding-left:0px;'>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control" id="Venue" name="Venue2" placeholder="Venue">
                                                </div>
                                            </div></div>
                                            
                                            
                                            
                                            
                                            <div class="col-md-3 col-sm-3 col-xs-3">
										<div class="form-group">
                                            
                                            <select class="" id="s2example-33" name="Occasion3">
                                                <option></option>
                                                  
                                                   <option>Bariksha</option>
                                                    <option>Engagement</option>
                                                    <option>Tilak</option>
                                                    <option>Haldi</option>
                                                    <option>Rashm/Sangeet</option>
                                                    <option>Wedding</option>
                                                    <option>Reception</option>
                                                    <option>Birthday</option>
                                                    <option>Mundan</option>
                                                    <option>Anniversary</option>
                                                    <option>Pre-Wedding</option>
                                                    <option>Post-Wedding</option>
                                                    <option>Inauguration</option>
                                                    <option>Events</option>
                                                    <option>Others</option>
                                                </optgroup>
                                            </select></div> </div>
                                            
                                            <div class="col-md-3 col-sm-3 col-xs-3">
										<div class="form-group">
                                           <div class="controls">
                                                <input type="text" class="form-control datepicker" data-start-view="2" placeholder="Occasion Date" name="Occasion_date3">
                                            </div>
                                        </div> </div>
                                        
                                        
                                        <div class="col-xs-2" style='padding-left:0px;'>
                                                <input type="text" class="form-control timepicker col-md-4" data-template="dropdown" data-show-seconds="false" data-default-time="" data-show-meridian="true" data-minute-step="5" data-second-step="5" name="Time3">
                                            </div>
                                            
                                            
                                            <div class="col-xs-4" style='padding-left:0px;'>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control" id="Venue" name="Venue3" placeholder="Venue">
                                                </div>
                                            </div></div>
                                            
                                            
                                            <div class="col-md-3 col-sm-3 col-xs-3" >
										<div class="form-group">
                                            
                                            <select class="" id="s2example-44" name="Occasion4">
                                                <option></option>
                                                  
                                                   <option>Bariksha</option>
                                                    <option>Engagement</option>
                                                    <option>Tilak</option>
                                                    <option>Haldi</option>
                                                    <option>Rashm/Sangeet</option>
                                                    <option>Wedding</option>
                                                    <option>Reception</option>
                                                    <option>Birthday</option>
                                                    <option>Mundan</option>
                                                    <option>Anniversary</option>
                                                    <option>Pre-Wedding</option>
                                                    <option>Post-Wedding</option>
                                                    <option>Inauguration</option>
                                                    <option>Events</option>
                                                    <option>Others</option>
                                                </optgroup>
                                            </select></div> </div>
                                            
                                            <div class="col-md-3 col-sm-3 col-xs-3">
										<div class="form-group">
                                           <div class="controls">
                                                <input type="text" class="form-control datepicker" data-start-view="2" placeholder="Occasion Date" name="Occasion_date4">
                                            </div>
                                        </div> </div>
                                        
                                        
                                        <div class="col-xs-2" style='padding-left:0px;'>
                                                <input type="text" class="form-control timepicker col-md-4" data-template="dropdown" data-show-seconds="false" data-default-time="" data-show-meridian="true" data-minute-step="5" data-second-step="5" name="Time4">
                                            </div>
                                            
                                            
                                            <div class="col-xs-4" style='padding-left:0px;'>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="text" class="form-control" id="Venue" name="Venue4" placeholder="Venue">
                                                </div>
                                            </div></div>
                                            
                                            <!-- Pricing Table-->
                                            
                                            <div class="col-md-3 col-sm-3 col-xs-3">
										<div class="form-group">
                                           <div class="controls">
                                <input type="text" class="form-control" id="Total" name="Total" placeholder="Total">
                                                
                                            </div>
                                        </div> </div>
                                        
                                        
                                        <div class="col-xs-3" style='padding-left:0px;'>
                                 <input type="text" class="form-control" id="Advance" name="Advance" placeholder="Advance">
                                                </div>
                                            
                                            
                                            <div class="col-xs-3" style='padding-left:0px;'>
                                            <div class="form-group">
                                                <div class="controls">
                                 <input type="text" class="form-control" id="Balance" name="Balance" placeholder="Balance">
                                                  </div>
                                            </div></div>
                                    
                                            
                                            
                                            

                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="pull-right ">
                                                <button type="submit" class="btn btn-success" name="submit" >Save</button>
                                                
                                            </div>
                                        </div>



                                    </form>




                                </div>
                            </div>
                        <!--<p>Please input the required data.</p>-->
                        <!--php code start-->
                       
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

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script> <script src="assets/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script> <script src="assets/js/form-validation.js" type="text/javascript"></script> <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 

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



