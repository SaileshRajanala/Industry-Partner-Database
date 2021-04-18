<?php 

session_start();
include 'connect.php';
include 'functions.php';

if(isset($_SESSION['admin']))
{
   	if($_SESSION['admin'] != 4)
   	{
  		die('Sorry ' . $_SESSION['email'] . 
  		' you dont have enough rights access to this page') ;
  	}
}


/*
$query = "select Email from main " ;
			$result = mysqli_query($con, $query);

			if($result){
				if($result && mysqli_num_rows($result) > 0)
				{
					while($row = $result->fetch_assoc()) {
    				echo " ".$row["Email"]."<br>";
    			 }
					
					
				}else{
				echo "Sorry no admins found" ;
				}
			}else{
			echo "Sorry no admins found" ;
		}
		
*/
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>

	<link rel="preconnect" href="https://fonts.gstatic.com"> 
  	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

  	<link rel="stylesheet" type="text/css" href="test_dark.css">
  	<link rel="stylesheet" type="text/css" href="request_dark.css">
  	<link rel="stylesheet" type="text/css" href="style_dark.css">


  	<!-- ICONS SCRIPT -->
    <script src="https://kit.fontawesome.com/a104d25a3e.js" crossorigin="anonymous"></script>


<style>

body 
{
	margin: 0;
	border: 0;
	padding: 4%;

	background-image: url('stars.png'); 
	background-attachment: fixed;
	background-size: cover;
	background-repeat: no-repeat;

	color: white;
	font-size: x-large;
	font-family: 'Quicksand';
}

.removeButton
{
	color: red;
	background-color: transparent;

	text-decoration: none;

	padding: 1%;
	padding-right: 6%;
	padding-left: 6%;
	
	float: right;

	transition: all 0.25s;
}

.removeButton:hover
{
	color: white;
	background-color: red;
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

</style>
<script>

// function removeButtonHTML(i)
// {
// 	return '<form action=""> ' + 
// 			'<button type="submit" class="removeButton" ' +
// 			'name="removeUser" value="' + myObj[i] + '"> ' +
// 				'Remove &nbsp<i class="fas fa-user-minus"></i> ' +
// 			'</button> ' +
// 		'</form> '
// }

function reqAdminNames() 
{
  var xhttp;

  // var start = "<div class=\"eachData\"><p>";
  // var end = "</p></div>" ;

  var start = "<table class='dataTable'><tr>";
  var end   = "</tr></table>";

  var total = "";
  xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() 
  {
    if (this.readyState == 4 && this.status == 200) 
    {
    	 var myObj = JSON.parse(this.responseText);
    	 var length = myObj.length;

    	 var tdStart = '<td>';
    	 var tdEnd   = '</td>';

    	 if(length != 0)
    	 {
    	 	var i = 0;

	    	 while(i < length)
	    	 {
	    	 	if(i == 0)
	    	 	{
	   				total = start.concat(tdStart,myObj[i],tdEnd,tdStart,myObj[i+1],tdEnd,tdStart,myObj[i+2],tdEnd,tdStart,


	   					'<form action="" method="POST"> ' + 
						'<button type="submit" class="removeButton" ' +
						'name="removeUser" value="' + myObj[i + 1] + '"> ' +
							'Remove &nbsp<i class="fas fa-user-minus"></i> ' +
						'</button> ' +
						'</form> '


	   					,tdEnd,end);
	   			}
	   			else
	   			{
	   				total = total.concat(start,tdStart,myObj[i],tdEnd,tdStart,myObj[i+1],tdEnd,tdStart,myObj[i+2],tdEnd,tdStart,


	   					'<form action="" method="POST"> ' + 
						'<button type="submit" class="removeButton" ' +
						'name="removeUser" value="' + myObj[i + 1] + '"> ' +
							'Remove &nbsp<i class="fas fa-user-minus"></i> ' +
						'</button> ' +
						'</form> '


	   					,tdEnd,end);
	   			}

	   			i = i + 3;
	   		}
   		}
   		else
   		{
   			total = "<div class=\"eachEmail\"><p>No admins</p></div>"
   		}
   		
   		document.getElementById("emailsDiv").innerHTML = total;
    	//alert (total);
  	}
   		//alert (total);
   		//alert (total);
  }
    
  //alert ("htmlAdder1");
  xhttp.open("GET", "adminLiveServer.php?admins=yes", true);
  xhttp.send();  
};

reqAdminNames();

</script>
</head>

<body>

<?php
	

	if (isset($_POST['userName']) && isset($_POST['userEmail'])) 
	{
		$submission = FALSE;

		$sql = "

		INSERT INTO 
		main (Name, Email, Password, Is_Admin, Department)
		VALUES (" . 

		"'" . $_POST['userName'] . "'" . "," . 
		"'" . $_POST['userEmail'] . "'" . "," .
		"'" . 'password' . "'" . "," .
		"'" . $_POST['isAdmin'] . "'" . "," .
		"'" . $_POST['department'] . "'" .

		 ");

		";


		$check_sql = "

		SELECT * FROM
		main 
		WHERE Email = " . "'" . $_POST['userEmail'] . "' LIMIT 1 

		";

		$result = $conn->query($check_sql);

		if ($result->num_rows == 1) 
		{
			echo "<div class='widget' style='text-align:center;color:red;margin-left:8%;margin-bottom:0%;margin-right:8%;'>Error adding User. User already exists!</div>";
		}
		else
		{
		   if (mysqli_query($conn, $sql)) 
			{
			  echo "<div class='widget' style='text-align:center;color:aqua;margin-left:8%;margin-bottom:0%;margin-right:8%;'>User added successfully!</div>";
			}
		}
	}

	if (isset($_POST['removeUser'])) 
	{
		$sql = "

		DELETE FROM
		main 
		WHERE Email = " . "'" . $_POST['removeUser'] . "'

		";

		if (mysqli_query($conn, $sql)) 
		{
		  echo "<div class='widget' style='text-align:center;color:aqua;margin-left:8%;margin-bottom:0%;margin-right:8%;'>User deleted successfully!</div>";
		}	
		else
		{
		   echo "<div class='widget' style='text-align:center;color:red;margin-left:8%;margin-bottom:0%;margin-right:8%;'>Error deleting User.</div>";
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

	<div class="widget" style="padding: 4%; margin: 4%;background-color: transparent;">
		

		<form action="" method="POST">
			<div class="formSection" style="padding: 4%;background-color: rgb(25,25,25);">
				<h1 class="widgetTitle" style="margin-left: 4%;margin-right: 4%">Add or Remove Users</h1>
			<div class="sideByside">
				<div class="normalBlock">
					<label>Name</label>
					<input type="text" name="userName" required>
				</div>

				<div class="normalBlock">
					<label>Email</label>
					<input type="email" name="userEmail" required>
				</div>
				
			</div>

			<div class="sideByside">
				<div class="normalBlock">
					<label>Department</label>
					<input type="text" name="department" required>
				</div>

				<div class="normalBlock noHover">
					<label>Is Admin?<br>
						<span style="color: red">(Not recommended)</span></label>
					<select name="isAdmin" required>
						<option value="7">No (Can't Add/Remove Users)</option>
						<option value="4">Yes (Can Add/Remove Users)</option>
					</select>

				</div>
				
			</div>
			

			<div class="prevNextDiv">
			<button type="submit" class="submitButton addUserButton" style="float: right;">
				Add user &nbsp<i class="fas fa-user-plus"></i>
			</button>
			</div>

			</div>
		</form>
		<br>

	</div>
	
	<div class="widget">
		<h1 class="widgetTitle">Other Authorised Users</h1>
		<div id="emailsDiv"></div>
	</div>

</div>


</body>


<script type="text/javascript" src="wallpaper.js"></script>

</html>




