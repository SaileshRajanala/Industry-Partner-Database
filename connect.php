<?php
$server = "localhost";
$user = "id15084806_teamlotus";
$password = "SlZ}Df1?-NeUt?>/";
$database = "id15084806_main_database";

$conn = mysqli_connect($server, $user, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>
