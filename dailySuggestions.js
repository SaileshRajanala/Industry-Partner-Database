var tableColumns = [];

tableColumns.push("Prefix");
tableColumns.push("Suffix");
tableColumns.push("First_Name");
tableColumns.push("Last_Name");
tableColumns.push("Email");
tableColumns.push("Phone_Number");
tableColumns.push("Employer");
tableColumns.push("Job_Title");
tableColumns.push("State");
tableColumns.push("City");
tableColumns.push("College_Education");
tableColumns.push("Associates_Degree");
tableColumns.push("Technical_Degree");
tableColumns.push("College_Degree_Year");
tableColumns.push("BS_school");
tableColumns.push("BS_other_school");
tableColumns.push("BS_field");
tableColumns.push("other_BS_field");
tableColumns.push("BS_Eng_Discipline");
tableColumns.push("other_BS_Eng_Discipline");
tableColumns.push("have_MS_degree");
tableColumns.push("MS_other_school");
tableColumns.push("MS_year");
tableColumns.push("MS_field");
tableColumns.push("other_MS_field");
tableColumns.push("MS_Eng_Discipline");
tableColumns.push("other_MS_Eng_Discipline");
tableColumns.push("have_PHD_degree");
tableColumns.push("PHD_other_school");
tableColumns.push("PHD_year");
tableColumns.push("special_degree");
tableColumns.push("Involvement");
tableColumns.push("Involvement_Level");
tableColumns.push("Recruitment_Level");
tableColumns.push("Mentor_Age");
tableColumns.push("Role_Model");
tableColumns.push("other_Role_Model");
tableColumns.push("Involvement_Notes");


var collegeEducation = ['No, I have not taken any college classes',
                        'Yes, I have taken some college classes', 
                        "Yes, I have an Associate's degree",
                        "Yes, I have a Technical degree",
                        "Yes, I have a Bachelor's degree",
                        "I prefer not to answer"];

var bsSchool = ['Yes, I did go to Wichita State University',
                'No, I attended different university'];

var Fields = ['Business', 
              'Education', 
              'Engineering', 
              'Health Professions', 
              'Liberal Arts',
              'Math', 
              'Science', 
              'Other'];

var engDisciplines = ['Aerospace Engineering', 
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

var ms_phd_school = ['Yes, from Wichita State University', 
                     'Yes, from another College/University', 
                     'No'];

var involvement = ['Advising a team of students on a project',
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

var involvementLevels = ['A one-time event lasting 1 to 2 hours',
                         'A day long event', 
                         'A recurring relationship over a semester'];

var recruitmentLevels = ['Elementary School', 
                         'Middle School', 
                         'High School', 
                         'College/University'];

var mentorAge = ['Elementry', 
                 'Middle School', 
                 'High School', 
                 'Undergraduate', 
                 "Master's", 
                 "Doctoral"];

var roleModels = ['First-generation college students', 
                  'Female', 
                  'African American', 
                  'Hispanic', 
                  'Veterans', 
                  'Other'];





                  
function id_(_id)
{
    return document.getElementById(_id);
}

function suggest(_element, _id = 'dailySuggestionsDiv') 
{
    document.getElementById(_id).append(_element);
}

function searchSuggestion(_label, _searchKeyword, _action = 'search_developer.php')
{
    /*
        <form method="POST" action="search_developer.php" target="_blank">
          <button class="searchSuggestion" name="searchBar" value="Veterans">
            <i class='fab fa-sistrix'></i>  &nbspSearch for Veterans
          </button>
        </form>
    */

    var searchForm = document.createElement('form');
    searchForm.setAttribute('method', 'POST');
    searchForm.setAttribute('action', _action);
    searchForm.setAttribute('target', '_blank');

    var searchButton = document.createElement('button');
    searchButton.classList.add('searchSuggestion');
    searchButton.setAttribute('name', 'searchBar');
    searchButton.setAttribute('value', _searchKeyword);

    searchButton.innerHTML = "<i class='fab fa-sistrix'></i>  &nbsp" + _label;

    searchForm.append(searchButton);

    return searchForm;
}

function precisionSearchSuggestion(_label, _searchConditions, _action = "advancedSearch.php")
{
    /*
        <form method="POST" action="advancedSearch.php" target="_blank">
          <button class="searchSuggestion" name="advancedSearchButton" value="BS_field = 'Computer Science'">
            <i class='fab fa-sistrix'></i>  &nbspSearch for Veterans
          </button>
        </form>
    */

        var searchForm = document.createElement('form');
        searchForm.setAttribute('method', 'POST');
        searchForm.setAttribute('action', _action);
        searchForm.setAttribute('target', '_blank');
    
        var searchButton = document.createElement('button');
        searchButton.classList.add('searchSuggestion');
        searchButton.setAttribute('name', 'advancedSearchButton');
        searchButton.setAttribute('value', _searchConditions);
    
        searchButton.innerHTML = "<i class='fab fa-sistrix'></i>  &nbsp" + _label;
    
        searchForm.append(searchButton);
    
        return searchForm;
}








suggest(searchSuggestion('Search for Shocker Alumni', 'Wichita State University'));
suggest(searchSuggestion('Search for Veterans', 'Veterans'));
suggest(precisionSearchSuggestion('Search for Computer Science Graduates', 

" WHERE UPPER (BS_Eng_Discipline)  "

));