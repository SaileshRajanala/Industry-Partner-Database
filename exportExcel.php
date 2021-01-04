<?php
$DB_Server = "localhost"; //MySQL Server    
$DB_Username = "id15084806_teamlotus"; //MySQL Username     
$DB_Password = "SlZ}Df1?-NeUt?>/";             //MySQL Password     
$DB_DBName = "id15084806_main_database";         //MySQL Database Name  
$filename = "output";         //File Name

$sql = "SELECT * FROM Contacts";

$conn = mysqli_connect($DB_Server, $DB_Username, $DB_Password, "id15084806_main_database");

if (!$conn) 
  die("Connection failed: " . mysqli_connect_error());

$result = $conn->query($sql);

$file_ending = "xls";
//header info for browser
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
/*******Start of Formatting for Excel*******/   
//define separator (defines columns in excel & tabs in word)
$sep = "\t"; //tabbed character
//start of printing column names as names of MySQL fields
// while ($property = mysqli_fetch_field($result)) 
// {
//     echo $property->name . "\t";
// }

// print("\n");    
//end of printing column names  
//start while loop to get data
$flag = false;
while ($row = $result->fetch_assoc()) 
{
    if (!$flag) 
    {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }

    $copy = array_values($row);

    for ($i=0; $i < count($copy); $i++) 
    { 
        $copy[$i] = str_replace("\r\n", "", $copy[$i]);
        $copy[$i] = str_replace("\r\t", "", $copy[$i]);
        $copy[$i] = str_replace("\n", "", $copy[$i]);
        $copy[$i] = str_replace("\t", "", $copy[$i]);
    }

    echo implode("\t", $copy) . "\r\n";
}

?>