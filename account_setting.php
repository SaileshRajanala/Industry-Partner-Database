<?php 

session_start();
include 'connect.php';
include 'functions.php';

$user_data = check_login($conn);

if(!isset($_SESSION['user_id']))
{
	if (isset($_SESSION['email']))
  		die('Sorry ' . $_SESSION['email'] . 
  		', You dont have enough rights access to this page') ;
  	else
  		die('Sorry, ' . 
  		' You dont have enough rights access to this page') ;
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Account Settings</title>

	<link rel="preconnect" href="https://fonts.gstatic.com"> 
  	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

  	<link rel="stylesheet" type="text/css" id="tS" href="test_dark.css">
  	<link rel="stylesheet" type="text/css" id="rS" href="request_dark.css">
  	<link rel="stylesheet" type="text/css" id="fS" href="style_dark.css">
  	<link rel="stylesheet" type="text/css" id="mS" href="mobile_dark.css">

  	<!-- ICONS SCRIPT -->
    <script src="https://kit.fontawesome.com/a104d25a3e.js" crossorigin="anonymous"></script>

    <!-- JavaScript (INTERNAL) -->
    <script>

    var d = new Date();

    function swapStylesheet(sheet, name) 
    {
        document.getElementById(name).setAttribute('href', sheet);
    }

    if (d.getHours() >= 6 && d.getHours() < 18)
    {  
        swapStylesheet("request_bright.css", "rS");
        swapStylesheet("test_bright.css", "tS");
        swapStylesheet("style_bright.css", "fS");
        swapStylesheet("mobile_bright.css", "mS");
    }
    else
    {
        swapStylesheet("request_dark.css", "rS");
        swapStylesheet("test_dark.css", "tS");
        swapStylesheet("style_dark.css", "fS");
        swapStylesheet("mobile_dark.css", "mS");
    }

  </script>


<style>

body 
{
	padding: 0%;
}

.removeButton
{
	color: red;
	border-radius: 5em;
	border: none;
	box-shadow: none;
	background-color: transparent;
	text-decoration: none;
	font-size: x-large;
	padding: 1%;
	margin: 0%;
	transform: scale(1);
	padding-right: 6%;
	padding-left: 6%;
	float: right;
	transition: all 0.25s;
}

.removeButton:hover
{
	color: white;
	background-color: red;
	cursor: pointer;
}

.addUserButton
{
	color: aqua;
	background-color: black;
}

.addUserButton:hover
{
	color: black;
	background-color: aqua;
}

.changePasswordButton
{
	color: aqua;
	background-color: black;
}

.changePasswordButton:hover
{
	color: black;
	background-color: aqua;
}

</style>

</head>

<body>

<?php

	if (isset($_POST['userPassword1']) && isset($_POST['userPassword2']) &&
			 ($_POST['userPassword1']     ==    $_POST['userPassword2'])) 
	{
		$sql = "

		UPDATE main
		SET Password = '" . $_POST['userPassword1'] . "' 
		WHERE Email = '" . $_SESSION['email'] . "';

		";

		if (mysqli_query($conn, $sql)) 
		{
		  echo "<div class='widget' style='text-align:center;color:aqua;margin-left:8%;margin-bottom:0%;margin-right:8%;'><i class='fas fa-wrench'></i>&nbsp Password changed successfully!</div>";
		}	
		else
		{
		   echo "<div class='widget' style='text-align:center;color:red;margin-left:8%;margin-bottom:0%;margin-right:8%;'>Error changing Password.</div>";
		}
	}

?>

<!-- Top Bar Arc Structure -->
<div id="topBar">

<!-- <img class="icon" src="lotus_dark.png" style="left: 4%;width: 2.5em;"> -->
    
   <form method="POST" action="test_developer.php">
  <!-- <button type="submit" class="linkB" id="homeNavButton" style="float: left">
   Industry Partner Database</button> -->

   <button type="submit" class="linkB" id="homeNavButton" style="float: left">
    <i class="fas fa-chevron-circle-left"></i> Back </button>
 </form>

  <form method="POST" action="logout.php">
   <button type="submit" class="linkB" style="float: right">
      <span class="navLabel">Sign Out</span> 
    <i class="fas fa-sign-out-alt"></i>          
   </button>
  </form>

  <button id="helpNavButton" class="linkB" style="float: right">
    <span class="navLabel">Help</span> <i id="helpNavIcon" class='far fa-question-circle'></i></button>

  <!-- <button class="linkB" style="float: right">
    Close <i id="closeLinkIcon" class='far fa-times-circle'></i></button> -->

  <button id="exportNavButton" class="linkB" style="float: right;display: none">
    <span class="navLabel">Export</span> <i id="exportNavIcon" class='fas fa-arrow-circle-down'></i></button>


  <!-- <button id="searchNavButton" class="linkB" style="float: right">
    <span class="navLabel">Search</span> <i id="searchNavIcon" class='fab fa-sistrix'></i></button> -->

</div>

<div class="dashboard">

	<div class="widget" style="padding: 4%; margin: 4%; background-color: transparent;box-shadow: none;">
		

		<form action="" method="POST">

			<div class="formSection" style="padding: 4%;">

				<h1 class="widgetTitle" style="margin-left: 4%;margin-right: 4%">

				Change Password &nbsp<i class="fas fa-cogs"></i>

				</h1>

			<div class="sideByside">
				<div class="normalBlock">
					<label>Password</label>
					<input type="password" name="userPassword1" required>
				</div>

				<div class="normalBlock">
					<label>Retype Password</label>
					<input type="password" name="userPassword2" required>
				</div>
				
			</div>	

			<div class="prevNextDiv">
			<button type="submit" class="submitButton changePasswordButton" 
			style="float: right;">
				<i class='fas fa-wrench'></i>&nbsp Change Password
			</button>
			</div>

			</div>

		</div>
	</form>
		<br>

	</div>

</div>

</body>


<script type="text/javascript" src="wallpaper.js"></script>

</html>




