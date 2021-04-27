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
var generalSuggestions = [];

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
var jobTitle_suggestions = [];

function add_jobTitle_suggestions(_position, _label = 'Search for those whose position is "' + _position + '"')
{
  suggestions.push(precisionSearchSuggestion(_label, 
    " WHERE UPPER( Job_Title ) LIKE UPPER( '%" + _position + "%' ) "
  ));

  jobTitle_suggestions.push(precisionSearchSuggestion(_label, 
    " WHERE UPPER( Job_Title ) LIKE UPPER( '%" + _position + "%' ) "
  ));
}

add_jobTitle_suggestions('Manager');
add_jobTitle_suggestions('Student Worker');
add_jobTitle_suggestions('Developer');
add_jobTitle_suggestions('Lead');
add_jobTitle_suggestions('CFO');
add_jobTitle_suggestions('CEO');
add_jobTitle_suggestions('Instructor');
add_jobTitle_suggestions('Entrepenuer');
add_jobTitle_suggestions('Advisor');










// State Suggestions (**should be changed**)
var state_suggestions = [];

function addStateSuggestion(_state, _stateLabel)
{
  suggestions.push(precisionSearchSuggestion('Search for those who are from "' + _state + '"', 
    " WHERE UPPER( State ) LIKE UPPER( '%" + _stateLabel + "%' ) "
  ));

  state_suggestions.push(precisionSearchSuggestion('Search for those who are from "' + _state + '"', 
  " WHERE UPPER( State ) LIKE UPPER( '%" + _stateLabel + "%' ) "
));
}

addStateSuggestion('Alabama', "AL");
addStateSuggestion('Alaska', "AK");
addStateSuggestion('Arizona', "AZ");
addStateSuggestion('Arkansas', "AR");
addStateSuggestion('California', "CA");
addStateSuggestion('Colorado', "CO");
addStateSuggestion('Connecticut', "CT");
addStateSuggestion('Delaware', "DE");
addStateSuggestion('District Of Columbia', "DC");
addStateSuggestion('Florida', "FL");
addStateSuggestion('Georgia', "GA");
addStateSuggestion('Hawaii', "HI");
addStateSuggestion('Idaho', "ID");
addStateSuggestion('Illinois', "IL");
addStateSuggestion('Indiana', "IN");
addStateSuggestion('Iowa', "IA");
addStateSuggestion('Kansas', "KS");
addStateSuggestion('Kentucky', "KY");
addStateSuggestion('Louisiana', "LA");
addStateSuggestion('Maine', "ME");
addStateSuggestion('Maryland', "MD");
addStateSuggestion('Massachusetts', "MA");
addStateSuggestion('Michigan', "MI");
addStateSuggestion('Minnesota', "MN");
addStateSuggestion('Mississippi', "MS");
addStateSuggestion('Missouri', "MO");
addStateSuggestion('Montana', "MT");
addStateSuggestion('Nebraska', "NE");
addStateSuggestion('Nevada', "NV");
addStateSuggestion('New Hampshire', "NH");
addStateSuggestion('New Jersey', "NJ");
addStateSuggestion('New Mexico', "NM");
addStateSuggestion('New York', "NY");
addStateSuggestion('North Carolina', "NC");
addStateSuggestion('North Dakota', "ND");
addStateSuggestion('Ohio', "OH");
addStateSuggestion('Oklahoma', "OK");
addStateSuggestion('Oregon', "OR");
addStateSuggestion('Pennsylvania', "PA");
addStateSuggestion('Rhode Island', "RI");
addStateSuggestion('South Carolina', "SC");
addStateSuggestion('South Dakota', "SD");
addStateSuggestion('Tennessee', "TN");
addStateSuggestion('Texas', "TX");
addStateSuggestion('Utah', "UT");
addStateSuggestion('Vermont', "VT");
addStateSuggestion('Virginia', "VA");
addStateSuggestion('Washington', "WA");
addStateSuggestion('West Virginia', "WV");
addStateSuggestion('Wisconsin', "WI");
addStateSuggestion('Wyoming', "WY");





// City Suggestions
var city_suggestions = [];

var cities = ["Aberdeen", "Abilene", "Akron", "Albany", "Albuquerque", "Alexandria", 
              "Allentown", "Amarillo", "Anaheim", "Anchorage", "Ann Arbor", "Antioch", 
              "Apple Valley", "Appleton", "Arlington", "Arvada", "Asheville", "Athens", 
              "Atlanta", "Atlantic City", "Augusta", "Aurora", "Austin", "Bakersfield", 
              "Baltimore", "Barnstable", "Baton Rouge", "Beaumont", "Bel Air", "Bellevue", 
              "Berkeley", "Bethlehem", "Billings", "Birmingham", "Bloomington", "Boise", 
              "Boise City", "Bonita Springs", "Boston", "Boulder", "Bradenton", "Bremerton", 
              "Bridgeport", "Brighton", "Brownsville", "Bryan", "Buffalo", "Burbank", "Burlington", 
              "Cambridge", "Canton", "Cape Coral", "Carrollton", "Cary", "Cathedral City", 
              "Cedar Rapids", "Champaign", "Chandler", "Charleston", "Charlotte", "Chattanooga", 
              "Chesapeake", "Chicago", "Chula Vista", "Cincinnati", "Clarke County", "Clarksville", 
              "Clearwater", "Cleveland", "College Station", "Colorado Springs", "Columbia", "Columbus", 
              "Concord", "Coral Springs", "Corona", "Corpus Christi", "Costa Mesa", "Dallas", 
              "Daly City", "Danbury", "Davenport", "Davidson County", "Dayton", "Daytona Beach", 
              "Deltona", "Denton", "Denver", "Des Moines", "Detroit", "Downey", "Duluth", "Durham", 
              "El Monte", "El Paso", "Elizabeth", "Elk Grove", "Elkhart", "Erie", "Escondido", 
              "Eugene", "Evansville", "Fairfield", "Fargo", "Fayetteville", "Fitchburg", "Flint", 
              "Fontana", "Fort Collins", "Fort Lauderdale", "Fort Smith", "Fort Walton Beach", 
              "Fort Wayne", "Fort Worth", "Frederick", "Fremont", "Fresno", "Fullerton", "Gainesville", 
              "Garden Grove", "Garland", "Gastonia", "Gilbert", "Glendale", "Grand Prairie", 
              "Grand Rapids", "Grayslake", "Green Bay", "GreenBay", "Greensboro", "Greenville", 
              "Gulfport-Biloxi", "Hagerstown", "Hampton", "Harlingen", "Harrisburg", "Hartford", 
              "Havre de Grace", "Hayward", "Hemet", "Henderson", "Hesperia", "Hialeah", "Hickory", 
              "High Point", "Hollywood", "Honolulu", "Houma", "Houston", "Howell", "Huntington", 
              "Huntington Beach", "Huntsville", "Independence", "Indianapolis", "Inglewood", "Irvine", 
              "Irving", "Jackson", "Jacksonville", "Jefferson", "Jersey City", "Johnson City", "Joliet", 
              "Kailua", "Kalamazoo", "Kaneohe", "Kansas City", "Kennewick", "Kenosha", "Killeen", 
              "Kissimmee", "Knoxville", "Lacey", "Lafayette", "Lake Charles", "Lakeland", "Lakewood", 
              "Lancaster", "Lansing", "Laredo", "Las Cruces", "Las Vegas", "Layton", "Leominster", 
              "Lewisville", "Lexington", "Lincoln", "Little Rock", "Long Beach", "Lorain", "Los Angeles", 
              "Louisville", "Lowell", "Lubbock", "Macon", "Madison", "Manchester", "Marina", "Marysville", 
              "McAllen", "McHenry", "Medford", "Melbourne", "Memphis", "Merced", "Mesa", "Mesquite", 
              "Miami", "Milwaukee", "Minneapolis", "Miramar", "Mission Viejo", "Mobile", "Modesto", 
              "Monroe", "Monterey", "Montgomery", "Moreno Valley", "Murfreesboro", "Murrieta", "Muskegon", 
              "Myrtle Beach", "Naperville", "Naples", "Nashua", "Nashville", "New Bedford", "New Haven", 
              "New London", "New Orleans", "New York", "New York City", "Newark", "Newburgh", 
              "Newport News", "Norfolk", "Normal", "Norman", "North Charleston", "North Las Vegas", 
              "North Port", "Norwalk", "Norwich", "Oakland", "Ocala", "Oceanside", "Odessa", "Ogden", 
              "Oklahoma City", "Olathe", "Olympia", "Omaha", "Ontario", "Orange", "Orem", "Orlando", 
              "Overland Park", "Oxnard", "Palm Bay", "Palm Springs", "Palmdale", "Panama City", 
              "Pasadena", "Paterson", "Pembroke Pines", "Pensacola", "Peoria", "Philadelphia", 
              "Phoenix", "Pittsburgh", "Plano", "Pomona", "Pompano Beach", "Port Arthur", "Port Orange", 
              "Port Saint Lucie", "Port St. Lucie", "Portland", "Portsmouth", "Poughkeepsie", "Providence", 
              "Provo", "Pueblo", "Punta Gorda", "Racine", "Raleigh", "Rancho Cucamonga", "Reading", "Redding", 
              "Reno", "Richland", "Richmond", "Richmond County", "Riverside", "Roanoke", "Rochester", 
              "Rockford", "Roseville", "Round Lake Beach", "Sacramento", "Saginaw", "Saint Louis", 
              "Saint Paul", "Saint Petersburg", "Salem", "Salinas", "Salt Lake City", "San Antonio", 
              "San Bernardino", "San Buenaventura", "San Diego", "San Francisco", "San Jose", "Santa Ana", 
              "Santa Barbara", "Santa Clara", "Santa Clarita", "Santa Cruz", "Santa Maria", "Santa Rosa", 
              "Sarasota", "Savannah", "Scottsdale", "Scranton", "Seaside", "Seattle", "Sebastian", "Shreveport",
              "Simi Valley", "Sioux City", "Sioux Falls", "South Bend", "South Lyon", "Spartanburg", "Spokane", 
              "Springdale", "Springfield", "St. Louis", "St. Paul", "St. Petersburg", "Stamford",
              "Sterling Heights", "Stockton", "Sunnyvale", "Syracuse", "Tacoma", "Tallahassee", "Tampa", 
              "Temecula", "Tempe", "Thornton", "Thousand Oaks", "Toledo", "Topeka", "Torrance", "Trenton",
              "Tucson", "Tulsa", "Tuscaloosa", "Tyler", "Utica", "Vallejo", "Vancouver", "Vero Beach", 
              "Victorville", "Virginia Beach", "Visalia", "Waco", "Warren", "Washington", "Waterbury", 
              "Waterloo", "West Covina", "West Valley City", "Westminster", "Wichita", "Wilmington", 
              "Winston", "Winter Haven", "Worcester", "Yakima", "Yonkers", "York", "Youngstown"];

function addCitySuggestion(_city)
{
  suggestions.push(precisionSearchSuggestion('Search for those who are from "' + _city + '"', 
    " WHERE UPPER( City ) LIKE UPPER( '%" + _city + "%' ) "
  ));

  city_suggestions.push(precisionSearchSuggestion('Search for those who are from "' + _city + '"', 
    " WHERE UPPER( City ) LIKE UPPER( '%" + _city + "%' ) "
  ));
}


// auto create suggestions loop
for (let city_index = 0; city_index < cities.length; city_index++) 
  addCitySuggestion(cities[city_index]);


addCitySuggestion("Vizag");
addCitySuggestion("Stavanger");






// College Education Suggestions
var college_education_Suggestions = [];

function add_college_education_Suggestions(_educationLevel, _conditions)
{
  suggestions.push(precisionSearchSuggestion('Search for those who have ' + _educationLevel, 
    _conditions
  ));

  college_education_Suggestions.push(precisionSearchSuggestion('Search for those who have ' + 
    _educationLevel,  _conditions
  ));
}

add_college_education_Suggestions('an "Associate\'s Degree"',
 " WHERE UPPER( College_Education ) LIKE UPPER( '3' ) " + 
 " OR UPPER( College_Education ) LIKE UPPER ( '3,%') " + 
 " OR UPPER( College_Education ) LIKE UPPER ( '%, 3,%') " + 
 " OR UPPER( College_Education ) LIKE UPPER ( '%, 3') "
);

add_college_education_Suggestions('a "Technical Degree"',
 " WHERE UPPER( College_Education ) LIKE UPPER( '4' ) " + 
 " OR UPPER( College_Education ) LIKE UPPER ( '4,%') " + 
 " OR UPPER( College_Education ) LIKE UPPER ( '%, 4,%') " + 
 " OR UPPER( College_Education ) LIKE UPPER ( '%, 4') "
);

add_college_education_Suggestions('a "Bachelor\'s Degree"',
 " WHERE UPPER( College_Education ) LIKE UPPER( '5' ) " + 
 " OR UPPER( College_Education ) LIKE UPPER ( '5,%') " + 
 " OR UPPER( College_Education ) LIKE UPPER ( '%, 5,%') " + 
 " OR UPPER( College_Education ) LIKE UPPER ( '%, 5') "
);




// College Degree Year Suggestions
var college_degree_year_Suggestions = [];

function add_college_degree_year_Suggestions(_year, _label = 'Search for those who graduated in "' + _year + '"')
{
  suggestions.push(precisionSearchSuggestion(_label, 
    " WHERE UPPER( College_Degree_Year ) LIKE UPPER( '%" + _year + "%' ) " + 
    " OR UPPER( MS_year ) LIKE UPPER( '%" + _year + "%' )  " + 
    " OR UPPER( PHD_year ) LIKE UPPER( '%" + _year + "%' ) "
  ));

  college_degree_year_Suggestions.push(precisionSearchSuggestion(_label, 
    " WHERE UPPER( College_Degree_Year ) LIKE UPPER( '%" + _year + "%' ) " + 
    " OR UPPER( MS_year ) LIKE UPPER( '%" + _year + "%' )  " + 
    " OR UPPER( PHD_year ) LIKE UPPER( '%" + _year + "%' ) "
  ));
}

var d = new Date();
var currentYear = d.getFullYear();

for (let yearIndex = -15; yearIndex <= 0; yearIndex++) 
  add_college_degree_year_Suggestions(currentYear + yearIndex);

// before 15 years suggestions








// BS_school suggestions
var BS_school_Suggestions = [];

suggestions.push(precisionSearchSuggestion(
  "Search for those have a Bachelor's Degree from \"Wichita State University\"",

  " WHERE UPPER( BS_school ) LIKE UPPER( '1' ) " + 
  " OR UPPER( BS_school ) LIKE UPPER ( '1,%') " + 
  " OR UPPER( BS_school ) LIKE UPPER ( '%, 1,%') " + 
  " OR UPPER( BS_school ) LIKE UPPER ( '%, 1')"
));

BS_school_Suggestions.push(precisionSearchSuggestion(
  "Search for those have a Bachelor's Degree from \"Wichita State University\"",

  " WHERE UPPER( BS_school ) LIKE UPPER( '1' ) " + 
  " OR UPPER( BS_school ) LIKE UPPER ( '1,%') " + 
  " OR UPPER( BS_school ) LIKE UPPER ( '%, 1,%') " + 
  " OR UPPER( BS_school ) LIKE UPPER ( '%, 1')"
));

suggestions.push(precisionSearchSuggestion(
  "Search for those who have a Bachelor's Degree from a \"Different University\"",

  " WHERE UPPER( BS_school ) LIKE UPPER( '2' ) " + 
  " OR UPPER( BS_school ) LIKE UPPER ( '2,%') " + 
  " OR UPPER( BS_school ) LIKE UPPER ( '%, 2,%') " + 
  " OR UPPER( BS_school ) LIKE UPPER ( '%, 2')"
));

BS_school_Suggestions.push(precisionSearchSuggestion(
  "Search for those who have a Bachelor's Degree from a \"Different University\"",

  " WHERE UPPER( BS_school ) LIKE UPPER( '2' ) " + 
  " OR UPPER( BS_school ) LIKE UPPER ( '2,%') " + 
  " OR UPPER( BS_school ) LIKE UPPER ( '%, 2,%') " + 
  " OR UPPER( BS_school ) LIKE UPPER ( '%, 2')"
));

suggestions.push(precisionSearchSuggestion(
  "Search for \"Shocker Alumni\"",

  " WHERE UPPER( BS_school ) LIKE UPPER( '1' ) " +
  " OR UPPER( BS_school ) LIKE UPPER ( '1,%') " +
  " OR UPPER( BS_school ) LIKE UPPER ( '%, 1,%') " +
  " OR UPPER( BS_school ) LIKE UPPER ( '%, 1') " +
  " OR UPPER( have_MS_degree ) LIKE UPPER( '1' ) " +
  " OR UPPER( have_MS_degree ) LIKE UPPER ( '1,%') " +
  " OR UPPER( have_MS_degree ) LIKE UPPER ( '%, 1,%') " +
  " OR UPPER( have_MS_degree ) LIKE UPPER ( '%, 1') " +
  " OR UPPER( have_PHD_degree ) LIKE UPPER( '1' ) " +
  " OR UPPER( have_PHD_degree ) LIKE UPPER ( '1,%') " +
  " OR UPPER( have_PHD_degree ) LIKE UPPER ( '%, 1,%') " +
  " OR UPPER( have_PHD_degree ) LIKE UPPER ( '%, 1')"
));

generalSuggestions.push(precisionSearchSuggestion(
  "Search for \"Shocker Alumni\"",

  " WHERE UPPER( BS_school ) LIKE UPPER( '1' ) " +
  " OR UPPER( BS_school ) LIKE UPPER ( '1,%') " +
  " OR UPPER( BS_school ) LIKE UPPER ( '%, 1,%') " +
  " OR UPPER( BS_school ) LIKE UPPER ( '%, 1') " +
  " OR UPPER( have_MS_degree ) LIKE UPPER( '1' ) " +
  " OR UPPER( have_MS_degree ) LIKE UPPER ( '1,%') " +
  " OR UPPER( have_MS_degree ) LIKE UPPER ( '%, 1,%') " +
  " OR UPPER( have_MS_degree ) LIKE UPPER ( '%, 1') " +
  " OR UPPER( have_PHD_degree ) LIKE UPPER( '1' ) " +
  " OR UPPER( have_PHD_degree ) LIKE UPPER ( '1,%') " +
  " OR UPPER( have_PHD_degree ) LIKE UPPER ( '%, 1,%') " +
  " OR UPPER( have_PHD_degree ) LIKE UPPER ( '%, 1')"
));








// BS_field Suggestions & MS_field Suggestions

var BS_field_Suggestions = [];
var MS_field_Suggestions = [];

for (let i = 0; i < Fields.length; i++) 
{
  if (i == Fields.length)
  {
    suggestions.push(precisionSearchSuggestion(
      'Search for those pursuing Bachelor\'s Degree in the field of "' 
      + Fields[i] + '"',
  
      " WHERE UPPER( BS_field ) LIKE UPPER( '%" + "Other" + "%' ) "
    ));
  
    BS_field_Suggestions.push(precisionSearchSuggestion(
      'Search for those pursuing Bachelor\'s Degree in the field of "' 
      + Fields[i] + '"',
  
      " WHERE UPPER( BS_field ) LIKE UPPER( '%" + "Other" + "%' ) "
    ));
  
    suggestions.push(precisionSearchSuggestion(
      'Search for those pursuing Master\'s Degree in the field of "' 
      + Fields[i] + '"',
  
      " WHERE UPPER( MS_field ) LIKE UPPER( '%" + "Other" + "%' ) "
    ));
  
    MS_field_Suggestions.push(precisionSearchSuggestion(
      'Search for those pursuing Master\'s Degree in the field of "' 
      + Fields[i] + '"',
  
      " WHERE UPPER( MS_field ) LIKE UPPER( '%" + "Other" + "%' ) "
    ));
  }
  else
  {
    suggestions.push(precisionSearchSuggestion(
      'Search for those pursuing Bachelor\'s Degree in the field of "' 
      + Fields[i] + '"',
  
      " WHERE UPPER( BS_field ) LIKE UPPER( '" + (i + 1) + "' ) " + 
      " OR UPPER( BS_field ) LIKE UPPER ( '" + (i + 1) + ",%') " + 
      " OR UPPER( BS_field ) LIKE UPPER ( '%, " + (i + 1) + ",%') " + 
      " OR UPPER( BS_field ) LIKE UPPER ( '%, " + (i + 1) + "')"
    ));
  
    BS_field_Suggestions.push(precisionSearchSuggestion(
      'Search for those pursuing Bachelor\'s Degree in the field of "' 
      + Fields[i] + '"',
  
      " WHERE UPPER( BS_field ) LIKE UPPER( '" + (i + 1) + "' ) " + 
      " OR UPPER( BS_field ) LIKE UPPER ( '" + (i + 1) + ",%') " + 
      " OR UPPER( BS_field ) LIKE UPPER ( '%, " + (i + 1) + ",%') " + 
      " OR UPPER( BS_field ) LIKE UPPER ( '%, " + (i + 1) + "')"
    ));
  
    suggestions.push(precisionSearchSuggestion(
      'Search for those pursuing Master\'s Degree in the field of "' 
      + Fields[i] + '"',
  
      " WHERE UPPER( MS_field ) LIKE UPPER( '" + (i + 1) + "' ) " + 
      " OR UPPER( MS_field ) LIKE UPPER ( '" + (i + 1) + ",%') " + 
      " OR UPPER( MS_field ) LIKE UPPER ( '%, " + (i + 1) + ",%') " + 
      " OR UPPER( MS_field ) LIKE UPPER ( '%, " + (i + 1) + "')"
    ));
  
    MS_field_Suggestions.push(precisionSearchSuggestion(
      'Search for those pursuing Master\'s Degree in the field of "' 
      + Fields[i] + '"',
  
      " WHERE UPPER( MS_field ) LIKE UPPER( '" + (i + 1) + "' ) " + 
      " OR UPPER( MS_field ) LIKE UPPER ( '" + (i + 1) + ",%') " + 
      " OR UPPER( MS_field ) LIKE UPPER ( '%, " + (i + 1) + ",%') " + 
      " OR UPPER( MS_field ) LIKE UPPER ( '%, " + (i + 1) + "')"
    ));
  }
}









// BS_Eng_Discipline Suggestions & MS_Eng_Discipline Suggestions

var BS_Eng_Discipline_Suggestions = [];
var MS_Eng_Discipline_Suggestions = [];

for (let i = 0; i < engDisciplines.length; i++) 
{
  if (i == engDisciplines.length - 1)
  {
    suggestions.push(precisionSearchSuggestion(
      'Search for those pursuing Bachelor\'s Degree in "' 
      + engDisciplines[i] + '"',
  
      " WHERE UPPER( BS_Eng_Discipline ) LIKE UPPER( '%" + "Other" + "%' ) "
    ));
  
    BS_Eng_Discipline_Suggestions.push(precisionSearchSuggestion(
      'Search for those pursuing Bachelor\'s Degree in "' 
      + engDisciplines[i] + '"',
  
      " WHERE UPPER( BS_Eng_Discipline ) LIKE UPPER( '%" + "Other" + "%' ) "
    ));
  
    suggestions.push(precisionSearchSuggestion(
      'Search for those pursuing Master\'s Degree in "' 
      + engDisciplines[i] + '"',
  
      " WHERE UPPER( MS_Eng_Discipline ) LIKE UPPER( '%" + "Other" + "%' ) "
    ));
  
    MS_Eng_Discipline_Suggestions.push(precisionSearchSuggestion(
      'Search for those pursuing Master\'s Degree in "' 
      + engDisciplines[i] + '"',
  
      " WHERE UPPER( MS_Eng_Discipline ) LIKE UPPER( '%" + "Other" + "%' ) "
    ));
  }
  else
  {
    suggestions.push(precisionSearchSuggestion(
      'Search for those pursuing Bachelor\'s Degree in "' 
      + engDisciplines[i] + '"',
  
      " WHERE UPPER( BS_Eng_Discipline ) LIKE UPPER( '" + (i + 1) + "' ) " + 
      " OR UPPER( BS_Eng_Discipline ) LIKE UPPER ( '" + (i + 1) + ",%') " + 
      " OR UPPER( BS_Eng_Discipline ) LIKE UPPER ( '%, " + (i + 1) + ",%') " + 
      " OR UPPER( BS_Eng_Discipline ) LIKE UPPER ( '%, " + (i + 1) + "')"
    ));
  
    BS_Eng_Discipline_Suggestions.push(precisionSearchSuggestion(
      'Search for those pursuing Bachelor\'s Degree in "' 
      + engDisciplines[i] + '"',
  
      " WHERE UPPER( BS_Eng_Discipline ) LIKE UPPER( '" + (i + 1) + "' ) " + 
      " OR UPPER( BS_Eng_Discipline ) LIKE UPPER ( '" + (i + 1) + ",%') " + 
      " OR UPPER( BS_Eng_Discipline ) LIKE UPPER ( '%, " + (i + 1) + ",%') " + 
      " OR UPPER( BS_Eng_Discipline ) LIKE UPPER ( '%, " + (i + 1) + "')"
    ));
  
    suggestions.push(precisionSearchSuggestion(
      'Search for those pursuing Master\'s Degree in "' 
      + engDisciplines[i] + '"',
  
      " WHERE UPPER( MS_Eng_Discipline ) LIKE UPPER( '" + (i + 1) + "' ) " + 
      " OR UPPER( MS_Eng_Discipline ) LIKE UPPER ( '" + (i + 1) + ",%') " + 
      " OR UPPER( MS_Eng_Discipline ) LIKE UPPER ( '%, " + (i + 1) + ",%') " + 
      " OR UPPER( MS_Eng_Discipline ) LIKE UPPER ( '%, " + (i + 1) + "')"
    ));
  
    MS_Eng_Discipline_Suggestions.push(precisionSearchSuggestion(
      'Search for those pursuing Master\'s Degree in "' 
      + engDisciplines[i] + '"',
  
      " WHERE UPPER( MS_Eng_Discipline ) LIKE UPPER( '" + (i + 1) + "' ) " + 
      " OR UPPER( MS_Eng_Discipline ) LIKE UPPER ( '" + (i + 1) + ",%') " + 
      " OR UPPER( MS_Eng_Discipline ) LIKE UPPER ( '%, " + (i + 1) + ",%') " + 
      " OR UPPER( MS_Eng_Discipline ) LIKE UPPER ( '%, " + (i + 1) + "')"
    ));
  }  
}










// MS year Suggestions

var MS_year_Suggestions = [];

function add_MS_year_Suggestions(_year)
{
  suggestions.push(precisionSearchSuggestion(
    "Search for those who earned a Master's degree in \"" + _year + "\"",

    " WHERE UPPER( MS_year ) LIKE UPPER( '%" + _year + "%' )"
  ));

  MS_year_Suggestions.push(precisionSearchSuggestion(
    "Search for those who earned a Master's degree in \"" + _year + "\"",

    " WHERE UPPER( MS_year ) LIKE UPPER( '%" + _year + "%' )"
  ));
}

for (let i = -15; i <= 0; i++) 
  add_MS_year_Suggestions(i + currentYear);  










// PHD year Suggestions

var PHD_year_Suggestions = [];

function add_PHD_year_Suggestions(_year)
{
  suggestions.push(precisionSearchSuggestion(
    "Search for those who earned a PHD degree in \"" + _year + "\"",

    " WHERE UPPER( PHD_year ) LIKE UPPER( '%" + _year + "%' )"
  ));

  PHD_year_Suggestions.push(precisionSearchSuggestion(
    "Search for those who earned a PHD degree in \"" + _year + "\"",

    " WHERE UPPER( PHD_year ) LIKE UPPER( '%" + _year + "%' )"
  ));
}

for (let i = -15; i <= 0; i++) 
  add_PHD_year_Suggestions(i + currentYear);  




















for (let i = 0; i < suggestions.length; i++)
{
  suggest(suggestions[i]);
}




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