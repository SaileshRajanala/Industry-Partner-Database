
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


function addRule(targetDivId = "searchConditionsDiv")
{
  var searchConditionsDiv = id_(targetDivId);

  var searchCondition = document.createElement('div');
  searchCondition.classList.add('searchCondition');


  var conditionalSelector = document.createElement('select');
  conditionalSelector.setAttribute('name', 'conditionalConnection');
  conditionalSelector.classList.add('selector');

  var option = document.createElement('option');
  option.setAttribute('value', 'AND');
  option.text = 'AND';

  conditionalSelector.add(option);

  option = document.createElement('option');
  option.setAttribute('value', 'OR');
  option.text = 'OR';

  conditionalSelector.add(option);

  searchCondition.append(conditionalSelector);


  var tableColumnSelector = document.createElement('select');
  tableColumnSelector.setAttribute('name', 'tableColumn');
  tableColumnSelector.classList.add('selector');
  
  for (let index = 0; index < tableColumns.length; index++) 
  {
    option = document.createElement('option');
    option.setAttribute('value', tableColumns[index]);
    option.text = tableColumns[index];

    tableColumnSelector.add(option);
  }

  searchCondition.append(tableColumnSelector);


  var operationSelector = document.createElement('select');
  operationSelector.setAttribute('name', 'operation');
  operationSelector.classList.add('selector');

  option = document.createElement('option');
  option.setAttribute('value', 'CONTAINS');
  option.text = 'CONTAINS';

  operationSelector.add(option);

  option = document.createElement('option');
  option.setAttribute('value', '=');
  option.text = '=';

  operationSelector.add(option);

  option = document.createElement('option');
  option.setAttribute('value', 'STARTS WITH');
  option.text = 'STARTS WITH';

  operationSelector.add(option);

  option = document.createElement('option');
  option.setAttribute('value', 'ENDS WITH');
  option.text = 'ENDS WITH';

  operationSelector.add(option);

  searchCondition.append(operationSelector);


  var keywordTextField = document.createElement('input');
  keywordTextField.setAttribute('name', 'keywordValue');
  keywordTextField.setAttribute('type', 'text');
  keywordTextField.classList.add('keywordTextField');

  searchCondition.append(keywordTextField);


  // var _button = document.createElement('button');
  // _button.setAttribute('type', 'button');
  // _button.classList.add('addRuleButton');
  // _button.innerHTML = 'Add <i class="fas fa-plus-circle"></i>';

  // searchCondition.append(_button);

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

  // var ruleHTML = '<div class="searchCondition">\n\n' + 

	// 			'<select name="conditionalConnection" class="selector">\n\n' + 

	// 			'	<option value="AND">AND</option>\n' + 
	// 			'	<option value="OR">OR</option>\n\n' + 
					
	// 			'</select>\n\n' + 

	// 			'<select name="tableColumn" class="selector">\n\n' + 

	// 			'	<option value="Prefix">Prefix</option>\n' + 
	// 			'	<option value="Suffix">Suffix</option>\n' + 
	// 			'	<option value="First_Name">First Name</option>\n' + 
	// 			'	<option value="Last_Name">Last Name</option>\n\n' + 
					
	// 			'</select>\n\n' + 

	// 			'<select name="operation" class="selector">\n\n' + 

	// 			'	<option value="CONTAINS">CONTAINS</option>\n' + 
	// 			'	<option value="="> = </option>\n' + 
	// 			'	<option value="STARTS">STARTS WITH</option>\n' + 
	// 			'	<option value="ENDS">ENDS WITH</option>\n\n' + 
					
	// 			'</select>\n\n' + 

	// 			'<input type="text" name="keywordValue" class="keywordTextField">\n\n' + 

	// 			'<button type="button" class="addRuleButton">\n' + 
	// 				'Add <i class="fas fa-plus-circle"></i>\n\n' + 
	// 			'</button>\n\n' + 

	// 			'<button type="button" class="removeRuleButton">\n' + 
	// 				'Remove <i class="fas fa-minus-circle"></i>\n' + 
	// 			'</button>\n\n' + 
				
	// 		'</div>\n\n';
  
  // searchConditionsDiv.innerHTML += ruleHTML;
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
      // manageRules();


    });
  }

  // for (var i = removeButtons.length - 1; i >= 0; i--) 
  // {
  //   removeButtons[i].addEventListener("click", function() 
  //   {
  
  //     removeButtons[i].parentNode.parentNode.removeChild(removeButtons[i].parentNode);
  
  //   });
  // }
}




// Function Calls

manageRules();











