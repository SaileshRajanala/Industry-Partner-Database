<?php
$server   =            "localhost"; 
$user     = "id15084806_teamlotus";  
$password =     "SlZ}Df1?-NeUt?>/";    
$filename =        "Industry Data";    

if (isset($_POST["fileName"]) && $_POST["fileName"] != "") 
{
    $filename = $_POST["fileName"];
}

$sql = "SELECT * FROM Industry_Partner_Database";

$conn = mysqli_connect($server, $user, $password, "id15084806_main_database");

if (!$conn) 
  die("Connection failed: " . mysqli_connect_error());

    $result = $conn->query($sql);

    $file_ending = "xlsx";

    header("Content-Type: application/xls");    
    header("Content-Disposition: attachment; filename=$filename.xls");  
    header("Pragma: no-cache"); 
    header("Expires: 0");

    $flag = false;

    include './prerequisites.php';
    global $htmlFields, 
           $tableColumns, 
           $insertSchema, 
           $collegeEducation,
           $bsSchool,
           $Fields,
           $engDisciplines,
           $ms_phd_school,
           $involvement,
           $involvementLevels,
           $recruitmentLevels,
           $mentorAge,
           $roleModels;

    while ($row = $result->fetch_assoc()) 
    {
        if (!$flag) 
        {
            echo implode("\t", array_keys($row)) . "\r\n";
            $flag = true;
        }

        $keys   = array_keys($row);

        $values = array_values($row);

        for ($i=0; $i < count($values); $i++) 
        { 
            if ($keys[$i] == 'College_Education') 
                $values[$i] = $collegeEducation[$values[$i] - 1];


            $values[$i] = str_replace("\r\n", "", $values[$i]);
            $values[$i] = str_replace("\r\t", "", $values[$i]);
            $values[$i] = str_replace("\n", "", $values[$i]);
            $values[$i] = str_replace("\t", "", $values[$i]);

            $values[$i] = html_entity_decode($values[$i], ENT_QUOTES);
        }

        echo implode("\t", $values) . "\r\n";
    }

?>