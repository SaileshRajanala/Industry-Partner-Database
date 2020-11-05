<!DOCTYPE html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Industry Partner Database</title>

  <link href="style_dark.css" id="fS" rel="stylesheet" type="text/css">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

  <!-- JavaScript (EXTERNAL) -->
  <script src="script.js"></script>

</head>

<body>
      
</body>

<?php

include "connect.php";

$prefix         = $_POST["prefix"];
$first_name     = $_POST["first_name"];
$last_name      = $_POST["last_name"];
$email          = $_POST["email"];
$phone_no       = $_POST["phone_no"];
$college        = $_POST["college"];
$current_status = $_POST["current_status"];
$linkedin       = $_POST["linkedin"];
$workplace      = $_POST["workplace"];
$position       = $_POST["position"];
$notes          = $_POST["notes"];

$sql = "

INSERT INTO 
Contacts (Prefix, First_Name, Last_Name, Email, Phone_Number, College, Current_Status, LinkedIn, Workplace, Title, Notes)

VALUES ('$prefix','$first_name','$last_name','$email','$phone_no','$college','$current_status','$linkedin','$workplace','$position','$notes');

";

if (mysqli_query($conn, $sql)) 
{
  echo "<center><h1 class=\"mainTitle\"> Thank you for <br> your entry.</h1>";
} 
else 
{
  echo "Error updating record: " . mysqli_error($conn);
}

?>
