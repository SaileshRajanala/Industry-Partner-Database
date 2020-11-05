<!DOCTYPE html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Industry Partner Database</title>

  <!-- CSS 3 (EXTERNAL) -->
  <link href="style_dark.css" id="fS" rel="stylesheet" type="text/css">

  <link href="submit_dark.css" id="sS" rel="stylesheet" type="text/css">

  <!-- Font (Google Fonts) -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

  <!-- JavaScript (EXTERNAL) -->
  <script src="script.js"></script>

</head>

<body>

  <?php

  // // Array to store all field ids from HTML

$htmlFields = ["prefix"];

array_push($htmlFields, "first_name");
array_push($htmlFields, "last_name");
array_push($htmlFields, "email");
array_push($htmlFields, "phone_number");
array_push($htmlFields, "college");
array_push($htmlFields, "current_status");
array_push($htmlFields, "linkedin");
array_push($htmlFields, "workplace");
array_push($htmlFields, "title");
array_push($htmlFields, "notes");

// Array to store all columns from SQL

$tableColumns = ["Prefix"];

array_push($tableColumns, "First_Name");
array_push($tableColumns, "Last_Name");
array_push($tableColumns, "Email");
array_push($tableColumns, "Phone_Number");
array_push($tableColumns, "College");
array_push($tableColumns, "Current_Status");
array_push($tableColumns, "LinkedIn");
array_push($tableColumns, "Workplace");
array_push($tableColumns, "Title");
array_push($tableColumns, "Notes");


  ?>
    
  <div id="thankYou">
    Thank you for your submission.
  </div>

  <div class="summary">

    <h2>Here's the Summary.</h2>

    <table class="summaryTable">
      
      <tr><td>First Name</td><td>Sailesh</td></tr>

      <?php

      for ($i = 0; $i < count($tableColumns); $i++)
        echo "<tr><td>" . $tableColumns[$i] . "
              </td><td>'{$_POST["" . $htmlFields[$i] . ""]}'</td></tr>";

      ?>

    </table>

  </div>

  </body>

<?php

include "connect.php";

// // Variables below store html form data 

// $prefix         = $_POST["prefix"];
// $first_name     = $_POST["first_name"];
// $last_name      = $_POST["last_name"];
// $email          = $_POST["email"];
// $phone_number   = $_POST["phone_number"];
// $college        = $_POST["college"];
// $current_status = $_POST["current_status"];
// $linkedin       = $_POST["linkedin"];
// $workplace      = $_POST["workplace"];
// $position       = $_POST["position"];
// $notes          = $_POST["notes"];

// Variables below store MySQL Syntax 

$insertSchema = "Prefix";

for ($i = 1; $i < count($tableColumns); $i++)
  $insertSchema .= ", " . $tableColumns[$i];

$valueSchema = "'{$_POST["prefix"]}'";

for ($i = 1; $i < count($htmlFields); $i++)
  $valueSchema .= ", " . "'{$_POST["" . $htmlFields[$i] . ""]}'";

$sql = "

INSERT INTO 
Contacts (" . $insertSchema . ")

VALUES (" . $valueSchema . ");

";

if (mysqli_query($conn, $sql)) 
{
  echo "<center><h1 class=\"submitMessage\"> Thank you for <br> your entry.</h1>";
} 
else 
{
  echo "Error updating record: " . mysqli_error($conn);
}

?>
