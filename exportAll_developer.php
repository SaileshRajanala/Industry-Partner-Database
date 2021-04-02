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
              if (is_numeric($values[$i]))
                $values[$i] = $collegeEducation[$values[$i] - 1];

            if ($keys[$i] == 'BS_school')
              if (is_numeric($values[$i]))
                $values[$i] = $bsSchool[$values[$i] - 1];

            if ($keys[$i] == 'BS_field')
              if (is_numeric($values[$i]))
                $values[$i] = $Fields[$values[$i] - 1];

            if ($keys[$i] == 'BS_Eng_Discipline')
            {
                  $BS_DISCIPLINES = "";

                  $arr = explode(', ', $values[$i]);

                  if (is_numeric($arr[0])) 
                    $BS_DISCIPLINES .= $engDisciplines[$arr[0] - 1];
                  else
                    $BS_DISCIPLINES .= $arr[0];

                  for ($j=1; $j < count($arr); $j++) 
                  { 
                    if (is_numeric($arr[$j])) 
                      $BS_DISCIPLINES .= ', ' . $engDisciplines[$arr[$j] - 1];
                    else
                      $BS_DISCIPLINES .= ', ' . $arr[$j];
                  }

                  $values[$i] = $BS_DISCIPLINES;
            }
                





            if ($keys[$i] == 'have_MS_degree')
              if (is_numeric($values[$i]))
                $values[$i] = $ms_phd_school[$values[$i] - 1];

            if ($keys[$i] == 'MS_field')
              if (is_numeric($values[$i]))
                $values[$i] = $Fields[$values[$i] - 1];

            if ($keys[$i] == 'MS_Eng_Discipline')
            {
                  $MS_DISCIPLINES = "";

                  $arr = explode(', ', $values[$i]);

                  if (is_numeric($arr[0])) 
                    $MS_DISCIPLINES .= $engDisciplines[$arr[0] - 1];
                  else
                    $MS_DISCIPLINES .= $arr[0];

                  for ($j=1; $j < count($arr); $j++) 
                  { 
                    if (is_numeric($arr[$j])) 
                      $MS_DISCIPLINES .= ', ' . $engDisciplines[$arr[$j] - 1];
                    else
                      $MS_DISCIPLINES .= ', ' . $arr[$j];
                  }

                  $values[$i] = $MS_DISCIPLINES;
            }






            if ($keys[$i] == 'have_PHD_degree')
              if (is_numeric($values[$i]))
                $values[$i] = $ms_phd_school[$values[$i] - 1];




            if ($keys[$i] == 'Involvement')
            {
                  $INVOLVEMENT = "";

                  $arr = explode(', ', $values[$i]);

                  if (is_numeric($arr[0])) 
                    $INVOLVEMENT .= $involvement[$arr[0] - 1];

                  for ($j=1; $j < count($arr); $j++) 
                  { 
                    if (is_numeric($arr[$j])) 
                      $INVOLVEMENT .= ', ' . $involvement[$arr[$j] - 1];
                  }

                  $values[$i] = $INVOLVEMENT;
            }



            if ($keys[$i] == 'Involvement_Level')
            {
                  $INVOLVEMENT_LEVEL = "";

                  $arr = explode(', ', $values[$i]);

                  if (is_numeric($arr[0])) 
                    $INVOLVEMENT_LEVEL .= $involvementLevels[$arr[0] - 1];

                  for ($j=1; $j < count($arr); $j++) 
                  { 
                    if (is_numeric($arr[$j])) 
                      $INVOLVEMENT_LEVEL .= ', ' . $involvementLevels[$arr[$j] - 1];
                  }

                  $values[$i] = $INVOLVEMENT_LEVEL;
            }




            if ($keys[$i] == 'Recruitment_Level')
            {
                  $RECRUITMENTMENT_LEVEL = "";

                  $arr = explode(', ', $values[$i]);

                  if (is_numeric($arr[0])) 
                    $RECRUITMENTMENT_LEVEL .= $recruitmentLevels[$arr[0] - 1];

                  for ($j=1; $j < count($arr); $j++) 
                  { 
                    if (is_numeric($arr[$j])) 
                      $RECRUITMENTMENT_LEVEL .= ', ' . $recruitmentLevels[$arr[$j] - 1];
                  }

                  $values[$i] = $RECRUITMENTMENT_LEVEL;
            }


            if ($keys[$i] == 'Mentor_Age')
            {
                  $MENTOR_AGE = "";

                  $arr = explode(', ', $values[$i]);

                  if (is_numeric($arr[0])) 
                    $MENTOR_AGE .= $mentorAge[$arr[0] - 1];

                  for ($j=1; $j < count($arr); $j++) 
                  { 
                    if (is_numeric($arr[$j])) 
                      $MENTOR_AGE .= ', ' . $mentorAge[$arr[$j] - 1];
                  }

                  $values[$i] = $MENTOR_AGE;
            }


            if ($keys[$i] == 'Role_Model')
            {
                  $ROLE_MODEL = "";

                  $arr = explode(', ', $values[$i]);

                  if (is_numeric($arr[0])) 
                    $ROLE_MODEL .= $roleModels[$arr[0] - 1];
                  else
                    $ROLE_MODEL .= $arr[0];

                  for ($j=1; $j < count($arr); $j++) 
                  { 
                    if (is_numeric($arr[$j])) 
                      $ROLE_MODEL .= ', ' . $roleModels[$arr[$j] - 1];
                    else
                      $ROLE_MODEL .= ', ' . $arr[$j];
                  }

                  $values[$i] = $ROLE_MODEL;
            }


            $values[$i] = str_replace("\r\n", "", $values[$i]);
            $values[$i] = str_replace("\r\t", "", $values[$i]);
            $values[$i] = str_replace("\n", "", $values[$i]);
            $values[$i] = str_replace("\t", "", $values[$i]);

            $values[$i] = html_entity_decode($values[$i], ENT_QUOTES);
        }

        echo implode("\t", $values) . "\r\n";
    }

?>