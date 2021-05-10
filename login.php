<?php 
session_start();
include 'functions.php' ;

//echo $_SESSION['user_id'] ; 
if(!empty($_SESSION['user_id']))
{
  header("Location: test_developer.php");
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
  
<h1>Welcome</h1> 
<br><br>

<form action="login_process.php" method="POST">

  <label for="email">Email</label>
  <br><br>
  <input type="email" id="email" name="email" placeholder="name@mail.com">
  <br><br>

  <label for="password">Password</label>
  <br><br>
  <input type="password" id="password" name="password" placeholder="">
  <br><br>

  <div class="errorMsg" style="color:red; position: absolute;"><p><?php if(isset($_SESSION['error'])){ echo $_SESSION['error'] ; unset($_SESSION['error']) ; } ?></p> </div>
  <button type="submit" name="submit">Submit</button>

</form>
</div>


</body>

<script type="text/javascript">

    document.body.style.backgroundImage = "url(\'wsu" + 
    (Math.floor(Math.random() * 6) + 1) + ".jpg\')";

</script>
  </html>