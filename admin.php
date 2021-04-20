<?php 
session_start();
include 'functions.php' ;
include 'connect.php' ;

if(isset($_SESSION['admin']))
{
   if($_SESSION['admin'] != 4)
   {
    die('Sorry ' . $_SESSION['email'] . ' you dont have enough rights access to this page') ;
   }
   
   header('Location: admin_panel.php');
}

?>
<!DOCTYPE html>
<html>

<head>
  <link rel="preconnect" href="https://fonts.gstatic.com"> 
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="login_style.css">
</head>

<body name="body">

<div class="login_form">
<h1>Login For Admins</h1><br><br>
<form action="admin-process.php" method="POST">
  <label for="email">Email:</label><br><br>
  <input type="email" id="email" name="email" placeholder="example@example.com"><br><br>
  <label for="password">Password:</label><br><br>
  <input type="password" id="password" name="password" placeholder=""><br><br>
  <button type="submit" name="submit">Submit</button>
</form>
</div>

</body>
</html>
