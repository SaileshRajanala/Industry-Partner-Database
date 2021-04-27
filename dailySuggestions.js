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
          <button type="submit" class="searchSuggestion" name="searchBar" value="Veterans">
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
    searchButton.setAttribute('type', 'submit');
    searchButton.setAttribute('value', _searchKeyword);

    searchButton.innerHTML = "<i class='fab fa-sistrix'></i>  &nbsp" + _label;

    searchForm.append(searchButton);

    return searchForm;
}

function precisionSearchSuggestion(_label, _searchConditions, _action = "advancedSearch.php")
{
    /*
        <form method="POST" action="advancedSearch.php" target="_blank">
          <button type="submit" class="searchSuggestion" name="advancedSearchButton" value="BS_field = 'Computer Science'">
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
        searchButton.setAttribute('type', 'submit');
        searchButton.setAttribute('name', 'advancedSearchButton');
        searchButton.setAttribute('value', _searchConditions);
    
        searchButton.innerHTML = "<i class='fab fa-sistrix'></i>  &nbsp" + _label;
    
        searchForm.append(searchButton);
    
        return searchForm;
}



var suggestions = [];

// Mail Suggestions
suggestions.push(precisionSearchSuggestion('Search for all "Gmail" users ', 
" WHERE UPPER( Email ) LIKE UPPER( '%@gmail.%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for all "Outlook" users ', 
" WHERE UPPER( Email ) LIKE UPPER( '%@outlook.%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for all "Live Mail" users ', 
" WHERE UPPER( Email ) LIKE UPPER( '%@live.%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for all "Yahoo" users ', 
" WHERE UPPER( Email ) LIKE UPPER( '%@yahoo.%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for all "Hot Mail" users ', 
" WHERE UPPER( Email ) LIKE UPPER( '%@hotmail.%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for all "wichita.edu" users ', 
" WHERE UPPER( Email ) LIKE UPPER( '%@wichita.edu' ) "
));

suggestions.push(precisionSearchSuggestion('Search for all "iCloud" users ', 
" WHERE UPPER( Email ) LIKE UPPER( '%@icloud.%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for all ".edu" users ', 
" WHERE UPPER( Email ) LIKE UPPER( '%.edu' ) "
));

suggestions.push(precisionSearchSuggestion('Search for all ".in" users ', 
" WHERE UPPER( Email ) LIKE UPPER( '%.in' ) "
));

suggestions.push(precisionSearchSuggestion('Search for all ".com" users ', 
" WHERE UPPER( Email ) LIKE UPPER( '%.com' ) "
));

suggestions.push(precisionSearchSuggestion('Search for all "shockers.wichita.edu" users ', 
" WHERE UPPER( Email ) LIKE UPPER( '%shockers.wichita.edu' ) "
));






// Phone Number Suggestions
suggestions.push(precisionSearchSuggestion('Search for all users who provided Phone Numbers', 
" WHERE UPPER( Phone_Number ) <> UPPER('') "
));

suggestions.push(precisionSearchSuggestion('Search for those whose Phone Numbers start with "316"', 
" WHERE UPPER( Phone_Number ) LIKE UPPER( '316%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those whose Phone Numbers start with "1800"', 
" WHERE UPPER( Phone_Number ) LIKE UPPER( '1800%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those whose Phone Numbers start with "316-978"', 
" WHERE UPPER( Phone_Number ) LIKE UPPER( '316978%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those whose Phone Numbers do NOT start with "316"', 
" WHERE UPPER( Phone_Number ) NOT LIKE UPPER( '316%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those whose Phone Numbers do NOT start with "316-978"', 
" WHERE UPPER( Phone_Number ) NOT LIKE UPPER( '316978%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those whose Phone Numbers do NOT start with "1800"', 
" WHERE UPPER( Phone_Number ) NOT LIKE UPPER( '1800%' ) "
));







// Employer Suggestions


suggestions.push(precisionSearchSuggestion('Search for those who work at "Apple"', 
" WHERE UPPER( Employer ) LIKE UPPER( '%Apple%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those who work at "Google"', 
" WHERE UPPER( Employer ) LIKE UPPER( '%Google%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those who work at "Microsoft"', 
" WHERE UPPER( Employer ) LIKE UPPER( '%Microsoft%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those who work at "Amazon"', 
" WHERE UPPER( Employer ) LIKE UPPER( '%Amazon%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those who work at "Wichita State University"', 
" WHERE UPPER( Employer ) LIKE UPPER( '%Wichita State University%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those who work in a University', 
" WHERE UPPER( Employer ) LIKE UPPER( '%University%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those who work in a "State University"', 
" WHERE UPPER( Employer ) LIKE UPPER( '%State University%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those who work at "NetApp"', 
" WHERE UPPER( Employer ) LIKE UPPER( '%NetApp%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those who work at "Spirit Aerosystems"', 
" WHERE UPPER( Employer ) LIKE UPPER( '%Spirit Aerosystems%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those who work at "Airbus"', 
" WHERE UPPER( Employer ) LIKE UPPER( '%Airbus%' ) "
));




// Job Title Suggestions
suggestions.push(precisionSearchSuggestion('Search for those whose position is "Manager"', 
" WHERE UPPER( Job_Title ) LIKE UPPER( '%Manager%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those whose position is "Student Worker"', 
" WHERE UPPER( Job_Title ) LIKE UPPER( '%Student Worker%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those whose position is "Developer"', 
" WHERE UPPER( Job_Title ) LIKE UPPER( '%Developer%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those whose position is "Lead"', 
" WHERE UPPER( Job_Title ) LIKE UPPER( '%Lead%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those whose position is "CFO"', 
" WHERE UPPER( Job_Title ) LIKE UPPER( '%CFO%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those whose position is "CEO"', 
" WHERE UPPER( Job_Title ) LIKE UPPER( '%CEO%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those whose position is "Instructor"', 
" WHERE UPPER( Job_Title ) LIKE UPPER( '%Instructor%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those whose position is "Entrepenuer"', 
" WHERE UPPER( Job_Title ) LIKE UPPER( '%Entrepenuer%' ) "
));

suggestions.push(precisionSearchSuggestion('Search for those whose position is "Advisor"', 
" WHERE UPPER( Job_Title ) LIKE UPPER( '%Advisor%' ) "
));




// State Suggestions























for (let i = 0; i < suggestions.length; i++)
{
  suggest(suggestions[i]);
}




suggest(searchSuggestion('Search for Shocker Alumni', 'Wichita State University'));
suggest(searchSuggestion('Search for Veterans', 'Veterans'));



suggest(precisionSearchSuggestion('Search for Computer Science Graduates', 

" WHERE UPPER (BS_Eng_Discipline) LIKE UPPER ('% 7,%') "

+

" OR UPPER (BS_Eng_Discipline) LIKE UPPER ('7') "

+

" OR UPPER (BS_Eng_Discipline) LIKE UPPER ('7,%') "

+

" OR UPPER (BS_Eng_Discipline) LIKE UPPER ('%, 7') "

));