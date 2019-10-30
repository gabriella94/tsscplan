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
  
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

  
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
    background-color: #e6ecf0;
 
  }
  .container-fluid {
    padding: 60px 50px;
	background-color: #e6ecf0;
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
    background-color: #283e4a;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;

	
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
  background-color: #e6ecf0;
  
}

.main {
   background-color: #e6ecf0;
  border-right: 1px solid #e6e6e6;
  border-left: 1px solid #e6e6e6;
  height:200%;
  float:left;
  width:82%; /* The width is 60%, by default */
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
  padding: 10px;
}
.coltable{
word-wrap: break-word; 
   
}	
.coltable tr:nth-child(even) {
	background-color: #f2f2f2!important;
	}


.sd {
  border: 1px solid #c6ecd9;
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
 {background-color: #cccccc !important;}

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
	background-color: #808080!important;
	}

.button3 {border-radius: 8px;}
.button4 {border-radius: 4px;
 background-color: #000000;
 color: white;
}
.form-wrapper {
  background-image:  url("bg.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position:fixed
  background-attachment: fixed;
}





.hero-image {
  background-image: url("architecture-buildings-business-325185.jpg");
  background-color: #cccccc;
  height: 1200px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
    max-width: 100%;
            max-height: 100vh;
            margin: auto;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .login-container {
	background-color :transparent;
  float: left;
   cursor: pointer;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
  float : right;
}

.topnav .login-container button:hover {
  background-color: green;
   cursor: pointer;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
	 cursor: pointer;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
	 cursor: pointer;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

.label {
  color: white;
  padding: 8px;
}

.modal-body{
	
background-color : #283e4a;
color: #fff;
}
.modal-header{
	
background-color : #283e4a;{
}

.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
  </style>
</head>
<body>

<script type="text/javascript" language="javascript">
window.history.forward(1);
document.attachEvent("onkeydown", my_onkeydown_handler);
function my_onkeydown_handler()
{
switch (event.keyCode)
{
case 116 : // F5;
event.returnValue = false;
event.keyCode = 0;
window.status = "We have disabled F5";
break;
}
}
</script>

  
     
	<nav class="navbar navbar-inverse  navbar-fixed-top"  role="navigation" >
                               
                 <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style ="cursor: pointer;">
                <h5 style ="cursor: pointer;"><span class="tooltiptext" style ="cursor: pointer;">login </span></h5>
             </button>
            </div>
			 <a class="navbar-brand" style ="cursor: default; color:white;">Intermetal</a>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                
                    
                    
    
                </ul>
               <ul class="nav navbar-nav navbar-right">
                   <li><a data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in" style =" cursor: pointer; color:white;"><span class="tooltiptext">Login</span></span> </a></li>
                </ul>
                                              
       
            </div>
        </div>
   </nav>
    <form autocomplete="off" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" >
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog" style =" width:400px;">
        <div class="modal-content" style =" width:400px;">
            <div class="modal-header" style =" width:400px;">
              
               
            </div>
            <div class="modal-body">
                   <form class="form-inline">
                   <div class="form-group">
                       <label class="sr-only" for="email">Name</label><input type="text" class="form-control input-sm" placeholder="Name" name="uname">
                       </div>
                        <div class="form-group">  
                          
                           <label class="sr-only" for="password">Password</label>
                                     <input type="password" class="form-control input-sm" placeholder="Password"  name="psw"></div>
							 <br>
                   
                        
                       <button type="submit" name = "login" class="btn btn-info btn-xs" >Sign in</button>
                       <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cancel</button> 
                    
                   
                     
               
                    </form>
					</form>
					<?php
	if (isset($_POST['login'])) {
		
		$username = $_POST['uname'];
		$password = $_POST['psw'];
		if ($username ===  $_POST['uname'] && $password ===  $_POST['uname']){
			$_SESSION['user'] =  $_POST['uname'];
			$_SESSION['date'] = date("Y-m-d");
			echo "<script>window.location.href='./new.php';</script>";
			 header("Location: new.php");
			 	
		} else {
		
			echo "<script>alert('Invalid Username or Password..!'); </script>";
		}
	}

?>
            </div>
<!--
            <div class="modal-footer">
                <div style="padding:10px"></div>
            </div>
-->
        </div>
        </div>
    </div>
 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
       
      </ul>
    </div>
  </div>
</nav>

<div class="hero-image">
  <div class="hero-text">
   
  </div>
</div>



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
