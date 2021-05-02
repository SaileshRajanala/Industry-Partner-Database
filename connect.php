<?php
$server   = "mysprod.wichita.edu";
$user     = "wpaccessibility";
$password = "wpaccessibility";
$database = "wpaccessibility";

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) 
{
  die("Connection failed.\n" . mysqli_connect_error());
}
//echo "Connected successfully";

?>
