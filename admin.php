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
<form action="login_process.php" method="POST">
  <label for="email">Email:</label><br><br>
  <input type="email" id="email" name="emailAdmin" placeholder="example@example.com" ><br><br>
  <label for="password">Password:</label><br><br>
  <input type="password" id="password" name="passwordAdmin" placeholder=""><br><br>
  <div class="errorMsg" style="color:red; position: absolute;"><p><?php if(isset($_SESSION['error'])){ echo $_SESSION['error'] ; unset($_SESSION['error']) ; } ?></p> </div>
  <button type="submit" name="submit">Submit</button>
</form>
</div>

</body>
</html>
