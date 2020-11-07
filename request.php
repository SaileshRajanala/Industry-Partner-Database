<!DOCTYPE html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Industry Partner Database</title>

    <!-- CSS 3 EXTERNAL -->
    <link href="request_dark.css" id="rS" rel="stylesheet" type="text/css">

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
    echo "<div><table><tr>";
    
    // Print Head Row
    for ($i=0; $i < count($tableColumns); $i++) 
      echo "<th>" . $tableColumns[$i] . "</th>";
    
    echo "</tr>";

    while($row = $result->fetch_assoc()) 
      if($row["Prefix"] != "")
      {
        echo "<tr>";

        for ($i=0; $i < count($tableColumns); $i++) 
          echo "<td>" . $row[$tableColumns[$i]] . "</td>";
         
        echo "</tr>";
      }

    echo "</table></div>";

} 
else 
{
    echo "0 results";
}

?>
