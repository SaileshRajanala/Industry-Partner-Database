<?php
session_start();

include 'connect.php' ;
include 'functions.php' ; 


if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		//$user_name = $_POST['user_name']; 
		//$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//read from database
			$query = "select * from main where Email = '$email' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] === $password && $user_data['Is_Admin'] == 4 )
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
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>