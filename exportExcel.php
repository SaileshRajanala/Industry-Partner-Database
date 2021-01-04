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
while ($property = mysqli_fetch_field($result)) 
{
    echo $property->name . "\t";
}

print("\n");    
//end of printing column names  
//start while loop to get data
while($row = $result->fetch_assoc())
{
    $schema_insert = "";

    for($j = 0; $j < mysqli_num_fields($result); $j++)
    {
        if(!isset($row[$j]))
            $schema_insert .= "NULL".$sep;
        elseif ($row[$j] != "")
            $schema_insert .= "$row[$j]".$sep;
        else
            $schema_insert .= "".$sep;
    }

    $schema_insert = str_replace($sep."$", "", $schema_insert);
    $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
    $schema_insert .= "\t";

    print(trim($schema_insert));
    print "\n";
}   

?>