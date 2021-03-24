<!DOCTYPE html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Industry Partner Database</title>

  <!-- CSS 3 (EXTERNAL) -->
  <link href="submit_dark.css" id="sS" rel="stylesheet" type="text/css">
  <link href="mobile_dark.css" id="mS" rel="stylesheet" type="text/css">
  <!-- Font (Google Fonts) -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

  <!-- JavaScript (INTERNAL) -->
  <script>
    var d = new Date();

function swapStylesheet(sheet, name) {
   document.getElementById(name).setAttribute('href', sheet);
}
    if (d.getHours() >= 6 && d.getHours() < 18)
    {
        swapStylesheet("submit_bright.css", "sS");
        swapStylesheet("mobile_bright.css", "mS");
    }
    else
    {
        swapStylesheet("submit_dark.css", "sS");
        swapStylesheet("mobile_dark.css", "mS");
    }
  </script>

</head>

<body style="font-family: 'Quicksand'">

  <?php

 require "./connect.php";
 require_once "./global.php";

 $prefix         = $_POST["prefix"];
 $first_name     = $_POST["first_name"];
 $last_name      = $_POST["last_name"];
 $email          = $_POST["email"];
 $phone_number   = $_POST["phone_number"];
 // $college        = $_POST["college"];
 // $current_status = $_POST["current_status"];
 // $linkedin       = $_POST["linkedin"];
 // $workplace      = $_POST["workplace"];
 // $position       = $_POST["title"];
 // $notes          = $_POST["notes"];


$char = array("'","<",">");
$replace = array("\'","&lt","&gt;");

 $prefix         = str_replace($char,$replace,$prefix);
 $first_name     = str_replace($char,$replace,$first_name);
 $last_name      = str_replace($char,$replace,$last_name);
 $email          = str_replace($char,$replace,$email);
 $phone_number   = str_replace($char,$replace,$phone_number);




$htmlFields1 = [$prefix];

array_push($htmlFields1, $first_name);
array_push($htmlFields1, $last_name);
array_push($htmlFields1, $email);
array_push($htmlFields1, $phone_number);







$htmlFields = ["prefix"];

array_push($htmlFields, "suffix");
array_push($htmlFields, "first_name");
array_push($htmlFields, "last_name");
array_push($htmlFields, "email");
array_push($htmlFields, "phone_number");
array_push($htmlFields, "employer");
array_push($htmlFields, "job_title");
array_push($htmlFields, "state");
array_push($htmlFields, "city");
array_push($htmlFields, "college_education");
array_push($htmlFields, "associates_degree");
array_push($htmlFields, "technical_degree");
array_push($htmlFields, "college_degree_year");
array_push($htmlFields, "BS_school");
array_push($htmlFields, "BS_other_school");
array_push($htmlFields, "BS_field");
array_push($htmlFields, "other_BS_field");
array_push($htmlFields, "BS_Eng_Discipline");
array_push($htmlFields, "other_BS_Eng_Discipline");
array_push($htmlFields, "have_MS_degree");
array_push($htmlFields, "MS_other_school");
array_push($htmlFields, "MS_year");
array_push($htmlFields, "MS_field");
array_push($htmlFields, "other_MS_field");
array_push($htmlFields, "MS_Eng_Discipline");
array_push($htmlFields, "other_MS_Eng_Discipline");
array_push($htmlFields, "have_PHD_degree");
array_push($htmlFields, "PHD_other_school");
array_push($htmlFields, "PHD_year");
array_push($htmlFields, "special_degree");
array_push($htmlFields, "Involvement");
array_push($htmlFields, "Involvement_Level");
array_push($htmlFields, "Recruitment_Level");
array_push($htmlFields, "Mentor_Age");
array_push($htmlFields, "Role_Model");
array_push($htmlFields, "other_Role_Model");
array_push($htmlFields, "Involvement_Notes");

// Array to store all columns from SQL

$tableColumns = ["Prefix"];

array_push($tableColumns, "Suffix");
array_push($tableColumns, "First_Name");
array_push($tableColumns, "Last_Name");
array_push($tableColumns, "Email");
array_push($tableColumns, "Phone_Number");
array_push($tableColumns, "Employer");
array_push($tableColumns, "Job_Title");
array_push($tableColumns, "State");
array_push($tableColumns, "City");
array_push($tableColumns, "College_Education");
array_push($tableColumns, "Associates_Degree");
array_push($tableColumns, "Technical_Degree");
array_push($tableColumns, "College_Degree_Year");
array_push($tableColumns, "BS_school");
array_push($tableColumns, "BS_other_school");
array_push($tableColumns, "BS_field");
array_push($tableColumns, "other_BS_field");
array_push($tableColumns, "BS_Eng_Discipline");
array_push($tableColumns, "other_BS_Eng_Discipline");
array_push($tableColumns, "have_MS_degree");
array_push($tableColumns, "MS_other_school");
array_push($tableColumns, "MS_year");
array_push($tableColumns, "MS_field");
array_push($tableColumns, "other_MS_field");
array_push($tableColumns, "MS_Eng_Discipline");
array_push($tableColumns, "other_MS_Eng_Discipline");
array_push($tableColumns, "have_PHD_degree");
array_push($tableColumns, "PHD_other_school");
array_push($tableColumns, "PHD_year");
array_push($tableColumns, "special_degree");
array_push($tableColumns, "Involvement");
array_push($tableColumns, "Involvement_Level");
array_push($tableColumns, "Recruitment_Level");
array_push($tableColumns, "Mentor_Age");
array_push($tableColumns, "Role_Model");
array_push($tableColumns, "other_Role_Model");
array_push($tableColumns, "Involvement_Notes");




function optionValues($htmlField)
{
  $collegeEducation = ['No, I have not taken any college classes',
                     'Yes, I have taken some college classes', 
                     "Yes, I have an Associate's degree",
                     "Yes, I have a Technical degree",
                     "Yes, I have a Bachelor's degree",
                     "I prefer not to answer"];

$bsSchool = ['Yes, I did go to Wichita State University',
             'No, I attended different university'];

$degreeFields = ['Business', 'Education', 'Engineering', 
                 'Health Professions', 'Liberal Arts',
                 'Math', 'Science', 'Other'];

$engDisciplines = ['Aerospace Engineering', 'Applied Computing',
                   'Biomedical Engineering', 'Chemical Engineering',
                   'Civil Engineering', 'Computer Engineering',
                   'Computer Science', 'Cybersecurity', 'Electrical Engineering',
                   'Environmental Engineering', 'Engineering Management', 
                   'Facilities Management', 'Industrial/Systems Engineering', 
                   'Mechatronics', 'Mechanical Engineering', 
                   'Product Design and Manufacturing Engineering', 'Other'];

$ms_phd_school = ['Yes, from Wichita State University', 
                  'Yes, from another College/University', 'No'];

$involvement = ['Advising a team of students on a project',
                'Demonstrating a technical skill or area of expertise',
                'Facilitate tour of your company',
                'Judging a competition', 
                'K-12 Youth Outreach such as Summer Camps, Classroom Visits, etc',
                'One-Time Student Recruitment & Retention Event',
                'Research Partnership', 'Serving as a role model', 'Teaching a concept',
                'Tell your personal story as it relates to work in your field',
                "I'm not interested in involvement at this time"];

$involvementLevels = ['A one-time event lasting 1 to 2 hours',
                      'A day long event', 'A recurring relationship over a semester'];

$recruitmentLevels = ['Elementary School', 'Middle School', 
                      'High School', 'College/University'];

$mentorAge = ['Elementry', 'Elementary School', 'Middle School', 
                      'High School', 'Undergraduate', "Master's", "Doctoral"];

$roleModels = ['First-generation college students', 'Female', 'African American', 
               'Hispanic', 'Veterans', 'Other'];

  if ($htmlField == 'college_education') 
    return $collegeEducation[$_POST[$htmlField] - 1];

  elseif ($htmlField == 'BS_school') 
    return $bsSchool[$_POST[$htmlField] - 1];

  elseif ($htmlField == 'MS_field' || $htmlField == 'BS_field') 
  {
    if (!is_numeric($_POST[$htmlField]))
      return $degreeFields[count($degreeFields) - 1];
    else 
      return $degreeFields[$_POST[$htmlField] - 1];
  }

  elseif ($htmlField == 'BS_Eng_Discipline' || $htmlField == 'MS_Eng_Discipline' ||
          $htmlField == 'Involvement_Level' || $htmlField == 'Recruitment_Level' ||
          $htmlField == 'Mentor_Age'        || $htmlField == 'Role_Model'        ||
          $htmlField == 'Involvement') 
    return implode(', ', $_POST[$htmlField]);

  elseif ($htmlField == 'have_MS_degree' || $htmlField == 'have_PHD_degree') 
    return $ms_phd_school[$_POST[$htmlField] - 1];

  elseif ($htmlField == 'other_BS_Eng_Discipline' || 
          $htmlField == 'other_MS_Eng_Discipline' ||
          $htmlField == 'other_Role_Model') 
    return $_POST[$htmlField][0];

  else 
    return "{$_POST["" . $htmlField . ""]}";
}


// Insert Schema Automation below
$insertSchema = "Prefix";

for ($i = 1; $i < count($tableColumns); $i++)
  $insertSchema .= ", " . $tableColumns[$i];

$valueSchema = "'{$_POST["prefix"]}'";

for ($i = 1; $i < count($htmlFields); $i++)
{
  if (!isset($_POST[$htmlFields[$i]]))
    $valueSchema .= ",''";
  else if ($_POST[$htmlFields[$i]] == "")
    $valueSchema .= ",''";
  else if ( is_array($_POST[$htmlFields[$i]]) )
    $valueSchema .= ", " . "'" . implode(', ', $_POST[$htmlFields[$i]]) . "'";
  else
    $valueSchema .= ", " . "'{$_POST["" . $htmlFields[$i] . ""]}'";
}


//Above was global php file data


// Submission variable
$submission = FALSE;

$sql = "

INSERT INTO 
Industry_Partner_Database (" . $insertSchema . ")
VALUES   (" . $valueSchema  . ");

";

// echo $sql . '<br><br><br>';

if (mysqli_query($conn, $sql)) 
{   
  $submission = TRUE;
}
else 
{
  echo "Error : " . mysqli_error($conn);
}
  ?>
    
  <div id="thankYou">
    
    <?php

    if ($submission)
      echo "Thank you for your submission.";

    ?>

  </div>
  
  <?php 

    if ($submission)
      echo "<div class='summary'>" ;
    else 
      echo " <div class='summary' style='display:none;'>" ;

  ?>

  <h2>Here's your Summary.</h2>

  <table class="summaryTable">
    
    <?php

    if ($submission)
    {
      for ($i = 0; $i < count($tableColumns); $i++)
      {
        if (!isset($_POST[$htmlFields[$i]]))
        { 
          ;
        }
        elseif ($_POST[$htmlFields[$i]] == "")
        {
          ;
        }
        elseif ( is_array($_POST[$htmlFields[$i]]) )
        {
          if ($_POST[$htmlFields[$i]][0] != "")
          {
              echo "<tr><td>" . $tableColumns[$i] . "</td><td> " . 
              optionValues($htmlFields[$i]) . "</td></tr>";
          }
        }
        else
        {
            echo "<tr><td>" . $tableColumns[$i] . "</td><td> " . 
            optionValues($htmlFields[$i]) . "</td></tr>";
        }
      }
    }

    ?>

  </table>

  </div>

  </body>
