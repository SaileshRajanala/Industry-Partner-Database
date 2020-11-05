<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Industry Partner Database</title>
    <!-- <link href="style.css" rel="stylesheet" type="text/css"> -->

    <link href="style_dark.css" id="fS" rel="stylesheet" type="text/css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
  </head>
  <body></body>

<?php
include "connect.php";

$sql = "SELECT First_Name, Last_Name, phoneNo,college,currentStatus,linkedin,workplace,position,notes FROM Contacts";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    echo "<div><table>";
    echo "<tr>" ;
    echo "<td>First Name </td> <td> Last Name </td> <td > Phone No</td> <td> College </td> <td> Current Status </td> <td>LinkedIn </td> <td> Work Place </td> <td> Position </td> <td> Notes </td>" ;
    echo "</tr>";

    while($row = $result->fetch_assoc()) 
    {
      if($row["First_Name"] != "")
      {
        echo "<tr>";
         echo "<td>". $row["First_Name"]. " </td><td> " . $row["Last_Name"] . "</td><td>" . $row["phoneNo"]. "</td><td>" . $row["college"]. "</td><td>" . $row["currentStatus"]. "</td><td>" . $row["linkedin"]. "</td><td>" .  $row["workplace"] . "</td><td>" . $row["position"] . "</td><td>" . $row["notes"]. "</td>";
        echo "</tr>";
      }
    }

    echo "</table></div>";
} else {
    echo "0 results";
}
?>
