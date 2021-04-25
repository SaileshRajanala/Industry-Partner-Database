<!DOCTYPE html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Industry Partner Database</title>

  <!-- CSS 3 (EXTERNAL) -->
  <link href="submit_dark.css" id="sS" rel="stylesheet" type="text/css">
  <link href="mobile_dark.css" id="mS" rel="stylesheet" type="text/css">

  <!-- Font (Google Fonts) -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" 
  rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" 
  rel="stylesheet">

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
require_once "./prerequisites.php";

$values = [htmlentities($_POST["prefix"], ENT_QUOTES)];

array_push($values, htmlentities($_POST["suffix"], ENT_QUOTES));
array_push($values, htmlentities($_POST["first_name"], ENT_QUOTES));
array_push($values, htmlentities($_POST["last_name"], ENT_QUOTES));
array_push($values, htmlentities($_POST["email"], ENT_QUOTES));
array_push($values, htmlentities($_POST["phone_number"], ENT_QUOTES));
array_push($values, htmlentities($_POST["employer"], ENT_QUOTES));
array_push($values, htmlentities($_POST["job_title"], ENT_QUOTES));
array_push($values, htmlentities($_POST["state"], ENT_QUOTES));
array_push($values, htmlentities($_POST["city"], ENT_QUOTES));

if (isset($_POST["college_education"]))
  array_push($values, 
  htmlentities($collegeEducation[$_POST["college_education"] - 1], ENT_QUOTES));
else
  array_push($values, "");

array_push($values, htmlentities($_POST["associates_degree"], ENT_QUOTES));
array_push($values, htmlentities($_POST["technical_degree"], ENT_QUOTES));
array_push($values, htmlentities($_POST["college_degree_year"], ENT_QUOTES));

if (isset($_POST["BS_school"]))
  array_push($values, 
  htmlentities($bsSchool[$_POST["BS_school"] - 1], ENT_QUOTES));
else
  array_push($values, "");

array_push($values, htmlentities($_POST["BS_other_school"], ENT_QUOTES)); 


if (isset($_POST["BS_field"]))
{ 
  if (is_numeric($_POST["BS_field"]))
    array_push($values, htmlentities($Fields[$_POST["BS_field"] - 1], ENT_QUOTES));
  else
    array_push($values, htmlentities($Fields[count($Fields) - 1], ENT_QUOTES));
}
else
{
  array_push($values, "");
}


if (isset($_POST["other_BS_field"]) && is_array($_POST["other_BS_field"]))
  array_push($values, 
    htmlentities(implode(', ', $_POST["other_BS_field"]), ENT_QUOTES));
else
  array_push($values, "");

if (isset($_POST["BS_Eng_Discipline"]) && is_array($_POST["BS_Eng_Discipline"]))
{
  $bsValue = "";

  if (is_numeric($_POST["BS_Eng_Discipline"][0]))
    $bsValue .= $engDisciplines[ $_POST["BS_Eng_Discipline"][0] - 1];
  else
    $bsValue .= $engDisciplines[count($engDisciplines) - 1];

  for ($i=1; $i < count($_POST["BS_Eng_Discipline"]); $i++)
  { 
    if (is_numeric($_POST["BS_Eng_Discipline"][$i]))
      $bsValue .= ', ' . $engDisciplines[ $_POST["BS_Eng_Discipline"][$i] - 1];
    else
      $bsValue .= ', ' . $engDisciplines[count($engDisciplines) - 1];
  }
  
  array_push($values, htmlentities($bsValue, ENT_QUOTES));
}
else
  array_push($values, "");


if (isset($_POST["other_BS_Eng_Discipline"]) && is_array($_POST["other_BS_Eng_Discipline"]))
  array_push($values, 
    htmlentities(implode(', ', $_POST["other_BS_Eng_Discipline"]), ENT_QUOTES));
else
  array_push($values, "");

if (isset($_POST["have_MS_degree"]))
  array_push($values, 
  htmlentities($ms_phd_school[$_POST["have_MS_degree"] - 1], ENT_QUOTES));
else
  array_push($values, "");

array_push($values, htmlentities($_POST["MS_other_school"], ENT_QUOTES)); 

array_push($values, htmlentities($_POST["MS_year"], ENT_QUOTES));


if (isset($_POST["MS_field"]))
{ 
  if (is_numeric($_POST["MS_field"]))
    array_push($values, htmlentities($Fields[$_POST["MS_field"] - 1], ENT_QUOTES));
  else
    array_push($values, htmlentities($Fields[count($Fields) - 1], ENT_QUOTES));
}
else
{
  array_push($values, "");
}


if (isset($_POST["other_MS_field"]) && is_array($_POST["other_MS_field"]))
  array_push($values, 
    htmlentities(implode(', ', $_POST["other_MS_field"]), ENT_QUOTES));
else
  array_push($values, "");


if (isset($_POST["MS_Eng_Discipline"]) && is_array($_POST["MS_Eng_Discipline"]))
{
  $msValue = "";

  if (is_numeric($_POST["MS_Eng_Discipline"][0]))
    $msValue .= $engDisciplines[ $_POST["MS_Eng_Discipline"][0] - 1];
  else
    $msValue .= $engDisciplines[count($engDisciplines) - 1];

  for ($i=1; $i < count($_POST["MS_Eng_Discipline"]); $i++)
  { 
    if (is_numeric($_POST["MS_Eng_Discipline"][$i]))
      $msValue .= ', ' . $engDisciplines[ $_POST["MS_Eng_Discipline"][$i] - 1];
    else
      $msValue .= ', ' . $engDisciplines[count($engDisciplines) - 1];
  }
  
  array_push($values, htmlentities($msValue, ENT_QUOTES));
}
else
  array_push($values, "");


if (isset($_POST["other_MS_Eng_Discipline"]) && is_array($_POST["other_MS_Eng_Discipline"]))
  array_push($values, 
    htmlentities(implode(', ', $_POST["other_MS_Eng_Discipline"]), ENT_QUOTES));
else
  array_push($values, "");


if (isset($_POST["have_PHD_degree"]))
  array_push($values, 
  htmlentities($ms_phd_school[$_POST["have_PHD_degree"] - 1], ENT_QUOTES));
else
  array_push($values, "");

array_push($values, htmlentities($_POST["PHD_other_school"], ENT_QUOTES)); 

array_push($values, htmlentities($_POST["PHD_year"], ENT_QUOTES));

array_push($values, htmlentities($_POST["special_degree"], ENT_QUOTES));


if (isset($_POST["Involvement"]) && is_array($_POST["Involvement"]))
{
  $involvementValue = $involvement[ $_POST["Involvement"][0] - 1];

  for ($i=1; $i < count($_POST["Involvement"]); $i++) 
    $involvementValue .= ', ' .$involvement[$_POST["Involvement"][$i] - 1];

  array_push($values, htmlentities($involvementValue, ENT_QUOTES));
}
else
  array_push($values, "");


if (isset($_POST["Involvement_Level"]) && is_array($_POST["Involvement_Level"]))
{
  $involvementLevelsValue = $involvementLevels[ $_POST["Involvement_Level"][0] - 1];

  for ($i=1; $i < count($_POST["Involvement_Level"]); $i++) 
    $involvementLevelsValue .= ', ' .$involvementLevels[$_POST["Involvement_Level"][$i] - 1];

  array_push($values, htmlentities($involvementLevelsValue, ENT_QUOTES));
}
else
  array_push($values, "");


if (isset($_POST["Recruitment_Level"]) && is_array($_POST["Recruitment_Level"]))
{
  $recruitmentLevelsValue = $recruitmentLevels[ $_POST["Recruitment_Level"][0] - 1];

  for ($i=1; $i < count($_POST["Recruitment_Level"]); $i++) 
    $recruitmentLevelsValue .= ', ' . $recruitmentLevels[ $_POST["Recruitment_Level"][$i] - 1];

  array_push($values, htmlentities($recruitmentLevelsValue, ENT_QUOTES));
}
else
  array_push($values, "");


if (isset($_POST["Mentor_Age"]) && is_array($_POST["Mentor_Age"]))
{
  $mentorAgeValue = $mentorAge[ $_POST["Mentor_Age"][0] - 1];

  for ($i=1; $i < count($_POST["Mentor_Age"]); $i++) 
    $mentorAgeValue .= ', ' . $mentorAge[ $_POST["Mentor_Age"][$i] - 1];

  array_push($values, htmlentities($mentorAgeValue, ENT_QUOTES));
}
else
  array_push($values, "");


if (isset($_POST["Role_Model"]) && is_array($_POST["Role_Model"]))
{
  $roleModelsValue = "";

  if (is_numeric($_POST["Role_Model"][0]))
    $roleModelsValue .= $roleModels[ $_POST["Role_Model"][0] - 1];
  else
    $roleModelsValue .= $roleModels[count($roleModels) - 1];

  for ($i=1; $i < count($_POST["Role_Model"]); $i++)
  { 
    if (is_numeric($_POST["Role_Model"][$i]))
      $roleModelsValue .= ', ' . $roleModels[ $_POST["Role_Model"][$i] - 1];
    else
      $roleModelsValue .= ', ' . $roleModels[count($roleModels) - 1];
  }
  
  array_push($values, htmlentities($roleModelsValue, ENT_QUOTES));
}
else
  array_push($values, "");


if (isset($_POST["other_Role_Model"]) && is_array($_POST["other_Role_Model"]))
  array_push($values, 
    htmlentities(implode(', ', $_POST["other_Role_Model"]), ENT_QUOTES));
else
  array_push($values, "");

array_push($values, htmlentities($_POST["Involvement_Notes"], ENT_QUOTES));











// Submission variable
$submission = FALSE;

$value_Schema = "'" . $_POST['prefix'] . "'";

for ($i=1; $i < count($htmlFields); $i++) 
{ 
  if (!isset($_POST[$htmlFields[$i]]))
  {
    $value_Schema .= ", ''"; 
  }
  else if (is_array($_POST[$htmlFields[$i]])) 
  {
    $value_Schema .= ", '" . htmlentities(implode(', ', $_POST[$htmlFields[$i]]), ENT_QUOTES) . "'";
  }
  else
  {
    $value_Schema .= ", '" . htmlentities($_POST[$htmlFields[$i]], ENT_QUOTES) . "'";
  }
}

$sql = "

INSERT INTO 
Industry_Partner_Database (" . $insertSchema . ")
VALUES   (" . $value_Schema . ");

";

$passedTests = false;

for ($i=0; $i < count($htmlFields); $i++) 
{ 
  if (isset($_POST[$htmlFields[$i]])) 
  {
    $passedTests = true;
  }
}


// echo $sql;

// echo "VALUE _SCHEMA : " . $value_Schema . '<br><br><br>';

// echo "SQL  : " . $sql . '<br><br><br>';

if ($passedTests)
{
  if (mysqli_query($conn, $sql)) 
  {   
    $submission = TRUE;
  }
  else 
  {
    echo "Error : <br><br>" . mysqli_error($conn);
  }
}
else 
{
  echo "Error submitting the form!";
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

  <table class="summaryTable" style="box-shadow: none">
    
    <?php

    if ($submission)
    {
      for ($i = 0; $i < count($tableColumns); $i++)
      {
          if ($values[$i] != "")
          {
              echo "<tr><td>" . $tableColumns[$i] . 
              "</td><td> " .  $values[$i] . "</td></tr>";
          }
      }
    }

    ?>

  </table>

  </div>

  </body>
