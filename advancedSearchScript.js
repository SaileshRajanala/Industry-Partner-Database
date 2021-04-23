
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








function tag_(_tag)
{
  return document.getElementsByTagName(_tag);
}

function id_(_id)
{
  return document.getElementById(_id);
}

function class_(_class)
{
  return document.getElementsByClassName(_class);
}

function animate(_element, _animationClass)
{
  _element.classList.add(_animationClass);

  // Code below is necessary for animation on request.
  _element.addEventListener("animationend", 
  function() 
  {
    _element.classList.remove(_animationClass);            
  }
  );
}


function generateSearchCondition(conditionalconnection, tableColumn, operation, keyword)
{
  var searchCondition = " " + conditionalconnection + " UPPER( " + tableColumn + " ) ";

  if (operation == "IS")
  {
    searchCondition += " = UPPER('" + keyword + "') ";
  }
  else // CONTAINS, STARTS WITH, ENDS WITH
  {
    searchCondition += " LIKE UPPER(";

    if (operation == "CONTAINS")
    {
      searchCondition += " '%" + keyword + "%' ) ";
    }
    else if (operation == "STARTS WITH")
    {
      searchCondition += " '" + keyword + "%' ) ";
    }
    else if (operation == "ENDS WITH")
    {
      searchCondition += " '%" + keyword + "' ) ";
    }
  }

  return searchCondition;
}


function generateQueryConditions()
{
  var searchConditions = class_('searchCondition');
  var queryRuleElements = searchConditions[0].getElementsByClassName('queryRuleElement');

  var sqlConditions = generateSearchCondition('WHERE',
                                              queryRuleElements[0].value,
                                              queryRuleElements[1].value,
                                              queryRuleElements[2].value);

  for (let i = 1; i < searchConditions.length; i++) 
  {
    var queryRuleElements = searchConditions[i].getElementsByClassName('queryRuleElement');
  
    sqlConditions += generateSearchCondition(queryRuleElements[0].value,
                                             queryRuleElements[1].value,
                                             queryRuleElements[2].value,
                                             queryRuleElements[3].value);
  }

  id_('answer').innerHTML = sqlConditions;
  id_('advancedSearchButton').setAttribute('value', sqlConditions);
}

function generateRulesOnUserInput(form = 'advancedSearchForm')
{
  var formElements = document.forms[form].elements;

  var selectors = document.forms[form].getElementsByClassName('selector');
  var keywords = document.forms[form].getElementsByClassName('keywordTextField');

  for (let index = 0; index < selectors.length; index++) 
  {
    selectors.addEventListener('change', function() 
    {
      generateQueryConditions();
    })
  }

  for (let index = 0; index < keywords.length; index++) 
  {
    keywords.addEventListener('keyup', function() 
    {
      generateQueryConditions();
    })
  }
}


function replaceTextFieldWithSelectorIn(sourceArray, searchCondition)
{
  var searchConditionNode = searchCondition.getElementsByClassName('queryRuleElement')[0].parentNode;

  // if (searchCondition.getElementsByClassName('keywordTextField')[0] != undefined)
  //   var targetTextField = searchCondition.getElementsByClassName('keywordTextField')[0];
  // else
  //   var targetSelector = searchCondition.getElementsByClassName('keywordSelector')[0];

  var operationSelector = searchCondition.getElementsByClassName('operationSelector')[0];

  var newOperationSelector = document.createElement('select');
  newOperationSelector.classList.add('selector');
  newOperationSelector.classList.add('operationSelector');
  newOperationSelector.classList.add('queryRuleElement');

  var option = document.createElement('option');
  option.setAttribute('value', 'CONTAINS');
  option.classList.add('option_CONTAINS');
  option.text = 'CONTAINS';

  newOperationSelector.append(option);

  //searchConditionNode.replaceChild(newOperationSelector, operationSelector);
  operationSelector.replaceWith(newOperationSelector);


  // var searchCondition = textField.parentElement;
  // var searchConditionNode = textField.parentNode;

  var selector = document.createElement('select');
  selector.classList.add('selector');
  selector.classList.add('queryRuleElement');
  selector.classList.add('keywordSelector');

  // var option = ""; // type is not string in the loop
  // // creating variable once but using it in the loop 

  for (let index = 0; index < sourceArray.length; index++) 
  {
    option = document.createElement('option');

    if (sourceArray[index] == "Other")
      option.setAttribute('value', "Other");
    else
      option.setAttribute('value', index + 1);

    option.text = sourceArray[index];
    
    selector.append(option);
  }

  //searchConditionNode.replaceChild(selector ,targetTextField);

  // targetTextField.replaceWith(selector);
  // targetSelector.replaceWith(selector);

  if (searchCondition.getElementsByClassName('keywordTextField')[0] != undefined)
  {
    var targetTextField = searchCondition.getElementsByClassName('keywordTextField')[0];
    targetTextField.replaceWith(selector);
  }
  else
  {
    var targetSelector = searchCondition.getElementsByClassName('keywordSelector')[0];
    targetSelector.replaceWith(selector);
  }
}


function inputCalibration(tableColumnSelector) 
{
  tableColumnSelector.addEventListener('change', function() 
  {
    
  if (tableColumnSelector.value == 'College_Education')
  {
    replaceTextFieldWithSelectorIn(collegeEducation, tableColumnSelector.parentElement);
  }
  else if (tableColumnSelector.value == 'BS_school')
  {
    replaceTextFieldWithSelectorIn(bsSchool, tableColumnSelector.parentElement);
  }
  else if (tableColumnSelector.value == 'BS_field' || tableColumnSelector.value == 'MS_field')
  {
    replaceTextFieldWithSelectorIn(Fields, tableColumnSelector.parentElement);
  }
  else if (tableColumnSelector.value == 'BS_Eng_Discipline' || 
           tableColumnSelector.value == 'MS_Eng_Discipline'  )
  {
    replaceTextFieldWithSelectorIn(engDisciplines, tableColumnSelector.parentElement);
  }
  else if (tableColumnSelector.value == 'have_MS_degree' || tableColumnSelector.value == 'have_PHD_degree')
  {
    replaceTextFieldWithSelectorIn(ms_phd_school, tableColumnSelector.parentElement);
  }
  else if (tableColumnSelector.value == 'Involvement')
  {
    replaceTextFieldWithSelectorIn(involvement, tableColumnSelector.parentElement);
  }
  else if (tableColumnSelector.value == 'Involvement_Level')
  {
    replaceTextFieldWithSelectorIn(involvementLevels, tableColumnSelector.parentElement);
  }
  else if (tableColumnSelector.value == 'Recruitment_Level')
  {
    replaceTextFieldWithSelectorIn(recruitmentLevels, tableColumnSelector.parentElement);
  }
  else if (tableColumnSelector.value == 'Mentor_Age')
  {
    replaceTextFieldWithSelectorIn(mentorAge, tableColumnSelector.parentElement);
  }
  else if (tableColumnSelector.value == 'Role_Model')
  {
    replaceTextFieldWithSelectorIn(roleModels, tableColumnSelector.parentElement);
  }
  else
  {
    var searchCondition = tableColumnSelector.parentElement;
    var searchConditionNode = tableColumnSelector.parentNode;
    var targetSelector = searchCondition.getElementsByClassName('keywordSelector')[0];
    var operationSelector = searchCondition.getElementsByClassName('operationSelector')[0];

    var newOperationSelector = document.createElement('select');
    newOperationSelector.classList.add('selector');
    newOperationSelector.classList.add('operationSelector');
    newOperationSelector.classList.add('queryRuleElement');

    var option = document.createElement('option');
    option.setAttribute('value', 'CONTAINS');
    option.classList.add('option_CONTAINS');
    option.text = 'CONTAINS';

    newOperationSelector.add(option);

    option = document.createElement('option');
    option.setAttribute('value', 'IS');
    option.classList.add('option_IS');
    option.text = 'IS';

    newOperationSelector.add(option);

    option = document.createElement('option');
    option.setAttribute('value', 'STARTS WITH');
    option.classList.add('option_STARTS_WITH');
    option.text = 'STARTS WITH';

    newOperationSelector.add(option);

    option = document.createElement('option');
    option.setAttribute('value', 'ENDS WITH');
    option.classList.add('option_ENDS_WITH');
    option.text = 'ENDS WITH';

    newOperationSelector.add(option);

    operationSelector.replaceWith(newOperationSelector);

    var textField = document.createElement('input');
    textField.setAttribute('type', 'text');
    textField.setAttribute('name', 'keywordValue');
    textField.classList.add('keywordTextField');
    textField.classList.add('queryRuleElement');

    //searchConditionNode.replaceChild(textField, targetSelector);
    targetSelector.replaceWith(textField);
  }

  });
}

function disableSearchButton_IfEmpty(textField)
{
  textField.addEventListener('keyup', function()
  {
    if (textField.value == "")
    {
      id_('advancedSearchButton').disabled = true;
    }
  });
}


function addRule(targetDivId = "searchConditionsDiv")
{
  var searchConditionsDiv = id_(targetDivId);

  var searchCondition = document.createElement('div');
  searchCondition.classList.add('searchCondition');


  var conditionalSelector = document.createElement('select');
  conditionalSelector.setAttribute('name', 'conditionalConnection');
  conditionalSelector.classList.add('selector');
  conditionalSelector.classList.add('queryRuleElement');
  conditionalSelector.classList.add('conditionalSelector');

  var option = document.createElement('option');
  option.setAttribute('value', 'OR');
  option.text = 'OR';

  conditionalSelector.add(option);

  option = document.createElement('option');
  option.setAttribute('value', 'AND');
  option.text = 'AND';

  conditionalSelector.add(option);

  searchCondition.append(conditionalSelector);


  var tableColumnSelector = document.createElement('select');
  tableColumnSelector.setAttribute('name', 'tableColumn');
  tableColumnSelector.classList.add('selector');
  tableColumnSelector.classList.add('queryRuleElement');
  tableColumnSelector.classList.add('tableColumnSelector');
  
  for (let index = 0; index < tableColumns.length; index++) 
  {
    option = document.createElement('option');
    option.setAttribute('value', tableColumns[index]);
    option.text = tableColumns[index];

    tableColumnSelector.add(option);
  }

  inputCalibration(tableColumnSelector);

  searchCondition.append(tableColumnSelector);


  var operationSelector = document.createElement('select');
  operationSelector.setAttribute('name', 'operation');
  operationSelector.classList.add('selector');
  operationSelector.classList.add('queryRuleElement');
  operationSelector.classList.add('operationSelector');

  option = document.createElement('option');
  option.setAttribute('value', 'CONTAINS');
  option.classList.add('option_CONTAINS');
  option.text = 'CONTAINS';

  operationSelector.add(option);

  option = document.createElement('option');
  option.setAttribute('value', 'IS');
  option.classList.add('option_IS');
  option.text = 'IS';

  operationSelector.add(option);

  option = document.createElement('option');
  option.setAttribute('value', 'STARTS WITH');
  option.classList.add('option_STARTS_WITH');
  option.text = 'STARTS WITH';

  operationSelector.add(option);

  option = document.createElement('option');
  option.setAttribute('value', 'ENDS WITH');
  option.classList.add('option_ENDS_WITH');
  option.text = 'ENDS WITH';

  operationSelector.add(option);

  searchCondition.append(operationSelector);


  var keywordTextField = document.createElement('input');
  keywordTextField.setAttribute('name', 'keywordValue');
  keywordTextField.setAttribute('type', 'text');
  keywordTextField.classList.add('keywordTextField');
  keywordTextField.classList.add('queryRuleElement');

  searchCondition.append(keywordTextField);
  //disableSearchButton_IfEmpty(keywordTextField);

  var _button = document.createElement('button');
  _button.setAttribute('type', 'button');
  _button.classList.add('removeRuleButton');
  _button.innerHTML = 'Remove <i class="fas fa-minus-circle"></i>';
  
  searchCondition.append(_button);

  searchConditionsDiv.append(searchCondition);

  _button.addEventListener("click", function() 
  {

    _button.parentElement.parentElement.removeChild(searchCondition);

  });


  // tableColumnSelector.addEventListener('change', function() 
  // {
  //    // VERY IMPORTANT FUNCTION
  // });

  

  animate(searchCondition, 'appendAnimation');
}



function manageRules()
{
  var addButtons = class_('addRuleButton');
  var removeButtons = class_('removeButtons');
  
  for (var i = addButtons.length - 1; i >= 0; i--) 
  {
    addButtons[i].addEventListener("click", function() 
    {
  
      addRule();
    
    });
  }
}

function disableSearchButton_IfEmpty(textField)
{
  textField.addEventListener('keyup', function()
  {
    if (textField.value == "")
    {
      id_('advancedSearchButton').disabled = true;
    }
  });
}

function detectEmptyTextFields() 
{
  id_('advancedSearchButton').disabled = true;
  //disable searchButton on document launch

  var textFields = class_('keywordTextField');

  for (let i = 0; i < textFields.length; i++) 
  {
    textFields[i].addEventListener('keyup', function()
    {
      if (textFields[i].value == "")
      {
        id_('advancedSearchButton').disabled = true;
      }

      var noEmptyTextFields = true;

      for (let j = 0; j < textFields.length; j++) 
      {
        if (textFields[j].value == "")
        {
          noEmptyTextFields = false;
        }
      }

      if (noEmptyTextFields)
      {
        id_('advancedSearchButton').disabled = false;
      }
    });
  }

  

  


}

function dynamicWidth() 
{
  var selectors = class_('selector');

  for (let i = 0; i < selectors.length; i++) 
  {
    selectors[i].addEventListener('change', function()
    {
      
        // to be written

    });
    
  }
}






// Function Calls

inputCalibration(class_('tableColumnSelector')[0]);
//disableSearchButton_IfEmpty(class_('keywordTextField')[0]);

manageRules();

// detectEmptyTextFields();

id_('advancedSearchButton').addEventListener('click', function() 
{
  generateQueryConditions();
});










