<!DOCTYPE html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Industry Partner Database</title>
    <!-- <link href="style.css" rel="stylesheet" type="text/css"> -->

    <link href="request_dark.css" id="sS" rel="stylesheet" type="text/css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

    <!-- JavaScript (EXTERNAL) -->
    <script src="script.js"></script>

  </head>

  <body></body>

<?php

include "connect.php";
include "global.php";

$sql = "SELECT " . $insertSchema . " FROM Contacts";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    echo "<div class=\"summary\"><table class=\"summaryTable\">";
    echo "<tr>";
    
    for ($i=0; $i < count($tableColumns); $i++) 
      echo "<td>" . $tableColumns[$i] . "</td>";
    
    echo "</tr>";

    while($row = $result->fetch_assoc()) 
      if($row["Prefix"] != "")
      {
        echo "<tr>";

        for ($i=0; $i < count($tableColumns); $i++) 
          echo "<td>" . $row[$tableColumns[$i]] . "</td>";
         // echo "<td>". $row["First_Name"]. " </td><td> " . $row["Last_Name"] . "</td><td>" . $row["phoneNo"]. "</td><td>" . $row["college"]. "</td><td>" . $row["currentStatus"]. "</td><td>" . $row["linkedin"]. "</td><td>" .  $row["workplace"] . "</td><td>" . $row["position"] . "</td><td>" . $row["notes"]. "</td>";
        echo "</tr>";
      }

    echo "</table></div>";

} else {
    echo "0 results";
}
?>
