<!DOCTYPE html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Industry Partner Database</title>

  <!-- CSS 3 (EXTERNAL) -->
  <link href="submit_dark.css" id="sS" rel="stylesheet" type="text/css">

  <!-- Font (Google Fonts) -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

  <!-- JavaScript (INTERNAL) -->
  <script>
    var d = new Date();

function swapStylesheet(sheet, name) {
   document.getElementById(name).setAttribute('href', sheet);
}
    if (d.getHours() >= 6 && d.getHours() < 18)
        swapStylesheet("submit_bright.css", "sS");
    else
        swapStylesheet("submit_dark.css", "sS");
  </script>

</head>

<body>

  <?php

require "./connect.php";
require_once "./global.php";

// Submission variable
$submission = FALSE;

// Value Schema
$valueSchema = "'{$_POST["prefix"]}'";

for ($i = 1; $i < count($htmlFields); $i++)
  $valueSchema .= ", " . "'{$_POST["" . $htmlFields[$i] . ""]}'";

$sql = "

INSERT INTO 
Contacts (" . $insertSchema . ")
VALUES   (" . $valueSchema  . ");

";

if (mysqli_query($conn, $sql)) 
{
  $submission = TRUE;
} 
else 
{
  echo "Error updating record: " . mysqli_error($conn);
}

  ?>
    
  <div id="thankYou">
    <?php

    if ($submission)
      echo "Thank you for your submission.";

    ?>

  </div>

  <div class="summary">

    <h2>Here's your Summary.</h2>

    <table class="summaryTable">
      
      <?php

      if ($submission)
        for ($i = 0; $i < count($tableColumns); $i++)
          echo "<tr><td>" . $tableColumns[$i] . "
              </td><td>{$_POST["" . $htmlFields[$i] . ""]}</td></tr>";

      ?>

    </table>

  </div>

  </body>

<?php

// include "connect.php";

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


// if (mysqli_query($conn, $sql)) 
// {
//   echo "<center><h1 class=\"submitMessage\"> Thank you for <br> your entry.</h1>";
// } 
// else 
// {
//   echo "Error updating record: " . mysqli_error($conn);
// }

?>
