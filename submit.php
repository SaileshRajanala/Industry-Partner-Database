<?php
include "connect.php" ;
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$phoneno = $_POST["phoneno"];
$college = $_POST["college"];
$currsts = $_POST["currsts"];
$linkedin = $_POST["linkedin"];
$workplace = $_POST["workplace"];
$position = $_POST["position"];
$notes = $_POST["notes"];

$sql = "INSERT INTO primary_table  VALUES('$fname','$lname','$phoneno','$college','$currsts','$linkedin','$workplace','$position','$notes')";
//SET First_Name='Alfred Schmidt', Last_Name='Frankfurt'";
if (mysqli_query($conn, $sql)) {
  echo "<iframe src=\"https://giphy.com/embed/el7VG1XOOvi24oRXFt\" width=\"480\" height=\"480\" frameBorder=\"0\" class=\"giphy-embed\" allowFullScreen></iframe><p><a href=\"https://giphy.com/gifs/rickandmorty-season-1-adult-swim-rick-and-morty-el7VG1XOOvi24oRXFt\"></a></p>";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}


 ?>
