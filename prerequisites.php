<?php

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


$collegeEducation = ['No, I have not taken any college classes',
                     'Yes, I have taken some college classes', 
                     "Yes, I have an Associate's degree",
                     "Yes, I have a Technical degree",
                     "Yes, I have a Bachelor's degree",
                     "I prefer not to answer"];

$bsSchool = ['Yes, I did go to Wichita State University',
             'No, I attended different university'];

$Fields = ['Business', 
           'Education', 
           'Engineering', 
           'Health Professions', 
           'Liberal Arts',
           'Math', 
           'Science', 
           'Other'];

$engDisciplines = ['Aerospace Engineering', 
                   'Applied Computing',
                   'Biomedical Engineering', 
                   'Chemical Engineering',
                   'Civil Engineering', 
                   'Computer Engineering',
                   'Computer Science', 
                   'Cybersecurity', 
                   'Electrical Engineering',
                   'Environmental Engineering', 
                   'Engineering Management', 
                   'Facilities Management', 
                   'Industrial/Systems Engineering', 
                   'Mechatronics', 
                   'Mechanical Engineering', 
                   'Product Design and Manufacturing Engineering', 
                   'Other'];

$ms_phd_school = ['Yes, from Wichita State University', 
                  'Yes, from another College/University', 
                  'No'];

$involvement = ['Advising a team of students on a project',
                'Demonstrating a technical skill or area of expertise',
                'Facilitate tour of your company',
                'Judging a competition', 
                'K-12 Youth Outreach such as Summer Camps, Classroom Visits, etc',
                'One-Time Student Recruitment & Retention Event',
                'Research Partnership', 
                'Serving as a role model', 
                'Teaching a concept',
                'Tell your personal story as it relates to work in your field',
                "I'm not interested in involvement at this time"];

$involvementLevels = ['A one-time event lasting 1 to 2 hours',
                      'A day long event', 
                      'A recurring relationship over a semester'];

$recruitmentLevels = ['Elementary School', 
                      'Middle School', 
                      'High School', 
                      'College/University'];

$mentorAge = ['Elementry', 
              'Middle School', 
              'High School', 
              'Undergraduate', 
              "Master's", 
              "Doctoral"];

$roleModels = ['First-generation college students', 
               'Female', 
               'African American', 
               'Hispanic', 
               'Veterans', 
               'Other'];

// Insert Schema Automation below
$insertSchema = "Prefix";

for ($i = 1; $i < count($tableColumns); $i++)
  $insertSchema .= ", " . $tableColumns[$i];





// function randomFrom($randomThings)
// {
//   return $randomThings[rand(0, count($randomThings) - 1)];
// }






















































function printRecords($sql)
{
  include './connect.php';

  global $htmlFields, 
       $tableColumns, 
       $insertSchema;

  $records = "";

  $result = $conn->query($sql);

  if ($result) // check if not empty
  {
    $records .= '<table class="dataTable">';
            
    while($row = $result->fetch_assoc()) 
    {
      if($row["Prefix"] != "")
      {
        $records .= "<tr>";

        $records .= "<td>" . $row["First_Name"] . " " . $row["Last_Name"]  . "</td>";

        $records .= "<td>" . $row["Employer"] . "</td>";

        $records .= "<td>" . $row["Job_Title"] . "</td>";

        $records .= "<td>" . date('Y-m-d H:i:s', strtotime($row["Timestamp"])-18000) . "</td>";

        $records .= "</tr>";
      }
    }

    $records .= "</table>";
  }

  return $records;

}


function printRecordPreviews($sql)
{

include './connect.php';

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

//echo "Connected successfully";

// $sql = "SELECT " . $insertSchema . ", Timestamp FROM Industry_Partner_Database WHERE DATE(CONVERT_TZ(`Timestamp`,'+00:00','-06:00')) = DATE(CONVERT_TZ(CURRENT_TIMESTAMP(),'+00:00','-06:00')) ORDER BY Timestamp DESC";
    $recordPreviews = "";

    $result = $conn->query($sql);

    if ($result) 
    while($row = $result->fetch_assoc()) 
    {
      if($row["Prefix"] != "")
      {
        $recordPreviews .= "<div class=\"noPreview\">";

        $recordPreviews .= "<h2 class=\"previewTitle\">";
        $recordPreviews .= $row["Prefix"]     . ' ' . 
                           $row["First_Name"] . ' ' . 
                           $row["Last_Name"]  . ' ' . 
                           $row["Suffix"]     . ' ' . 
             ' <i class="fas fa-user-tie" style="float:right;margin-right:4%;"></i></h2>';

        if (($row["Job_Title"] != "") ||
            ($row["Employer"] != "")  ||
            ($row["City"] != "")      ||
            ($row["State"] != "")     ||
           false)
        {
            $recordPreviews .= '<div class="previewSection">';

            if ($row["Job_Title"] != "") 
              $recordPreviews .= $row["Job_Title"] . '<br>';

            $recordPreviews .= $row["Employer"] . '<br><br>';

            if (($row["City"] != "") && ($row["State"] != "")) 
            {
              $recordPreviews .= '<i class="fas fa-map-marker-alt"></i> ' . $row["City"] . ', ' . $row["State"];
            }
            elseif (!($row["City"] != "") && ($row["State"] != ""))
            {
              $recordPreviews .= '<i class="fas fa-map-marker-alt"></i> ' . $row["State"];
            }
            elseif (($row["City"] != "") && !($row["State"] != ""))
            {
              $recordPreviews .= '<i class="fas fa-map-marker-alt"></i> ' . $row["City"];
            }

            $recordPreviews .= '</div>';
        }

        // Education
        if ($row["College_Education"] == '3' ||
            $row["College_Education"] == '4' ||
            $row["College_Education"] == '5' ||
            $row["special_degree"]    != ""  ||
            false) 
        $recordPreviews .= "<div class='previewSection noShadow'><span class='previewSectionTitle'>Education Experience</span><br><br>";


        if ($row["College_Education"] == '3') 
        {
          $recordPreviews .= "<div class='previewBlock'><span class='previewSectionTitle'><b>Associate's Degree</b></span><i style='float:right;' class='fas fa-graduation-cap'></i> <br>" . 
          $row["Associates_Degree"] . ", " . $row["College_Degree_Year"] . '</div><br><br>';
        }

        if ($row["College_Education"] == '4') 
        {
          $recordPreviews .= "<div class='previewBlock'><span class='previewSectionTitle'><b>Technical Degree</b></span><i style='float:right;' class='fas fa-graduation-cap'></i> <br>" . 
          $row["Technical_Degree"] . ", " . $row["College_Degree_Year"] . '</div><br><br>';
        }

        if ($row["College_Education"] == '5') 
        {
    
          $BS_FIELD = "";

          if (is_numeric($row["BS_field"])) 
            $BS_FIELD = $Fields[intval($row["BS_field"]) - 1];
          else
            $BS_FIELD = $row["other_BS_field"];

          $recordPreviews .= "<div class='previewBlock'><span class='previewSectionTitle'><b>Bachelor's Degree</b></span><i style='float:right;' class='fas fa-graduation-cap'></i> <br>" . 
                $BS_FIELD . ", " . $row["College_Degree_Year"] . '<br><br>';

  
          $BS_DISCIPLINES = "";

         
          $arr = explode(', ', $row['BS_Eng_Discipline']);

          if (is_numeric($arr[0])) 
            $BS_DISCIPLINES .= $engDisciplines[$arr[0] - 1];
          else
              $BS_DISCIPLINES .= $row['other_BS_Eng_Discipline'];

          for ($i=1; $i < count($arr); $i++) 
          { 
            if (is_numeric($arr[$i])) 
              $BS_DISCIPLINES .= ', ' . $engDisciplines[$arr[$i] - 1];
            else
              $BS_DISCIPLINES .= ', ' . $row['other_BS_Eng_Discipline'];
          }

          $recordPreviews .= $BS_DISCIPLINES;
          
          if ($BS_DISCIPLINES != "") 
            $recordPreviews .= "<br><br>";    

          $BS_SCHOOL = "";

          if ($row["BS_school"] == 1)
            $BS_SCHOOL .= "Wichita State University";
          elseif ($row["BS_school"] == 2)
            $BS_SCHOOL .= $row['BS_other_school'];

          $recordPreviews .= '<i class="fas fa-university"></i> ' . $BS_SCHOOL . '</div><br><br>';





          if ($row['have_MS_degree'] == 1 || $row['have_MS_degree'] == 2)
          {
             $MS_SCHOOL = "";

             if ($row['have_MS_degree'] == 1)
                $MS_SCHOOL .= "Wichita State University";
             elseif ($row['have_MS_degree'] == 2)
                $MS_SCHOOL .= $row['MS_other_school'];

            $MS_FIELD = "";

            if (is_numeric($row["MS_field"])) 
              $MS_FIELD = $Fields[intval($row["MS_field"]) - 1];
            else
              $MS_FIELD = $row["other_MS_field"];

            $recordPreviews .= "<div class='previewBlock'><span class='previewSectionTitle'><b>Master's Degree</b></span><i style='float:right;' class='fas fa-graduation-cap'></i> <br>" . 
                  $MS_FIELD . ", " . $row["MS_year"] . '<br><br>';

    
            $MS_DISCIPLINES = "";

           
            $arr = explode(', ', $row['MS_Eng_Discipline']);

            if (is_numeric($arr[0])) 
              $MS_DISCIPLINES .= $engDisciplines[$arr[0] - 1];
            else
                $MS_DISCIPLINES .= $row['other_MS_Eng_Discipline'];

            for ($i=1; $i < count($arr); $i++) 
            { 
              if (is_numeric($arr[$i])) 
                $MS_DISCIPLINES .= ', ' . $engDisciplines[$arr[$i] - 1];
              else
                $MS_DISCIPLINES .= ', ' . $row['other_MS_Eng_Discipline'];
            }

            $recordPreviews .= $MS_DISCIPLINES;
            
            if ($MS_DISCIPLINES != "")
              $recordPreviews .= "<br><br>";

            $recordPreviews .= '<i class="fas fa-university"></i> ' . $MS_SCHOOL . '</div><br><br>';
          }


          if ($row['have_PHD_degree'] == 1 || $row['have_PHD_degree'] == 2)
          {
            $recordPreviews .= "<div class='previewBlock'>";

             $PHD_SCHOOL = "";

             if ($row['have_PHD_degree'] == 1)
                $PHD_SCHOOL .= "Wichita State University";
             elseif ($row['have_PHD_degree'] == 2)
                $PHD_SCHOOL .= $row['PHD_other_school'];

             $recordPreviews .= "<span class='previewSectionTitle'><b>PHD Degree</b></span><i style='float:right;' class='fas fa-graduation-cap'></i><br>" . 
                  $row["PHD_year"] . '<br><br>';

             $recordPreviews .= '<i class="fas fa-university"></i> ' . $PHD_SCHOOL . '</div><br><br>';
          }
        } // option 5 end

        if ($row['special_degree'] != "") 
        { 
          $recordPreviews .= "<div class='previewBlock'><span class='previewSectionTitle'><b>Areas of Specialization</b></span><i style='float:right' class='fas fa-microscope'></i> <br><br>" . $row["special_degree"] . '</div>';

          $recordPreviews .= "</div>";
        }

        // Involvement Opportunities
        $recordPreviews .= '<div class="previewSection noShadow"><span class="previewSectionTitle">Involvement Preference</span><br><br>';

        $recordPreviews .= "<div class='previewBlock'><span class='previewSectionTitle'><b>Involvement</b></span><i style='float:right;' class='far fa-handshake'></i><br><br>";

        $INVOLVEMENT = "";

        $arr = explode(', ', $row['Involvement']);

        if (is_numeric($arr[0])) 
          $INVOLVEMENT .= $involvement[$arr[0] - 1];

        for ($i=1; $i < count($arr); $i++) 
          if (is_numeric($arr[$i])) 
            $INVOLVEMENT .= ', <br>' . $involvement[$arr[$i] - 1];

        $recordPreviews .= $INVOLVEMENT . '</div>';



        if ($row['Involvement_Level'] != "") 
        {
          $recordPreviews .= "<br><br><div class='previewBlock'><span class='previewSectionTitle'><b>Involvement Level</b></span><i style='float:right;' class='fas fa-glass-cheers'></i> <br><br>";

          $INVOLVEMENT_LEVEL = "";

          $arr = explode(', ', $row['Involvement_Level']);

          if (is_numeric($arr[0])) 
            $INVOLVEMENT_LEVEL .= $involvementLevels[$arr[0] - 1];

          for ($i=1; $i < count($arr); $i++) 
            if (is_numeric($arr[$i])) 
              $INVOLVEMENT_LEVEL .= ', <br>' . $involvementLevels[$arr[$i] - 1];

          $recordPreviews .= $INVOLVEMENT_LEVEL . '</div>';
        }






        if ($row['Recruitment_Level'] != "") 
        {
          $recordPreviews .= "<br><br><div class='previewBlock'>";

          $arr = explode(', ', $row['Recruitment_Level']);

          if (count($arr) == 1)
            $recordPreviews .= "<span class='previewSectionTitle'><b>Age Level of students preferred for Recruitment or Retention Events</b></span><i style='float:right' class='fas fa-user-plus'></i><br><br>";
          else
              $recordPreviews .= "<span class='previewSectionTitle'><b>Age Levels of students preferred for Recruitment or Retention Events</b></span><i style='float:right' class='fas fa-user-plus'></i><br><br>";

          $RECRUITMENT_LEVEL = "";

          if (is_numeric($arr[0])) 
            $RECRUITMENT_LEVEL .= $recruitmentLevels[$arr[0] - 1];

          for ($i=1; $i < count($arr); $i++) 
            if (is_numeric($arr[$i])) 
              $RECRUITMENT_LEVEL .= ', ' . $recruitmentLevels[$arr[$i] - 1];

          $recordPreviews .= $RECRUITMENT_LEVEL . '</div>';
        }
        


        if ($row['Mentor_Age'] != "") 
        {
          $recordPreviews .= "<br><br><div class='previewBlock'>";

          $arr = explode(', ', $row['Mentor_Age']);

          if (count($arr) == 1)
            $recordPreviews .= "<span class='previewSectionTitle'><b>Mentors Students of Age Level </b></span><i style='float:right' class='fas fa-hands-helping'></i><br><br>";
          else
            $recordPreviews .= "<span class='previewSectionTitle'><b>Mentors Students of Age Levels </b></span><i style='float:right' class='fas fa-hands-helping'></i><br><br>";

          $MENTOR_AGE = "";

          if (is_numeric($arr[0])) 
            $MENTOR_AGE .= $mentorAge[$arr[0] - 1];

          for ($i=1; $i < count($arr); $i++) 
            if (is_numeric($arr[$i])) 
              $MENTOR_AGE .= ', ' . $mentorAge[$arr[$i] - 1];

          $recordPreviews .= $MENTOR_AGE . '</div>';
        }

        

        if ($row['Role_Model'] != "") 
        {
          $recordPreviews .= "<br><br><div class='previewBlock'>";

          $arr = explode(', ', $row['Role_Model']);

          $recordPreviews .= "<span class='previewSectionTitle'><b>Prefers to serve as a Role Model for </b></span><i class='fas fa-users'></i><br><br>";

          $ROLE_MODEL = "";

          if (is_numeric($arr[0])) 
            $ROLE_MODEL .= $roleModels[$arr[0] - 1];
          else
            $ROLE_MODEL .= $row['other_Role_Model'];

          for ($i=1; $i < count($arr); $i++) 
            if (is_numeric($arr[$i])) 
              $ROLE_MODEL .= ', ' . $roleModels[$arr[$i] - 1];
            else
              $ROLE_MODEL .= ', ' . $row['other_Role_Model'];

          $recordPreviews .= $ROLE_MODEL . '</div>';
        }


        $recordPreviews .= "</div>";

        
        if ($row["Involvement_Notes"] != "") 
        {
          $recordPreviews .= '<div class="previewSection"> <span class="previewSectionTitle">Involvement Notes</span> <i style="float:right;" class="far fa-sticky-note"></i> <br><br>' . $row["Involvement_Notes"] . '</div>';
        }

        $recordPreviews .= '<div class="previewSection"><span class="previewSectionTitle">Contact Info</span> 
        <i style="float:right;font-size: larger" class="far fa-address-card"></i> <br><br>' . 
        '<i class="far fa-envelope"></i>  Email : <a class="emailLink" href="mailto:' . $row["Email"] . '">' . $row["Email"] . '</a><br><br>';

        if (isset($row["Phone_Number"])) 
        {
          $recordPreviews .= '<i class="fas fa-phone-alt"></i> Phone : ' . $row["Phone_Number"] . '<br><br>';
        }

        $recordPreviews .= '<i class="far fa-clock"></i> Timestamp : ' . date('Y-m-d H:i:s', strtotime($row["Timestamp"])-18000);

        $recordPreviews .= '</div></div>';
      }
   }

   return $recordPreviews;
 }






















function searchArrayForKeyword($arr, $keyword)
{
  global $optionArray;

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

  $optionArray = [];       

  for ($i = 0; $i < count($arr); $i++)
  {
    if (strpos(strtolower($arr[$i]), strtolower($keyword)) !== false) 
    {
      if (strtolower($arr[$i]) == "other")
        array_push($optionArray, "other");
      else
        array_push($optionArray, $i + 1);
    }
  }

  return $optionArray;
}







// Search Prerequisites


function getSearchConditionsFor($keyword)
{
  global $searchConditions;

  $searchConditions .=  
          'OR UPPER(Prefix)                  LIKE UPPER(' . "'%{$keyword}%') \n" .
          'OR UPPER(Suffix)                  LIKE UPPER(' . "'%{$keyword}%') \n" .
          'OR UPPER(First_Name)              LIKE UPPER(' . "'%{$keyword}%') \n" .
          'OR UPPER(Last_Name)               LIKE UPPER(' . "'%{$keyword}%') \n" .

          'OR UPPER(CONCAT(Prefix, " ", First_Name, " ", Last_Name, " ", Suffix)) LIKE UPPER(' . "'%{$keyword}%') \n" .

          'OR UPPER(Email)                   LIKE UPPER(' . "'%{$keyword}%') \n" .
          'OR UPPER(Phone_Number)            LIKE UPPER(' . "'%{$keyword}%') \n" .

          'OR UPPER(Employer)                LIKE UPPER(' . "'%{$keyword}%') \n" .
          'OR UPPER(Job_Title)               LIKE UPPER(' . "'%{$keyword}%') \n" .
          'OR UPPER(State)                   LIKE UPPER(' . "'%{$keyword}%') \n" .
          'OR UPPER(City)                    LIKE UPPER(' . "'%{$keyword}%') \n" .

          'OR UPPER(Associates_Degree)       LIKE UPPER(' . "'%{$keyword}%') \n" .
          'OR UPPER(Technical_Degree)        LIKE UPPER(' . "'%{$keyword}%') \n" .

          'OR UPPER(College_Degree_Year)     LIKE UPPER(' . "'%{$keyword}%') \n" .

          'OR UPPER(BS_other_school)         LIKE UPPER(' . "'%{$keyword}%') \n" .
          'OR UPPER(other_BS_field)          LIKE UPPER(' . "'%{$keyword}%') \n" .
          'OR UPPER(other_BS_Eng_Discipline) LIKE UPPER(' . "'%{$keyword}%') \n" .

          'OR UPPER(MS_other_school)         LIKE UPPER(' . "'%{$keyword}%') \n" .
          'OR UPPER(MS_year)                 LIKE UPPER(' . "'%{$keyword}%') \n" .
          'OR UPPER(other_MS_field)          LIKE UPPER(' . "'%{$keyword}%') \n" .
          'OR UPPER(other_MS_Eng_Discipline) LIKE UPPER(' . "'%{$keyword}%') \n" .

          'OR UPPER(PHD_other_school)        LIKE UPPER(' . "'%{$keyword}%') \n" .
          'OR UPPER(PHD_year)                LIKE UPPER(' . "'%{$keyword}%') \n" .

          'OR UPPER(special_degree)          LIKE UPPER(' . "'%{$keyword}%') \n" .
          'OR UPPER(other_Role_Model)        LIKE UPPER(' . "'%{$keyword}%') \n" .
          'OR UPPER(Involvement_Notes)       LIKE UPPER(' . "'%{$keyword}%') \n";

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

  $options = searchArrayForKeyword($collegeEducation, $keyword);

  for ($i=0; $i < count($options); $i++) 
  { 
    $searchConditions .= 'OR UPPER(College_Education) LIKE UPPER(' . "'%{$options[$i]}%') \n";
  }


  $options = searchArrayForKeyword($bsSchool, $keyword);

  for ($i=0; $i < count($options); $i++) 
  { 
    $searchConditions .= 'OR UPPER(BS_school) LIKE UPPER(' . "'%{$options[$i]}%') \n";
  }


  $options = searchArrayForKeyword($Fields, $keyword);

  for ($i=0; $i < count($options); $i++) 
  { 
    $searchConditions .= 'OR UPPER(BS_field) LIKE UPPER(' . "'%{$options[$i]}%') \n";
    $searchConditions .= 'OR UPPER(MS_field) LIKE UPPER(' . "'%{$options[$i]}%') \n";
  }


  $options = searchArrayForKeyword($engDisciplines, $keyword);

  for ($i=0; $i < count($options); $i++) 
  { 
    $searchConditions .= 'OR UPPER(BS_Eng_Discipline) LIKE UPPER(' . "'%{$options[$i]}%') \n";
    $searchConditions .= 'OR UPPER(MS_Eng_Discipline) LIKE UPPER(' . "'%{$options[$i]}%') \n";
  }


  $options = searchArrayForKeyword($ms_phd_school, $keyword);

  for ($i=0; $i < count($options); $i++) 
  { 
    $searchConditions .= 'OR UPPER(have_MS_degree) LIKE UPPER(' . "'%{$options[$i]}%') \n";
    $searchConditions .= 'OR UPPER(have_PHD_degree) LIKE UPPER(' . "'%{$options[$i]}%') \n";
  }


  $options = searchArrayForKeyword($involvement, $keyword);

  for ($i=0; $i < count($options); $i++) 
  { 
    $searchConditions .= 'OR UPPER(Involvement) LIKE UPPER(' . "'%{$options[$i]}%') \n";
  }


  $options = searchArrayForKeyword($involvementLevels, $keyword);

  for ($i=0; $i < count($options); $i++) 
  { 
    $searchConditions .= 'OR UPPER(Involvement_Level) LIKE UPPER(' . "'%{$options[$i]}%') \n";
  }


  $options = searchArrayForKeyword($recruitmentLevels, $keyword);

  for ($i=0; $i < count($options); $i++) 
  { 
    $searchConditions .= 'OR UPPER(Recruitment_Level) LIKE UPPER(' . "'%{$options[$i]}%') \n";
  }


  $options = searchArrayForKeyword($mentorAge, $keyword);

  for ($i=0; $i < count($options); $i++) 
  { 
    $searchConditions .= 'OR UPPER(Mentor_Age) LIKE UPPER(' . "'%{$options[$i]}%') \n";
  }


  $options = searchArrayForKeyword($roleModels, $keyword);

  for ($i=0; $i < count($options); $i++) 
  { 
    $searchConditions .= 'OR UPPER(Role_Model) LIKE UPPER(' . "'%{$options[$i]}%') \n";
  }

  //echo "SEARCH CONDITIONS :::::: \n\n" . $searchConditions;

  return $searchConditions;
}



//getSearchConditionsFor("a");



























// EXPORT SEARCH LINK 

function exportSearchLink($keyword)
{
  return '<form method="post" action="exportSearch_developer.php">
          <button type="submit" name="keyword" value="' . $keyword . '" class="exportSearchLink"> Export Search Results for "' . $keyword
           . '"&nbsp <i class="fas fa-arrow-circle-right"></i>
          </button>
          </form>';
}















