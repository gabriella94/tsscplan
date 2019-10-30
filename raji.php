<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
<link rel="stylesheet" 

href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" 

src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" 

src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="./MDB_Paging/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="./MDB_Paging/css/mdb.min.css" rel="stylesheet">
   <!-- Your custom styles (optional) -->
  <link href="./MDB_Paging/css/style.css" rel="stylesheet">
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="./MDB_Paging/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="./MDB_Paging/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->

  <?php
  
  session_start();
  ?>
  
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #000000;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #fff;
	   margin-bottom: 0px; 
 
  }
  .container-fluid {
    padding: 10px 50px;
	background-color: #fff;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #283e4a;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #000000;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;

	
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #000000 !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  
  .left {
  
  padding:20px;
  float:left;
  width:18%; /* The width is 20%, by default */
  background-color: #fff;
  
}

.main {
   background-color: #fff;
  
 
  height:200%;
  float:left;
  width:60%; /* The width is 60%, by default */
}

 .right {
  
  padding:20px;
  float:left;
  width:18%; /* The width is 20%, by default */
  background-color: #fff;
  
}

/* Use a media query to add a break point at 800px: */
@media screen and (max-width:800px) {
  .left, .main, .right {
    width:100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
}
.test {
    border-collapse:separate;
    border:solid #ddd 2px;
    border-radius:10px;
	
    -moz-border-radius:10px;
}
.test tbody{
	padding : 30px;
}
.test thead > tr{
	height : 30px;
}


.test td:first-child, th:first-child {
     border-left: none; 
}
.test tbody:before {
    content: "-";
    display: block;
    line-height: 1em;
    color: transparent;
}
.button3 {border-radius: 8px;}
.button4 {border-radius: 4px;
 background-color: #2952a3;
 color: white;
}
* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

 table > tr> td{
  text-align: left;
}


tr,td {
    padding-top: .2em;
    padding-bottom: .2em;
	
}
.tx{
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}

.coltable td, 
th {  
   border: 1px solid #ddd;
  text-align: left;
}

.coltable {
  border-collapse: collapse;

}

.coltable th,td {
  padding: 6px;
}
.coltable{
word-wrap: break-word; 
   
}	
.coltable tr:nth-child(even) {
	background-color: #f2f2f2!important;
	}


.sd {
	font-family: Montserrat, sans-serif;
  border: 1px solid #a6a6a6;
  padding: 4px 10px;
  height: 30px;
  width: 200px;
}

.btn btn-primary{
	font-family: Montserrat, sans-serif;
	}
.pd {
	font-family: Montserrat, sans-serif;

  padding: 4px 10px;
  height: 30px;
  width: 200px;
}

.center {
  margin: auto;
  width: 50%;
  
  padding: 10px;
}

.error {color: #FF0000;}
* {
  box-sizing: border-box;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

.scrollingTable {
     display: inline-block; 
    overflow-y: scroll;
	overflow-x: scroll;
    max-height:400px;

}
input.total {margin-top: 30px;
 border: 1px solid #c6ecd9;
  padding: 5px 10px;
  height: 30px;
  width: 200px;
  overflow: visible!important;
    page-break-inside: avoid !important;
	 font-weight: 400;
	}



.coltable tr:nth-child(odd)
 {background-color: #d9d9d9 !important;}

.btn-primary {
    background-color: #000000!important;
    color: #fff!important;
	
    border-color: #2e6da4!important;
}
tbody > tr > td:first-child {
    text-align: left; 
}
table.dataTable thead th, table.dataTable thead td {
    padding: 10px 18px;
    border-bottom: 1px solid #ddd;
}
table.dataTable.no-footer {
    border-bottom: 1px solid #ddd;
}
table.dataTable {
	border-collapse: collapse;
}

table input {
	
    background-color: transparent;
    border: 0px solid;
	}
	table input:focus{
    outline: none;
	}
	.coltable tr:nth-child(even) {
	background-color: #white!important;
	}

.button3 {border-radius: 8px;}
.button4 {border-radius: 4px;
 background-color: #000000;
 color: white;
}
 input[type=search] {
	 font-family: Montserrat, sans-serif;
    width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
 
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

@import url(https://fonts.googleapis.com/css?family=Oswald:400);

.navigation {
  width: 100%;
  background-color: black;
}


session_start
  </style>
</head>
<script src="https://microsoft.github.io/PowerBI-JavaScript/demo/node_modules/powerbi-client/dist/powerbi.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<body>
<?php

// Create map with request parameters
$params = array ('resource' => 'https://analysis.windows.net/powerbi/api', 
				'client_id' => '20c91492-b9f3-49b7-a4de-470962165617',
				'grant_type'    => 'password',
				'username'      => 'dashboards@harwalit.com',
				'password'      => 'france@2018',
				'scope'         => 'openid');

// Build Http query using params
$query = http_build_query ($params);

// Create Http context details
$contextData = array (
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded",
            'content'=> $query );

// Create context resource for our request
$context = stream_context_create (array ( 'http' => $contextData ));

// Read page rendered as result of your POST request
$result =  file_get_contents (
              'https://login.windows.net/common/oauth2/token',  // page url
              false,
              $context);
			  //echo json_encode($result);
			  $accesstoken = json_decode($result,true);
			 // echo $accesstoken['access_token'];
			// $reportid = $_SESSION['reportid'];
			 //$embedurl = $_SESSION['embedurl'];
			 $user =  $_SESSION['user'];
			// echo "========================================".$user;
?>
<?php

include 'Connection.php';
$resu[] = array();
	$qu = "SELECT Sales_Executive_Id, Sales_Executive_Name, Division , DivCode FROM intermetal.sales_executive_details ";
	$res = $conn->query($qu);
	//echo $qu;
	if (!empty($res) ) {
		$resu = array();
			while($row = $res->fetch_assoc()) {
					$resu[] = array(
						"name" => $row['Sales_Executive_Name'],
						"code" => $row['Sales_Executive_Id'],
						//"des" =>  $row['Division']
						//"dep" =>  $row['DivCode']
						
					);
					 //echo "<script> countries[i] = '". $row['EmployeeName']."';  i++;</script>";
			}
			//echo json_encode($resu);
	}
	
  //echo $_SESSION['user'];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	$date_now = new DateTime();
	$date_now->modify("last day of previous month");
	//echo $date_now->format("Y-m-d");
	//echo date("Y-m")."-".cal_days_in_month(CAL_GREGORIAN,date("m"),date("Y"));
	//echo date("Y-m-d");
	if ($date_now <= date("Y-m-d") ){
		//echo "last updated date is less than the currentdate";
	} else{
		//echo "last updated date is greater than the currentdate";
	}
	 $Sales_Executive_Name = $Sales_Executive_Id = $Division = $DivCode =$month="";
 $OverTime = $JoinDate = $BasicSalary = $HRA = $CarAllowance = $Conveyance = $FixedOvertime = 
$TripAllowance = $TelephoneAllowance = $PackAllowance = $OtherAllowances = $TotalEarnings = $Dues = $LeaveAdvance = $Deductions = $Overtime = $Absent = $Vacation = $Leave = $present_count = $NoDays = $Payabledays = $salar = $OT1 = $OT2 =0 ;
$DaysNo = 0;  
	//echo "<br>       :  ".date("m",strtotime('2019-07-01'));
	
	
    //echo "Connected successfully"; 
	$sql = "SELECT  A.Sales_Executive_Id AS Sales_Executive_Id ,  A.Sales_Executive_Name , B.Lead_Id, B.Division, B.Company , B.Country , B.Project , B.Project_Value , B.Project_Status, B.Remarks, B.Percentage, B.Expected_Completion_Month, B.No_Competitors, B.Quarter, B.Last_FollowUp_Date,B.Comments  FROM 
	intermetal.sales_executive_details A
	JOIN intermetal.project_details B 
	on B.Sales_Executive_Id = A.Sales_Executive_Id";//"SELECT * FROM employee_master";
	$result = $conn -> query($sql);
	//echo $sql;
	
?>



<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Intermetal</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	  <li><a href="#about">DATA GRID</a></li>
        <li><a href="#project">PROJECT DETAILS</a></li>
        <li><a href="#dashboards">DASHBOARDS</a></li>
      
      </ul>
    </div>
  </div>
</nav>


<div class="left menu"> 
<br>
<br>
<br>
<div class="card">
  <img src="team2.jpg" alt="John" style="width:100%">
  <h4 style=" font-family: Montserrat, sans-serif;"><?php if (isset($_SESSION['user'])) { echo $_SESSION['user'];} ?></h4>
  <p style=" font-family: Montserrat, sans-serif;" class="title">Sales Executive</p>
  <p style=" font-family: Montserrat, sans-serif;">Intermetal</p>
  <div style="margin: 24px 0;">
   
  </div>
  <p style=" font-family: Montserrat, sans-serif;">
  <p style=" font-family: Montserrat, sans-serif;" >Logout
  <a href="http://localhost/Intermetal/login.php">
          <span class="glyphicon glyphicon-log-out"></span>
        </a>
    </p>
     
</div>
	
	</div>
 <div class="main">
<div id="about" class="container-fluid">

  <div class="row">
  
	
	
	<script>
$(document).ready(function(){
    $('#myTab').dataTable();
});



</script>	

	<form method = "post" action="<?php echo $_SERVER["PHP_SELF"];?>"> 
		 <div class="table-responsive">
		

		 <table border="1">
<table class="table">
 <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search ..." title="Type in a name" style="width:100%;height:40px;" align="center"><br/><br/>-->
		 <table id="myTab" class="coltable inner" cellspacing="0" width="100%" >
			  <thead>
	
<script src="resizable.js"></script>

<script>
var table = document.getElementsByTagName('table')[0];
resizableGrid(table);
</script>
	<br>
	
			    <tr>
			<h3 style=" font-family: Montserrat, sans-serif;"><center>DATA GRID</center></h3>
			  <!-- <th style="text-align : left;font-size: 14px; background-color : #000000" ></th> -->
			    <th style="text-align : left;font-size: 14px; background-color : #000000; color :white; font-family: Montserrat, sans-serif;">Lead ID</th>
			   <th style="text-align : left;font-size: 14px; background-color : #000000 ; color :white; font-family: Montserrat, sans-serif;">Sales Executive Name</th>
               <th style="text-align : left;font-size: 14px; background-color : #000000 ; color :white; font-family: Montserrat, sans-serif;">Division</th> 
			   <th style="text-align : left;font-size: 14px; background-color : #000000 ; color :white; font-family: Montserrat, sans-serif;">Company</th>
			   <th style="text-align : left;font-size: 14px; background-color : #000000 ; color :white; font-family: Montserrat, sans-serif;">Country</th> 
			   <th style="text-align : left;font-size: 14px; background-color : #000000 ; color :white; font-family: Montserrat, sans-serif;">Project</th> 
			   <th style="text-align : left;font-size: 14px; background-color : #000000 ; color :white; font-family: Montserrat, sans-serif;">Project Value</th>
			    <th style="text-align : left;font-size: 14px; background-color : #000000 ; color :white; font-family: Montserrat, sans-serif;">Project Status</th>
			    <th style="text-align : left;font-size: 14px; background-color : #000000 ; color :white; font-family: Montserrat, sans-serif;"> Percentage</th>
				 <th style="text-align : left;font-size: 14px; background-color : #000000 ; color :white; font-family: Montserrat, sans-serif;">Expected Completion Month</th>
				  <th style="text-align : left;font-size: 14px; background-color : #000000 ; color :white; font-family: Montserrat, sans-serif;">Last Follow Up Date</th>
				   <th style="text-align : left;font-size: 14px; background-color : #000000 ; color :white; font-family: Montserrat, sans-serif;">Competitor</th>
				   <th style="text-align : left;font-size: 14px; background-color : #000000 ; color :white; font-family: Montserrat, sans-serif;">Comments</th>
			  <th style="text-align : left;font-size: 14px; background-color : #000000 ; color :white; font-family: Montserrat, sans-serif;"> Update</th>
			   </tr>
			  </thead>
			 <tbody>
	
		      
			    <script>
				   $(document).ready(function () {
					  $(".nav li").removeClass("active");//this will remove the active class from  
														 //previously active menu item 
					  $('#employeemaster').addClass('active');
					});
		
				</script>
				
				
			 <?php
			
				 if (!empty($result) && $result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					//echo "Name: " . $row['EmployeeName']. " " . $row['Code']." <br>";
				
			 ?>
			
			  <tr>
            <form method = "post" autocomplete="off" action="<?php echo $_SERVER["PHP_SELF"];?>">
           
			    <!--<td><input class="deselect" type = "radio" name = "Myradio" value = <?php echo "'".json_encode($row)."'"; ?> onclick="btnSearch_Click(this);" ></td>-->
				<td style="text-align : left;font-size: 14px;  font-weight: 400;" ><input style="width:100px; font-family: Montserrat, sans-serif;" name="Code" id="Code" value=<?php echo "'".$row['Lead_Id']."'" ?> readonly /></td>
                <td style="text-align : left;font-size: 14px;  font-weight: 400;" ><input style="width:100px; font-family: Montserrat, sans-serif;" name="Name" id="Name" value=<?php echo "'".$row['Sales_Executive_Name']."'" ?> readonly /></td>
				<td style="text-align : left;font-size: 14px;  font-weight: 400;" ><input  style="width:150px; font-family: Montserrat, sans-serif;" name="division" id="division" value=<?php echo "'".$row['Division']."'" ?> readonly /></td>
				<td style="text-align : left;font-size: 14px;  font-weight: 400;" ><input style="width:150px; font-family: Montserrat, sans-serif;" name="company" id="company" value=<?php echo "'".$row['Company']."'" ?>  readonly /></td>
				<td style="text-align : left;font-size: 14px;  font-weight: 400;" ><input style="width:150px; font-family: Montserrat, sans-serif;" name="country" id="country" value=<?php echo "'".$row['Country']."'" ?> readonly /></td>
				<td style="text-align : left;font-size: 14px;  font-weight: 400;" ><input style="width:80px; font-family: Montserrat, sans-serif;" name="project" id="project" value=<?php echo "'".$row['Project']."'" ?> readonly /></td>
					<td style="text-align : left;font-size: 14px;  font-weight: 400;" ><input style="width:80px; font-family: Montserrat, sans-serif;" name="projectvalue" id="projectvalue" value=<?php echo "'".$row['Project_Value']."'" ?> /></td>
					<td style="text-align : left;font-size: 14px;  font-weight: 400;" ><input style="width:80px; font-family: Montserrat, sans-serif;" name="status" id="status" value=<?php echo "'".$row['Project_Status']."'" ?> /></td>
					<td style="text-align : left;font-size: 14px;  font-weight: 400;" ><input style="width:80px; font-family: Montserrat, sans-serif;" name="percentage" id="percentage" value=<?php echo "'".$row['Percentage']."'" ?> /></td>
					<td style="text-align : left;font-size: 14px;  font-weight: 400;" ><input style="width:80px; font-family: Montserrat, sans-serif;" name="expectedmonth" id="expectedmonth" value=<?php echo "'".$row['Expected_Completion_Month']."'" ?> /></td>
					<td style="text-align : left;font-size: 14px;  font-weight: 400;" ><input style="width:80px; font-family: Montserrat, sans-serif;" name="followup" id="followup" value=<?php echo "'".$row['Last_FollowUp_Date']."'" ?> /></td>
					<td style="text-align : left;font-size: 14px;  font-weight: 400;" ><input style="width:80px; font-family: Montserrat, sans-serif;" name="competitor" id="competitor" value=<?php echo "'".$row['No_Competitors']."'" ?> /></td>
					<td style="text-align : left;font-size: 14px;  font-weight: 400;" ><input style="width:80px; font-family: Montserrat, sans-serif;" name="comm" id="comm" value=<?php echo "'".$row['Comments']."'" ?> /></td>
				<td style="text-align : left;font-size: 14px;  font-weight: 400;"><font color="#0066cc"><a><input type="submit" button class="button4" name="update" value="Update" /></a></font></td>
          	  
			 
			 </tr>
			 </form>
         <?php
		 }
			} else {
				//echo "0 results";
			}
			
			if(isset($_POST['Myradio']))
			{
			//echo "You have selected :".$_POST['Myradio'];  //  Displaying Selected Value
			
			}
			if(isset($_POST['edit']))
			{
				$name = $_POST['Name'];
					//echo "Edited name : ".$name;
					
				   // echo "".$_POST['list'];
			}
			?>
			</tr>
			</tbody>
         </table>
		 


		 <script>
		$('.toast').toast('show');
		
		 //select only one radio button at a time (within different forms)
		 $('input.deselect').on('change', function() {
			$('input.deselect').not(this).prop('checked', false);  
		});
		 // check on click on radio button and uncheck on the second click
				$(function(){
			$('input[name="Myradio"]').click(function(){
				var $radio = $(this);
				
				// if this was previously checked
				if ($radio.data('waschecked') == true)
				{
					$radio.prop('checked', false);
					$radio.data('waschecked', false);
					Cancel();
				}
				else
					$radio.data('waschecked', true);
				
				// remove was checked from other radios
				$radio.siblings('input[name="Myradio"]').data('waschecked', false);
			});
		});
		
		 // to make the table width same
				   	$(document).ready(function() {
					var largest = 0;
					$('table.inner').each(function() {
						var width = $(this)[0].offsetWidth;
						if(width > largest) {
							largest = width;
						}
					}).width(largest);
					});	
				
				
			function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
 function isNumberKey(txt, evt) {

    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode == 46) {
        //Check if the text already contains the . character
        if (txt.value.indexOf('.') === -1) {
            return true;
        } else {
            return false;
        }
    } else {
        if (charCode > 31
             && (charCode < 48 || charCode > 57))
            return false;
    }
    return true;
}		
				
		</script>
		  </div>
	
		  </table>
</table>
 </form>
 
	</div>
	</div>
	<div id="project" class="container-fluid text-center">
	 <div class="row">
	
	 <div class="table-responsive">
    
	     <form method = "post" autocomplete="off" action="<?php echo $_SERVER["PHP_SELF"];?>">
		 <br/>
		 
         <table  width="100%" class="test inner" style="margin: 0 auto; background-color:#fff; text-align:left; filter: alpha(opacity=40); opacity: 0.95;" >
		  <thead class="table table-bordered" style="background-color:#000000;text-align:center; width:100% ">
		  <th style="text-align:left; font-size: 18px; font-family: Montserrat, sans-serif; color :#fff  !important;" colspan="6"><center>NEW PROJECT DETAILS</center></th></thead>
            <tbody>
		 <br/>
			<tr>
		  <td class = "pd" style="text-align : left;font-size: 14px; width: 200px;" colspan="1"><b>Sales Executive ID</b></td>
		  <td style="text-align : left;font-size: 14px; " colspan="2">
		  <!-- <input type="text" class="sd" id="employeecode" name="employeecode" style = "border-radius: 5px;" size="40" placeholder="Employee Code.." readonly value=<?php //if(null!== $Code){ echo "'".$Code."'"; }?>> -->
			<select  id="employeecode" name="employeecode" onChange="Edited(this)" class="sd"  style = "border-radius: 5px;" type = "text" name = "name" required>
				<option value=""<?php if (isset($_POST['save'])) echo $_POST['name']; ?>>--select code--</option>; 

				<?php   

				foreach($resu as $item) 
				{
				echo '<option value="'.$item['code'].'">'.$item['code'].'</option>'; 
				
				
				}
				?>

				</select>
		 
		&nbsp;
		&nbsp;
		   <input id="CodeName" value=<?php echo "'".json_encode($resu)."'"; ?>   name = "CodeName" hidden>
		   <input type="text" class="sd" id="salesexecutive" name="salesexecutive" style = "border-radius: 5px; width: 300px; align :left;" onkeypress="return onlyAlphabets(event,this);" readonly size="100" placeholder="Sales Executive Name.." value=<?php if(null!== $Sales_Executive_Name){ echo "'".$Sales_Executive_Name."'";} ?>></td>
		   </tr>
		
   
   <tr>
   <td class = "pd" style="text-align : left;font-size: 14px; font-weight: 400;"  ><b>Division </b></td>
 <td style="text-align : left;font-size: 14px;">
   <select  id="division"  class="sd" style = "border-radius: 5px; font-weight: 400;"  placeholder="Division.." type = "text" name = "division" required >
	<option value="Banquet">Banquet</option>
    <option value="Doors">Doors</option>
	<option value="Hotel Rooms">Hotel Rooms</option>
	<option value="Office Furniture">Office Furniture</option>
	<option value="Outdoor">Outdoor</option>
	<option value="Restaurant">Restaurant</option>
	<option value="School">School</option>
				</select>
				</td>
				</tr>
  <tr>
  <td class = "pd" style="text-align : left;font-size: 14px; font-weight: 400"><b>Country</b></th>
   <td style="text-align : left;font-size: 14px;">
   <!--<script type="text/javascript" src="countries.js"></script>-->
<input class="sd" style = "border-radius: 5px; font-weight: 400 ;"  type="text" id="country" name="country" onkeypress="return onlyAlphabets(event,this);"   placeholder="Country.." required>
   </td>
   </tr>
   
   <tr>
   
   <td class = "pd" style="text-align : left;font-size: 14px; font-weight: 400"><b>Company</b></th>
   <td style="text-align : left;font-size: 14px;"><input class="sd" style = "border-radius: 5px; font-weight: 400 ; width: 300px;" type="text" id="company" name="company" onkeypress="return onlyAlphabets(event,this);"  placeholder="Company.." required>
   </td>
   </tr>
   
    <tr>
   <td class = "pd" style="text-align : left;font-size: 14px; font-weight: 400"><b>Project</b></th>
   <td style="text-align : left;font-size: 14px;"><input class="sd" style = "border-radius: 5px; font-weight: 400 ; width: 300px;" type="text" id="project" name="project" onkeypress="return onlyAlphabets(event,this);" placeholder="Project.." required>
  </td></tr>
   <tr>
   <td class = "pd" style="text-align : left;font-size: 14px; font-weight: 400"><b>Project Value</b></th>
   <td style="text-align : left;font-size: 14px;"><input class="sd" style = "border-radius: 5px; font-weight: 400; width: 300px;" type="text" id="projectvalue" name="projectvalue" onkeypress="return isNumberKey(this, event);"  placeholder=" Value.." required>
   </td>
   </tr>
   
   <tr>
   <td class = "pd" style="text-align : left;font-size: 14px; font-weight: 400"><b>Status</b></th>
   <td style="text-align : left;font-size: 14px;">
   <select  id="status" class="sd" style = "border-radius: 5px; font-weight: 400; width: 300px;" placeholder="Status.." type = "text" name = "status" required >
				<option value="New Project">New Project</option>
				<option value="Active">Active</option>
    <option value="Pending">Pending</option>
	<option value="Received(LPO)">Received(LPO)</option>
<option value=" TBA (TENDER) )"> TBA (TENDER) </option>
	<option value="Lost">Lost</option>
	<option value="Cancelled">Cancelled</option>
				</select>
				</td>
				
			
   
   
   </tr>
 
  <tr>
 <td class = "pd" style="text-align : left;font-size: 14px; font-weight: 400"><b>Remarks</b></th>  
  <td style="text-align : left;font-size: 14px;"><input class="sd" style = "border-radius: 5px; font-weight: 400; width: 520px;" type="text" id="remarks" name="remarks" onkeypress="return onlyAlphabets(event,this);" placeholder="Remarks.." required>
  </td>
  </tr>  
  

  
  <tr>
 <td class = "pd" style="text-align : left;font-size: 14px; font-weight: 400"><b>Percentage</b></th>  
 <td style="text-align : left;font-size: 14px;"><input class="sd" style = "border-radius: 5px ; font-weight: 400;" type="text" id="percentage" name="percentage" onkeypress="return isNumberKey(this, event);" placeholder="Percentage.." required>
 </td>
  </tr> 
  

  
<tr>
 <td class = "pd" style="text-align : left;font-size: 14px; font-weight: 400"><b>Expected Month</b></th>  
  <td style="text-align : left;font-size: 14px;"><input class="sd" style = "border-radius: 5px; font-weight: 400; " type="Date" id="expectedmonth" name="expectedmonth" placeholder="Expected Month .." required>
</td>
  
  </tr>   
   
  <tr>
 <td class = "pd" style="text-align : left;font-size: 14px; font-weight: 400"><b>Quarter</b></th>  
  <td style="text-align : left;font-size: 14px;">
  <input class="sd" style = "border-radius: 5px; font-weight: 400; " type="Date" id="quarter" name="quarter"onkeypress="return isNumberKey(this, event);" placeholder="Quarter.." required>
  </td>
  </tr>    
   
  <tr>
 <td class = "pd" style="text-align : left;font-size: 14px; font-weight: 400"><b>Last Follow up Date</b></th>  
  <td style="text-align : left;font-size: 14px;"><input class="sd" style = "border-radius: 5px; font-weight: 400;" type="Date" id="followup" name="followup" placeholder="Last Follow up Date .." required>
  </td>
  </tr>   
  
  <tr>
 <td class = "pd" style="text-align : left;font-size: 14px; font-weight: 400"><b>Competitor</b></th>  
  <td style="text-align : left;font-size: 14px;"><input class="sd" style = "border-radius: 5px; font-weight: 400; width: 310px;" type="text" id="competitor" name="competitor" onkeypress="return isNumberKey(this, event);" placeholder="Competitor.." required>
  <!--<span style="text-align : left;font-size: 12px;" class="error"> *</span>-->
  </td>
  </tr>
 <tr>
 <td class = "pd" style="text-align : left;font-size: 14px; font-weight: 400"><b>Comments</b></th>  
   <td style="text-align : left;font-size: 14px;">
  <input class="sd" style = "border-radius: 5px; font-weight: 400; width: 520px; height : 100px;" type="text" id="comm" name="comm"onkeypress="return onlyAlphabets(event,this);" placeholder="Comments.." required>

</td>
  </tr>  
 
<script>
$(document).on("change", ".sd", function() {
    var sum = 0;
    $(".sd").each(function(){
        sum += +$(this).val();
    });
    $(".total").val(sum);
});
</script>
			<!--
			
				<td style="text-align : left">To:</td>
			  	<td style="text-align : left"> 
				<input id="datetimepicker1" type="text" class="sd" style="font-size: 15px;"></td>
				
				<script>
				  $(document).ready(function() {
						//$.datetimepicker.setLocale('pt-BR');
					$('#datetimepicker1').datetimepicker();
				  });
				  </script>
				  -->
			<br>
           
			<tr align="center">
               <td colspan="8" align="center">
                  <center><input type = "submit" class="btn btn-primary " style="width:110px;height:40px; font-size: 14px;"  name = "submit" value = "Save" onclick="">
               
                  <input  class="btn btn-primary " style="width:130px;height:40px; font-size: 14px;"  name = "cancel" value = "Cancel" readonly> </center>
               
            </td>
            </tr>
			</tbody>
         </table>
      </form>
	  </div>
</div>

</div>
</div>
<br>

<!--<h3 style=" font-family: Montserrat, sans-serif;"><center>DASHBOARDS</center></h3>	-->
<br>
<br>
<div id="reportContainer" class="container-fluid text-center" style="width:1750px;height:800px"></div>
<div id="dashboards">
<div class ="row slideanim">


</div>
</div>




 <div class="right" style="height:100%; background-color: #fff;">
	
	
	
	</div>
	




 <?php


if(isset($_POST['update'])){
$Employeecode=$_POST["Code"];
	$division=$_POST["division"];
	$country=$_POST["country"];
	$company=$_POST["company"];
	$project=$_POST["project"];
	$projectvalue=$_POST["projectvalue"];
	$status=$_POST["status"];
$competitor=$_POST["competitor"];
	$comm=$_POST["comm"];
	$percentage=$_POST["percentage"];
	$expectedmonth=$_POST["expectedmonth"];
	
	$followup=$_POST["followup"];
	
	//echo $Employeecode." ".$Employeename." ".$department." ".$designation." ".$joineddate;
    $sql = "SELECT Sales_Executive_Id FROM intermetal.project_details where Sales_Executive_Id = '".$Employeecode."'";
   //echo $sql;
   $result = $conn ->query($sql);
        if (!empty($result) && $result->num_rows > 0) {
			//echo "------------------------------------------>>>>>>>>>>>>>>>>>>>>>>>>>> ";
            $sql1 = "UPDATE project_details SET Division = '".$division."' , Country = '".$country."' , Company = '".$company."' , Project = '".$project."' , Project_Value = '".$projectvalue."', Project_Status = '".$status."', Percentage = '".$percentage."', Expected_Completion_Month = '".$expectedmonth."', Last_FollowUp_Date = '".$followup."', No_Competitors = '".$competitor."', Comments = '".$comm."' where Sales_Executive_Id = '".$Employeecode."'";
//echo "sql1       : ".$sql1;           
		   if ($conn->query($sql1) === TRUE) {
              // echo "<script>alert('Data Updated Successfully ..'); window.location.href='./new.php';</script>";
				echo "<meta http-equiv='refresh' content='0'>";
            } else {
                //echo "<script>alert('Data Already Exists ..'); window.location.href='./new.php';</script>";
				echo "<meta http-equiv='refresh' content='0'>";
            }
    } 

else {
	
            $querys = "INSERT INTO project_details (Sales_Executive_Id, Division, Country,Company,Project,Project_Value,Project_Status,Percentage,Expected_Completion_Month,Followup_Date,No_Competitors,Comments) values ('$Employeecode' , '$division' ,'$company','$country','$project','$projectvalue','$status','$percentage','$expectedmonth','$followup','$competitor','$comm')";
            if ($conn->query($querys) === TRUE) {
           // echo "<script>alert('Data Saved Successfully ..'); window.location.href='./new.php';</script>";
				//echo "<meta http-equiv='refresh' content='0'>";
        } else {
            //echo "<script>alert('Data Already Exists ..'); window.location.href='./new.php';</script>";
				//echo "<meta http-equiv='refresh' content='0'>";
        }
            //print( "Error: insert " . $sql . "<br>". $conn->error );// . $conn->error;
       }
}
/*
if(isset($_POST['delete'])){
	$Employeecode=$_POST["Code"];
	
	$sql = " DELETE FROM hrpayroll.employee_master where Code = '".$Employeecode."'";
	if ($conn->query($sql) !== FALSE) {
						echo "<script>alert('Data Deleted Successfully ..'); window.location.href='./new.php';</script>";
						echo "<meta http-equiv='refresh' content='0'>";
					} else {
						echo "<script>alert('Sorry, Cannot delete..!!'); window.location.href='./new.php';</script>";
						echo "<meta http-equiv='refresh' content='0'>";
					}
}

 */  

if(isset($_POST['submit'])){
	
	
	
	
	$Employeecode=$_POST["employeecode"];
	//$Salesexecutive=$_POST["salesexecutive"];
	$division=$_POST["division"];
	$country=$_POST["country"];
	$company=$_POST["company"];
	$project=$_POST["project"];
	$projectvalue=$_POST["projectvalue"];
	$status=$_POST["status"];
	$remarks=$_POST["remarks"];
	$percentage=$_POST["percentage"];
	$expectedmonth=$_POST["expectedmonth"];
	$competitor=$_POST["competitor"];
	
	$comm=$_POST["comm"];
	$quarter=$_POST["quarter"];
	$followup=$_POST["followup"];
	//echo $employeecode;
	
	//echo $Salesexecutive;
	//echo $company;

	//echo  $comm;
	$sql = "SELECT Lead_Name, Followup_Date, Notes FROM intermetal.lead_details ";
	
	
				$result = $conn->query($sql);
				//echo $sql."   ";//.$conn->query($sql);
				//if (($result = $conn->query($sql)) !== FALSE) {
					//echo "here : ";
					if (!empty($result) && $result->num_rows > 0) {
						//echo "here : ";
						$sql1 = "INSERT INTO intermetal.lead_details(Lead_Name,Followup_Date,Notes )
                                   values ('$company','$followup','$comm')";
						//echo $sql1;
						if ($conn->query($sql1) === TRUE) {
	
	
   // print("New record created successfully");
  echo "<script>alert('Data Updated Successfully..!!')</script>";
} else {
    //print( "Error: " . $conn->error);
	echo "<script>alert('Data already Exists..!!')</script>";
}
} else {

	echo "<script>alert('Data already Exists..!!')</script>";
}



	//echo $Employeecode;	 
$sql_project =  "INSERT INTO intermetal.project_details(Lead_Id, Sales_Executive_Id,Division,Country, Company, Project, Project_Value, Project_Status, Remarks, Percentage, Expected_Completion_Month, No_Competitors,Quarter, Last_FollowUp_Date , Comments)
values ((SELECT Lead_Id from intermetal.lead_details where Lead_Name = '$company'),'$Employeecode','$division','$country','$company','$project','$projectvalue','$status','$remarks','$percentage','$expectedmonth','$competitor','$quarter','$followup','$comm')";
					//echo $sql_project;
					 $result_pro = $conn -> query($sql_project);
					 if (!empty($result_pro) ) {
						 echo "<meta http-equiv='refresh' content='0'>";
						
					 //echo "Updated : ";
					 }
				
				
  /****************************************************************************************************************/
}
	
?>
<script>
// Basic example
$(document).ready(function () {
$('#dtBasicExample').DataTable({
"searching": false // false to disable search (or any other option)
});
$('.dataTables_length').addClass('bs-select');
});
</script>
<script>
function btnSearch_Click(e1) {
       
        
         var JSONObject = JSON.parse(e1.value);
		 console.log(e1.value);
       console.log("Here :    "+JSONObject["Sales_Executive_Id"]);
	   
           document.getElementById('salesexecutive').value = JSONObject["Sales_Executive_Name"];
           document.getElementById('employeecode').value = JSONObject["Sales_Executive_Id"];
		   document.getElementById('division').value = JSONObject["Division"];
		   document.getElementById('country').value = JSONObject["Country"];
           document.getElementById('company').value = JSONObject["Company"];
		   document.getElementById('project').value = JSONObject["Project"];
		   document.getElementById('projectvalue').value = JSONObject["Project_Value"];
		   document.getElementById('status').value = JSONObject["Project_Status"];
		   document.getElementById('comment').value = JSONObject["Comments"];
		   document.getElementById('remarks').value = JSONObject["Remarks"];
		   document.getElementById('percentage').value = JSONObject["Percentage"];
		   document.getElementById('expectedmonth').value = JSONObject["Expected_Completion_Month"];
		   //document.getElementById('gender').value = JSONObject["Expected_Delivery_Month"];
		   document.getElementById('quarter').value = JSONObject["Quarter"];
		   document.getElementById('folloup').value = JSONObject["Last_FollowUp_Date"];
		   //document.getElementById('packallowance').value = JSONObject["Delivery_Status"];
		   document.getElementById('competitor').value = JSONObject["No_Competitors"];
		   //document.getElementById('fixedovertime').value = JSONObject["FollowUp_Notes"];
		
		  //document.getElementById('totalearnings').value = (parseInt(JSONObject["BasicSalary"])+parseInt(JSONObject["HRA"])+parseInt(JSONObject["TripAllowance"])+parseInt(JSONObject["OtherAllowances"])+parseInt(JSONObject["CarAllowance"])+parseInt(JSONObject["TelephoneAllowance"])+parseInt(JSONObject["PackAllowance"])+parseInt(JSONObject["FixedOvertime"])+parseInt(JSONObject["Conveyance"]));

	   }
	   

function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function Edited(e2){
			
			document.getElementById('salesexecutive').value = "";
			
		    var JSONObject = JSON.parse(document.getElementById('CodeName').value);
			
			
		    for(var i = 0; i < JSONObject.length; i++)
			{
				
			  if(JSONObject[i].code == e2.value)
			  {
				
				document.getElementById('salesexecutive').value = JSONObject[i].name;
				//document.getElementById('division').value = JSONObject[i].des;
				//document.getElementById('designation').value = JSONObject[i].des;
				
				
				break;
			  }
			}
	   }
function Cancel() {
	 document.getElementById('salesexecutive').value = "";
           document.getElementById('employeecode').value = "";
		   document.getElementById('division').value = "";
		   document.getElementById('country').value = "";
           document.getElementById('company').value = "";
		   document.getElementById('project').value = "";
		   document.getElementById('projectvalue').value = "";
		   document.getElementById('status').value = "";
		   document.getElementById('remarks').value = "";
		   document.getElementById('comment').value = "";
		   document.getElementById('percentage').value = "";
		   document.getElementById('expectedmonth').value ="";
		   document.getElementById('competitor').value = "";
		   document.getElementById('quarter').value = "";
		   document.getElementById('followup').value = "";
		  
}
</script>






<footer class="container-fluid text-center">
 
   
  </a>
  
</footer>
<script>
/*var models = window['powerbi-client'].models;
var config = {
    type: 'report',
    accessToken: '<?php echo $accesstoken['access_token'] ?>', // Token received in the first code block above
    embedUrl: '<?php echo $embedurl; ?>',
    id: '<?php echo $reportid; ?>',
    permissions: models.Permissions.All,
    settings: {
        filterPaneEnabled: true,
        navContentPaneEnabled: true
    }
};
var reportContainer = $('#reportContainer')[0];
var report = powerbi.embed(reportContainer, config);
*/
var models = window['powerbi-client'].models;
var report;
var config = {
    type: 'report',
    accessToken: '<?php echo $accesstoken['access_token'] ?>', // Token received in the first code block above
    embedUrl: 'https://app.powerbi.com/reportEmbed?reportId=11d4801d-2ba4-42a6-8443-9ce492dd7209&groupId=ee749a9c-ae1f-404e-afd5-ab79549cf67e&autoAuth=true&ctid=879742a2-7fa1-4db9-a6a1-7364ad9218d6',
    id: '11d4801d-2ba4-42a6-8443-9ce492dd7209',
    permissions: models.Permissions.All,
    settings: {
        filterPaneEnabled: true,
        navContentPaneEnabled: true
    }
};


var reportContainer = $('#reportContainer')[0];
var report = powerbi.embed(reportContainer, config);
var Filter1 = {
$schema: "http://powerbi.com/product/schema#advanced",
target: {
table: "Sheet1",
column: "SALES PERSON"
},
logicalOperator: "OR",
conditions: [
{
operator: "Contains",
value: '<?php echo $user; ?>'
} 
]
}
report.on('loaded', event => {
  report.getFilters()
    .then(filters => {
	
      filters.push(Filter1); 

      return report.setFilters(filters);
    });
});
</script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
