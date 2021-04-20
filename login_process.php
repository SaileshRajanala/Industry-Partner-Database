<?php
session_start();

include 'connect.php' ;
include 'functions.php' ;


if($_SERVER['REQUEST_METHOD'] == "POST" && (isset( $_POST['email']) || isset($_POST['password']) || isset($_POST['emailAdmin']) || isset($_POST['passwordAdmin']))){
		$reqUser = " " ;
		//something was posted

		if(isset( $_POST['email']) || isset($_POST['password'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
			//echo "test" ;
			$reqUser = "instructorUser";
		}elseif(isset($_POST['emailAdmin']) || isset($_POST['passwordAdmin'])){
		$email = $_POST['emailAdmin'];
		$password = $_POST['passwordAdmin'];
		$reqUser = "adminUser";
		}

		//$user_name = $_POST['user_name'];
		//$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email)){

			//read from database
			$query = "select * from main where Email = '$email' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['ID'];
						$_SESSION['admin'] = $user_data['Is_Admin'];
						$_SESSION['email'] = $user_data['Email'];

						//echo "this is idddddd " ;
						//echo $user_data['ID'];
						header('Location: test_developer.php');
						//die;
					}
				}
			}
			
			$_SESSION['error'] =  "Wrong username or password!" ;
				if($reqUser == "instructorUser"){
			header('location: login.php');
				}else{
				header('location: admin.php');
				}
      
    }else{
        $_SESSION['error'] =  "Wrong username or password!" ;
	        if($reqUser == "instructorUser"){
			header('location: login.php');
				}else{
				header('location: admin.php');
				}
		}
	}else{
		$_SESSION['error'] =  "Wrong username or password!" ;
	}




?>