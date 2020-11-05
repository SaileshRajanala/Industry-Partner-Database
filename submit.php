<!DOCTYPE html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Industry Partner Database</title>

  <link href="style_dark.css" id="fS" rel="stylesheet" type="text/css">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

</head>

<body>
      
</body>

<?php

include "connect.php";

$prefix    = $_POST["prefix"];
$fname     = $_POST["fname"];
$lname     = $_POST["lname"];
$email     = $_POST["email"];
$phoneno   = $_POST["phoneno"];
$college   = $_POST["college"];
$currsts   = $_POST["currsts"];
$linkedin  = $_POST["linkedin"];
$workplace = $_POST["workplace"];
$position  = $_POST["position"];
$notes     = $_POST["notes"];

$sql = "INSERT INTO Contacts (Prefix,First_Name, Last_Name, Email, Phone_Number, College, Current_Status, LinkedIn, Workplace, Title, Notes)
VALUES('$prefix','$fname','$lname','adshisd@asd.com','$phoneno','$college','$currsts','$linkedin','$workplace','$position','$notes');";

if (mysqli_query($conn, $sql)) 
{
  echo "<center><h1 class=\"mainTitle\"> Thank you for <br> your entry.</h1>";
} 
else 
{
  echo "Error updating record: " . mysqli_error($conn);
}

?>
