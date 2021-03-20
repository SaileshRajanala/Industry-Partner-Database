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

function message(msg, icon = '<i class="fas fa-comment"></i>') 
{
  var messageDiv = id_('message');
  messageDiv.style.backgroundImage = 'none';

  if (icon != "")
    messageDiv.innerHTML = icon + '&nbsp; ' + msg;
  else
    messageDiv.innerHTML = msg;

  var d = new Date();

  if (d.getHours() >= 6 && d.getHours() < 18)
  {
    messageDiv.style.backgroundColor = 'black';
    messageDiv.style.color = 'white';
  }
  else 
  {
    messageDiv.style.backgroundColor = 'white';
    messageDiv.style.color = 'black';
  }
}

function animate(_id='message', _animationClass='msgPopAnimation')
{
  id_(_id).classList.add(_animationClass);

  // Code below is necessary for animation on request.
  id_(_id).addEventListener("animationend", 
  function() 
  {
      id_(_id).classList.remove(_animationClass);            
  }
  );
}

// function animateAll(_class='message', _animationClass='msgPopAnimation')
// {
//   for (var i = class_(_class).length - 1; i >= 0; i--) 
//   {
//     var object = class_(_class)[i];

//     object.classList.add(_animationClass);

//     // Code below is necessary for animation on request.
//     object.addEventListener("animationend", 
//     function() 
//     {
//         object.classList.remove(_animationClass);            
//     }
//     );
//   }
// }

function id_message(_id, msg, icon = '<i class="fas fa-comment"></i>') 
{
  var messageDiv = id_(_id);
  messageDiv.style.backgroundImage = 'none';

  // messageDiv.classList.add('msgPopAnimation');
  messageDiv.innerHTML = icon + '&nbsp; ' + msg + '';
  
  // messageDiv.style.color = 'black';
  var d = new Date();

  if (d.getHours() >= 6 && d.getHours() < 18)
  {
    messageDiv.style.backgroundColor = 'black';
    messageDiv.style.color = 'white';
  }
  else 
  {
    messageDiv.style.backgroundColor = 'white';
    messageDiv.style.color = 'black';
  }
}

function id_error_message(_id, msg) 
{
  var messageDiv = id_(_id);
  id_message(_id, msg, '<i class="fas fa-exclamation-triangle"></i>');
  messageDiv.style.color = 'white';

  if (d.getHours() >= 6 && d.getHours() < 18)
  {
  messageDiv.style.backgroundColor = 'red';
  }
  else 
  {
  messageDiv.style.backgroundColor = 'darkred';
  }
}

function id_success_message(_id, msg) 
{
  var messageDiv = id_(_id);
  id_message(_id, msg, '<i class="far fa-check-circle"></i>');
  messageDiv.style.color = 'white';

  if (d.getHours() >= 6 && d.getHours() < 18)
  {
  messageDiv.style.backgroundColor = 'lime';
  messageDiv.style.color = 'black';
  }
  else 
  {
  messageDiv.style.backgroundColor = 'green';
  messageDiv.style.color = 'white';
  }
}

function checkInput(_id, _regex)
{
  if (!_regex.test( id_(_id).value ))
  {
    id_(_id).classList.add('wrongInput');

    if (id_(_id).classList.contains('correctInput'))
      id_(_id).classList.remove('correctInput');
  }
  else
  {
    if (id_(_id).classList.contains('wrongInput'))
      id_(_id).classList.remove('wrongInput');

    id_(_id).classList.add('correctInput');
  }
}

function validate(_id, _regex, _msg, _errorMsg, _successMsg, _inOutAnimation = true) 
{
  var guideID = _id + '_message_id';

  if (id_(_id).style.display != 'none')
    id_(_id).addEventListener("focusin", 
    function () 
    { 
      // remove error class if contained
      if (id_(_id).classList.contains('wrongInput'))
        id_(_id).classList.remove('wrongInput');

      // remove correct class if contained
      if (id_(_id).classList.contains('correctInput'))
        id_(_id).classList.remove('correctInput');

      var node = document.createElement("p");
      node.classList.add('guide');
      node.setAttribute("id", guideID);

      id_(_id).parentElement.appendChild(node);

      if (_inOutAnimation)
        animate(guideID,'slideDownAnimation');

      id_(_id).classList.add('bond');

      if (id_(_id).value == "")
        id_message(guideID, _msg);
      else if (!_regex.test( id_(_id).value ))
        id_error_message(guideID, _errorMsg);
      else
        id_success_message(guideID, _successMsg);
    });

  id_(_id).addEventListener("keyup", function (event) 
  { 
    if ((event.keyCode >=  48 && event.keyCode <=  90) ||
        (event.keyCode >= 186 && event.keyCode <= 222) ||
         event.keyCode ==  32 || event.keyCode ==   8)  
      if (id_(_id).value == "")
        id_message(guideID, _msg);
      else if (!_regex.test( id_(_id).value ))
      {
        animate(guideID,'errorMsgAnimation');
        id_error_message(guideID, _errorMsg);        
      }
      else
      {
        id_success_message(guideID, _successMsg);
        animate(guideID,'successMsgAnimation');
      }
  }
  );

  if (id_(_id).style.display != 'none')
    id_(_id).addEventListener("focusout", 
    function () 
    { 
      id_(_id).classList.remove('bond'); 

      if (_inOutAnimation)
        animate(_id, 'minimizeAnimation');

      id_(_id).parentElement.removeChild(id_(_id).parentElement.lastElementChild);

      // INPUT DETECTION & CONFIRMATION BELOW
      checkInput(_id, _regex);
    });
}

function capitalizeStringAt(str, i)
{
    return str.substring(0, i) + str[i].toUpperCase() + str.substring(i + 1);
}

function sanitize(_id)
{
  id_(_id).addEventListener("keyup", function (event) 
  { 
    input = id_(_id).value;

    if ((event.keyCode >=  48 && event.keyCode <=  90) ||
        (event.keyCode >= 186 && event.keyCode <= 222) ||
         event.keyCode ==  32 || event.keyCode ==   8)  
      if (input != "") 
      {
        input = capitalizeStringAt(input, 0);

        for (var i = 1; i < input.length - 1; i++) 
        {
          if (input[i] == ' ')
          {
            input = capitalizeStringAt(input, i + 1);
          }
        }

        id_(_id).value = input;
      }

  });
}

function other(_name, _value = "Other", _form = "Industry_Partner_Database")
{
  
  /* CREATES THIS HTML ELEMENT

  <input type="radio" name="college_education" id="other_college_education_radio" value="Other">

  <label class="otherLabel" id="other_college_education_label" for="other_college_education_radio">
  
  <span id="other_college_education_span" class="otherSpan"> Other </span>
  
  <input class="otherTextField" id="other_college_education_text" type="text" name="other_college_education" placeholder="Other">

  </label>

  */

  var _type = document.forms[_form].elements[_name][0].type;

  id_("other_" + _name).innerHTML = 
  '<input type="' + _type + '" name="' + _name + 
  '" id="other_' + _name + '_' + _type + '" value="' + _value + '"> ';

  id_("other_" + _name).innerHTML += 
  '<label class="otherLabel" id="other_' + _name + '_label" for="other_' + _name + 
  '_' + _type + '"> <span id="other_' + _name + '_span" class="otherSpan"> ' + _value + 
  ' </span> <input class="otherTextField" id="other_' + _name + 
  '_text" type="text" name="other_' + _name + '" placeholder="' + _value + '"> </label>';

  var inputs = document.forms["Industry_Partner_Database"].elements[_name];
  var bindedSpanId = "other_" + _name + "_span";
  var bindedTextboxId = "other_" + _name + "_text";
  var bindedLabelId = "other_" + _name + "_label";

  if (_type == 'checkbox')
  { 
    id_("other_" + _name + "_checkbox").addEventListener('change', 
    function () 
    {
      if (id_("other_" + _name + "_checkbox").checked)
      {
        id_(bindedSpanId).style.display = "none";
        id_(bindedTextboxId).style.display = "block";

        id_(bindedLabelId).style.paddingTop = "0.5%";
        id_(bindedLabelId).style.paddingBottom = "0.5%";

         animate(bindedTextboxId);

        id_(bindedTextboxId).focus();
      }
      else
      {
        id_(bindedLabelId).style.paddingTop = "1%";
        id_(bindedLabelId).style.paddingBottom = "1%";

        id_(bindedSpanId).style.display = "block";
        id_(bindedTextboxId).style.display = "none";
      } 
    }
    );
  }
  else if (_type == 'radio')
  for (var i = inputs.length - 1; i >= 0; i--) 
  {
    inputs[i].addEventListener('change', 
    function () 
    {
      if (inputs.value == _value) 
      {
        id_(bindedSpanId).style.display = "none";
        id_(bindedTextboxId).style.display = "block";

        id_(bindedLabelId).style.paddingTop = "0.5%";
        id_(bindedLabelId).style.paddingBottom = "0.5%";

        animate(bindedTextboxId);

        id_(bindedTextboxId).focus();
      }
      else
      {
        id_(bindedLabelId).style.paddingTop = "1%";
        id_(bindedLabelId).style.paddingBottom = "1%";

        id_(bindedSpanId).style.display = "block";
        id_(bindedTextboxId).style.display = "none";
      }
    }
    );
  }

  id_(bindedTextboxId).addEventListener('focusout', 
    function () 
    {
      if (id_(bindedTextboxId).value == "")
      {
        id_("other_" + _name + '_' + _type).checked = false;

        id_(bindedLabelId).style.paddingTop = "1%";
        id_(bindedLabelId).style.paddingBottom = "1%";

        id_(bindedSpanId).style.display = "block";
        id_(bindedTextboxId).style.display = "none";
      }
    }
    );
}

// SOURCE : formTestScript.js 
function switchDiv(targetDiv, currentDiv)
{
    id_(currentDiv).style.display = 'none';

    id_(targetDiv).style.display = 'block';
    window.scrollTo(0, 0);

    message('Industry Partner Form', "");
}

function displayOnSelect(_targetID, _selectID)
{
  id_(_targetID).style.display = "none";
  
  var inputs = document.forms["Industry_Partner_Database"].elements[id_(_selectID).name];

  for (var i = inputs.length - 1; i >= 0; i--) 
  {
    inputs[i].addEventListener('change', 
    function () 
    {
      if (inputs.value == id_(_selectID).value)
      {
        id_(_targetID).style.display = "block";
        animate(_targetID);
      }
      else
      {
        id_(_targetID).style.display = "none";
      }
    }
    );
  }
}

function displayOnSelectItems(_targetID, _selectIDs)
{
  if (_selectIDs.length > 0)
  {
    id_(_targetID).style.display = "none";
    
    var inputs = document.forms["Industry_Partner_Database"].elements[id_(_selectIDs[0]).name];

    for (var i = inputs.length - 1; i >= 0; i--) 
    {
      inputs[i].addEventListener('change', 
      function () 
      {

        for (var j = _selectIDs.length - 1; j >= 0; j--) 
        {
          if (inputs.value == id_(_selectIDs[j]).value)
          {
            id_(_targetID).style.display = "block";
            animate(_targetID);

            return;
          }
        }
        
        id_(_targetID).style.display = "none";
      }
      );
    }
  }
}


// FUNCTIONS CALLS BELOW


validate('first_name', /^[a-zA-Z]+$/, 'Please enter your First Name', 
  'Enter only alphabets', 'First Name is Valid');

validate('last_name', /^[a-zA-Z]+$/, 'Please enter your Last Name', 
  'Enter only alphabets', 'Last Name is Valid');

validate('email', 
  /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i, 
  'Please enter your Email address', 'Enter a valid email', 'Email is Valid');

validate('phone_number', /^\d{10}$/, 'Enter your 10-digit Phone Number', 
  'Enter a valid U.S. Phone Number', 'Phone Number is Valid');

validate('employer', /^[a-zA-Z]+ [a-zA-Z]+$/, 
  "Please enter your Employer's Name", 
  "Enter Employer's First & Last Name", "Employer's Name is valid");

validate('job_title', /^[a-zA-Z ]*$/, 
  "Please enter your Job Title", 
  "Enter a valid Job Title", "Job Title is valid");

validate('city', /^[a-zA-Z ]*$/, 
  "In which city did you work?", 
  "Enter a valid city", "City is valid");


sanitize('first_name');
sanitize('last_name');
sanitize('employer');
sanitize('job_title');
sanitize('city');


other("UndergradDegree", 'Other Degree');
other("BS_Engineering_Discipline", 'Other Discipline');
other("mastersDegree");
other("MS_Engineering_Discipline");
other("Role_Model");


displayOnSelect('associates_degree_div', 'college_education3');
displayOnSelect('technical_degree_div', 'college_education4');

displayOnSelect('wsuForBS', 'college_education5');
displayOnSelect('otherSchoolForBS', 'wichitaUndergradNo');

displayOnSelectItems('BS_field', ['wichitaUndergradYes','wichitaUndergradNo']);

displayOnSelect('BS_Engineering_Discipline_Div', 'BS_Engineering');

displayOnSelectItems('BS_year_div', 
  ['college_education3','college_education4','college_education5']);

displayOnSelect('have_MS_degree', 'college_education5');
displayOnSelect('MS_other_school_div', 'MS_other');
displayOnSelectItems('MS_field', ['MS_wsu','MS_other']);

displayOnSelect('MS_Engineering_Discipline_Div', 'MS_Engineering');

displayOnSelectItems('MS_year_div', ['MS_wsu','MS_other']);

displayOnSelectItems('PHD_degree_div', ['MS_wsu','MS_other']);
displayOnSelect('PHD_other_school_div', 'PHD_other');
displayOnSelectItems('PHD_year_div', ['PHD_wsu','PHD_other']);







