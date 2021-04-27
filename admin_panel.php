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

if(isset($_SESSION['admin']))
{
   	if($_SESSION['admin'] != 4)
   	{
  		if (isset($_SESSION['email']))
  			die('Sorry ' . $_SESSION['email'] . 
  			', You dont have enough rights access to this page') ;
  		else
  			die('Sorry, ' . 
  			' You dont have enough rights access to this page') ;
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



  	<link rel="stylesheet" type="text/css" id="fS" href="style_dark.css">


  	<?php

    if (isset($_POST['theme']))
    {
      $sql = "UPDATE main SET Theme = '" . $_POST['theme']
      . "' WHERE ID = '" . $_SESSION['user_id'] ."'";

      mysqli_query($conn, $sql);
    }

    $sql = "SELECT * FROM main WHERE ID = '" . $_SESSION['user_id'] ."'";

    $result = mysqli_query($conn, $sql);

    $row = $result->fetch_assoc();
    
    if (mysqli_num_rows($result) > 0)
    {
      if (isset($row['Theme']))
      {
        // For Random Theme
        if ($row['Theme'] == 'random')
        {
           $themes = ['abyss', 
                      'citrus',
                      'bright',
                      'dark',
                      'midnight',
                      'summer',
                      'bubbles',
                      'wsu'];

          echo '<link href="' . $themes[rand(0, count($themes) - 1)] . 
          '.css" id="themeCSS" rel="stylesheet" type="text/css">';
        }


        // Usual Case
        echo '<link href="' . $row['Theme'] . 
        '.css" id="themeCSS" rel="stylesheet" type="text/css">';

      }
      else
      {
        echo '<link href="dark.css" id="themeCSS" rel="stylesheet" type="text/css">';
      }
    }
    else
    {
      echo '<link href="dark.css" id="themeCSS" rel="stylesheet" type="text/css">';
    }


    ?>


<!-- <link rel="stylesheet" type="text/css" id="rS" href="request_dark.css">
 -->

  	<link rel="stylesheet" type="text/css" id="mS" href="mobile_dark.css">

  	<!-- ICONS SCRIPT -->
    <script src="https://kit.fontawesome.com/a104d25a3e.js" crossorigin="anonymous"></script>

    <!-- JavaScript (INTERNAL) -->
    <!-- <script>

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

  </script> -->

<style>

body 
{
	padding: 0%;
}

.removeButton
{
	font-family: 'Quicksand';
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
	font-family: 'Quicksand';
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
		main (Name, Email, Password, Is_Admin, Department, Theme) 
		VALUES (" . 

		"'" . $_POST['userName'] . "'" . "," . 
		"'" . $_POST['userEmail'] . "'" . "," .
		"'" . '$2y$10$36TVil8qx/HFC1.6nbQIYOZML9/erZcH0MUL.ufOdHacfC2qcs7Jy' . "'" . "," . 			// default password
		"'" . $_POST['isAdmin'] . "'" . "," .
		"'" . $_POST['department'] . "'" . "," .
		"'" . 'wsu' . "'" .

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
		elseif (!filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL))
		{
			echo "<div class='widget' style='text-align:center;color:red;margin-left:8%;margin-bottom:0%;margin-right:8%;'>Error adding User. Invalid Email!</div>";
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

	<div class="widget" style="padding: 4%; margin: 4%; background-color: transparent;box-shadow: none">
		

		<form action="" method="POST">
			<div class="formSection" style="padding: 4%;">
				
				<h1 class="widgetTitle" style="color:white;margin-left: 4%;margin-right: 4%">
				
				Add or Remove Users &nbsp<i class="fas fa-cogs"></i>
				
				</h1>

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
					<label>Is Admin?</label>
					<select name="isAdmin" required>
						<option value="7">No (Can't Add/Remove Users)</option>
						<option value="4">Yes (Can Add/Remove Users)</option>
					</select>
					<!-- <span style="color: red">(Not recommended)</span> -->

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

<?php

    $sql = "SELECT * FROM main WHERE ID = '" . $_SESSION['user_id'] ."'";

    $result = mysqli_query($conn, $sql);

    $row = $result->fetch_assoc();
    
    if (mysqli_num_rows($result) > 0)
    {
      if (isset($row['Theme']) && $row['Theme'] == 'dark')
      {
        echo '<script src="wallpaper.js"></script>';
      }
      elseif (isset($row['Theme']) && $row['Theme'] == 'wsu')
      {
        echo '<script type="text/javascript">

                document.body.style.backgroundImage = "url(\'wsu" + 
                (Math.floor(Math.random() * 6) + 1) + ".jpg\')";

              </script>';
      }
      elseif (isset($row['Theme']) && $row['Theme'] == 'dynamic')
      {
        echo '<script src="dynamicTheme.js"></script>';
      }
      // elseif (isset($row['Theme']) && $row['Theme'] == 'random')
      // {
      //   echo '<script src="randomTheme.js"></script>';
      // }
    }
    

    ?>

</html>




