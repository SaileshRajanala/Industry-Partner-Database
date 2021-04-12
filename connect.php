<?php
$servername = "mysprod.wichita.edu";
$username   =     "wpaccessibility";
$password   =     "wpaccessibility";

$conn = mysqli_connect($servername, $username, $password, "id15084806_main_database");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>
