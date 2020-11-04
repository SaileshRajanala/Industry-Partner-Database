<!DOCTYPE html>
  <head>
    <style>
          div {
            margin: auto;
            width: 50%;
            padding: 10px;
          }
          table, th, td {
          border: 3px solid red;
          border-collapse: collapse;
          padding:5px;
          }
    </style>
  </head>
  <body>
  </body>
<?php
include "connect.php" ;

$sql = "SELECT First_Name, Last_Name, phoneNo,college,currentStatus,linkedin,workplace,position,notes FROM primary_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<div><table>";
    echo "<tr>" ;
    echo "<td>First Name </td> <td> Last Name </td> <td > Phone No</td> <td> College </td> <td> Current Status </td> <td>LinkedIn </td> <td> Work Place </td> <td> Position </td> <td> Notes </td>" ;
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
      if($row["First_Name"] != ""){
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
