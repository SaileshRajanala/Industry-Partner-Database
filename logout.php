<?php

session_start();

if(isset($_SESSION['user_id']) )
{
	unset($_SESSION['user_id']);
	unset($_SESSION['admin']);
	unset($_SESSION['email']);
}

header("Location: login.php");
die;