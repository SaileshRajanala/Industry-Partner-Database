<?php
$servername = "mysprod.wichita.edu";
$username   =     "wpaccessibility";
$password   =     "wpaccessibility";
$database   = 	  "wpaccessibility";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>
