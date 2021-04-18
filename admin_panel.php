<?php 

session_start();
include 'connect.php' ;
include 'functions.php' ;

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

<style>

body 
{
	margin:0;
	border:0;

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

#emailFrame .eachEmail{
		 background: #5deb5b ;
	 padding: 1px;
	margin:0px;
	height:50px;
	width:380px;
	margin-left:10px;
	margin-top:4px;
	border-radius: 5px;
}
#emailFrame p{
	position: relative;
	 font-size:1.5em;
	 text-align: center;
	text-align: center;
vertical-align: middle;
line-height: 0px; 

	
}

</style>
<script>
function reqAdminNames() {
  var xhttp;
  var start = "<div class="eachData"><p>";
  var end = "</p></div>" ;
  var total = " ";
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
         var myObj = JSON.parse(this.responseText);
         var length = myObj.length;
         if(length != 0 ){
             var i = 0 ;
         while(  i < length){
             if(i == 0){
               total = start.concat(myObj[i],myObj[i+1],myObj[i+2],end);
               //alert(total) ;
           }else{
               total = total.concat(start,myObj[i+1],myObj[i+2],end);
               //alert(total);
               }
               i = i + 3 ;
           }
       }else{
           total = "<div class="eachEmail"><p>No admins</p></div>"
               }
               document.getElementById("emailFrame").innerHTML = total;
        //alert (total);
           }
           //alert (total);
           //alert (total);
    }


      //alert ("htmlAdder1");
  xhttp.open("GET", "adminLiveServer.php?admins=yes", true);
  xhttp.send();

};

</script>

</head>

<body>

<div class="container">
<h1>Email Retrieving Panel</h1>
<button onclick="reqAdminNames()">clickme</button>
<div  id = "emailFrame">
<div class="eachEmail"><p>Emails will be displayed here</p></div>
</div>
</div>






<tr>
              
   <td>Sailesh Rajanala</td>
   
</tr>

</body>


<script type="text/javascript" src="wallpaper.js"></script>

</html>




