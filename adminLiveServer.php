<?php
session_start();
include 'connect.php';
include 'functions.php';

if(isset($_SESSION['admin'])){
   if($_SESSION['admin'] != 4){
  die('Sorry ' . $_SESSION['email'] . ' you dont have enough rights access to this page') ;
  }
}
if($_GET['admins'] == "yes"){
	$query = "select ID,Name,Email,Department from main " ;
	$response = array();
	$jsonResponse ;
			$result = mysqli_query($conn, $query);

			if($result){
				if($result && mysqli_num_rows($result) > 0)
				{
					while($row = $result->fetch_assoc()) {
					 
					if($_SESSION['user_id'] ==  $row["ID"]){
					   
					}else{
					
					$response[] =  $row["Name"] ;
					$response[] = $row["Email"] ;
					$response[] = $row["Department"] ;
					}
			    	
    			 }
				$jsonResponse = json_encode($response);
				echo $jsonResponse ;
				
				}else{
				echo "Sorry no admins found" ;
				}
			}else{
			echo "Sorry no admins found" ;
		}
}
//echo(arg1)ho "1" ;
//echo "2" ;

?>