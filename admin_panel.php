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

.container
{
    position: absolute;
    height: 200px;
    width: 400px;
    margin: -300px 0 0 -200px;
    top: 50%;
    left: 50%;
}
.container h1{
	font-family: "Sofia", sans-serif;
}
#emailFrame {
	height: 500px;
    width: 400px;
	background:#e95;
	border:5px solid red;
   
}

#emailFrame .eachEmail
{
	background: #5deb5b ;
	 padding: 1px;
	margin:0px;
	height:50px;
	width:380px;
	margin-left:10px;
	margin-top:4px;
	border-radius: 5px;
}
#emailFrame p
{
	position: relative;
	 font-size:1.5em;
	 text-align: center;
	text-align: center;
	vertical-align: middle;
	line-height: 0px; 
}

</style>
<script>
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
	   				total = start.concat(tdStart,myObj[i],tdEnd,tdStart,myObj[i+1],tdEnd,tdStart,myObj[i+2],tdEnd,end);
	   			}
	   			else
	   			{
	   				total = total.concat(start,tdStart,myObj[i],tdEnd,tdStart,myObj[i+1],tdEnd,tdStart,myObj[i+2],tdEnd,end);
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

?>


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

				<div class="normalBlock">
					<label>Is Admin?</label>
					<select name="isAdmin" required style="">
						<option value="4">Yes (Can Add/Remove Users)</option>
						<option value="7">No (Can't Add/Remove Users)</option>
					</select>
				</div>
				
			</div>
			

			<div class="prevNextDiv">
			<button type="submit" class="submitButton" style="float: right;">
				Add user &nbsp<i class="fas fa-user-plus"></i>
			</button>
			</div>

			</div>
		</form>
		<br>

		<!-- <form action="">
			<button type="submit" class="linkB">
				Remove user &nbsp<i class="fas fa-user-minus"></i>
			</button>
		</form> -->

	</div>
	
	<div class="widget">
		<h1 class="widgetTitle">Authorised Users</h1>
		<div id="emailsDiv"></div>
	</div>

</div>


</body>


<script type="text/javascript" src="wallpaper.js"></script>

</html>




