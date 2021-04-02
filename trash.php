<?php

// function optionValues($htmlField)
// {
//   $collegeEducation = ['No, I have not taken any college classes',
//                      'Yes, I have taken some college classes', 
//                      "Yes, I have an Associate's degree",
//                      "Yes, I have a Technical degree",
//                      "Yes, I have a Bachelor's degree",
//                      "I prefer not to answer"];

// $bsSchool = ['Yes, I did go to Wichita State University',
//              'No, I attended different university'];

// $degreeFields = ['Business', 'Education', 'Engineering', 
//                  'Health Professions', 'Liberal Arts',
//                  'Math', 'Science', 'Other'];

// $engDisciplines = ['Aerospace Engineering', 'Applied Computing',
//                    'Biomedical Engineering', 'Chemical Engineering',
//                    'Civil Engineering', 'Computer Engineering',
//                    'Computer Science', 'Cybersecurity', 'Electrical Engineering',
//                    'Environmental Engineering', 'Engineering Management', 
//                    'Facilities Management', 'Industrial/Systems Engineering', 
//                    'Mechatronics', 'Mechanical Engineering', 
//                    'Product Design and Manufacturing Engineering', 'Other'];

// $ms_phd_school = ['Yes, from Wichita State University', 
//                   'Yes, from another College/University', 'No'];

// $involvement = ['Advising a team of students on a project',
//                 'Demonstrating a technical skill or area of expertise',
//                 'Facilitate tour of your company',
//                 'Judging a competition', 
//                 'K-12 Youth Outreach such as Summer Camps, Classroom Visits, etc',
//                 'One-Time Student Recruitment & Retention Event',
//                 'Research Partnership', 'Serving as a role model', 'Teaching a concept',
//                 'Tell your personal story as it relates to work in your field',
//                 "I'm not interested in involvement at this time"];

// $involvementLevels = ['A one-time event lasting 1 to 2 hours',
//                       'A day long event', 'A recurring relationship over a semester'];

// $recruitmentLevels = ['Elementary School', 'Middle School', 
//                       'High School', 'College/University'];

// $mentorAge = ['Elementry', 'Elementary School', 'Middle School', 
//                       'High School', 'Undergraduate', "Master's", "Doctoral"];

// $roleModels = ['First-generation college students', 'Female', 'African American', 
//                'Hispanic', 'Veterans', 'Other'];

//   if ($htmlField == 'college_education') 
//     return $collegeEducation[$_POST[$htmlField] - 1];

//   elseif ($htmlField == 'BS_school') 
//     return $bsSchool[$_POST[$htmlField] - 1];

//   elseif ($htmlField == 'MS_field' || $htmlField == 'BS_field') 
//   {
//     if (!is_numeric($_POST[$htmlField]))
//       return $degreeFields[count($degreeFields) - 1];
//     else 
//       return $degreeFields[$_POST[$htmlField] - 1];
//   }

//   elseif ($htmlField == 'BS_Eng_Discipline' || $htmlField == 'MS_Eng_Discipline' ||
//           $htmlField == 'Involvement_Level' || $htmlField == 'Recruitment_Level' ||
//           $htmlField == 'Mentor_Age'        || $htmlField == 'Role_Model'        ||
//           $htmlField == 'Involvement') 
//     return implode(', ', $_POST[$htmlField]);

//   elseif ($htmlField == 'have_MS_degree' || $htmlField == 'have_PHD_degree') 
//     return $ms_phd_school[$_POST[$htmlField] - 1];

//   elseif ($htmlField == 'other_BS_Eng_Discipline' || 
//           $htmlField == 'other_MS_Eng_Discipline' ||
//           $htmlField == 'other_Role_Model') 
//     return $_POST[$htmlField][0];

//   else 
//     return "{$_POST["" . $htmlField . ""]}";
// }

?>