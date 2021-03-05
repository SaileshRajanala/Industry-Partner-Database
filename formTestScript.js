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

function message(msg) 
{
  messageDiv = document.getElementById('message');

  messageDiv.classList.add('msgPopAnimation');
  messageDiv.innerHTML = '<i class="fas fa-comment"></i>&nbsp; ' + msg + '';
  
  // messageDiv.style.color = 'black';
  // messageDiv.style.backgroundColor = 'white';

  // Code below is necessary for animation on request.
  messageDiv.addEventListener("animationend", 

    function() 
    {
        messageDiv.classList.remove('msgPopAnimation');            
    }
    
  );
  
}

function success_message(msg) 
{
  message(msg);
  messageDiv.style.color = 'lime';
}

function error_message(msg) 
{
  message(msg);
  messageDiv.style.color = 'red';
}

function focus_message(_id, msg)
{
  if (id_(_id).style.display != 'none')
  id_(_id).addEventListener("focusin", 
  function () {message(msg);});
}

function default_message()
{
  messageDiv.innerHTML = 'Industry Partner Form';
  // messageDiv.style.color = 'white';
  // messageDiv.style.backgroundColor = 'transparent';
}

for (var i = tag_('input').length - 1; i >= 0; i--) 
  tag_('input')[i].addEventListener("focusout", 
    function () {messageDiv.innerHTML = 'Industry Partner Form';});

focus_message('first_name', 'Please enter your First Name');
focus_message('last_name', 'Please enter your Last Name');
focus_message('email', 'Please enter your Email Address');
focus_message('phone_number', 'Please enter your Phone Number');
focus_message('employer', "Please enter your Employer's Name");
focus_message('job_title', 'What is the title of your job?');
focus_message('state', 'In which state, do you work?');
focus_message('city', 'In which city, do you work?');
focus_message('otherEngDisciplineText', 'Please list the discipline of your Engineering Degree');

// Important Function below.
for (var i = tag_('input').length - 1; i >= 0; i--) 
  tag_('input')[i].addEventListener("focusout", default_message);

id_('prefix').addEventListener("focusin", 
  function () {message('Please select your Prefix');});

id_('suffix').addEventListener("focusin", 
  function () {message('Please select your Suffix');});

// Important Function below.
for (var i = tag_('select').length - 1; i >= 0; i--) 
  tag_('input')[i].addEventListener("change", 
    function () {messageDiv.innerHTML = 'Industry Partner Form';});


// OTHER RADIO Button  ******************************
function linkRadioWithText(_radio, _text)
{
  id_(_text).addEventListener("keyup", 
  function () 
  {
    id_(_radio).click();
    id_(_radio).value = id_(_text).value;
  });
}

linkRadioWithText('otherUndergradDegreeRadio','otherUndergradDegreeText');
linkRadioWithText('otherEngDisciplineRadio','otherEngDisciplineText');


var labels = document.getElementsByTagName('LABEL');
for (var i = 0; i < labels.length; i++) {
    if (labels[i].htmlFor != '') {
         var elem = document.getElementById(labels[i].htmlFor);
         if (elem)
            elem.label = labels[i];         
    }
}

function switchDiv(targetDiv, currentDiv)
{
    id_(currentDiv).style.display = 'none';

    id_(targetDiv).style.display = 'block';
    window.scrollTo(0, 0);
    //id_(targetDiv).classList.add('formDivLaunchAnimation');

}

// INITIALIZE FORM START##########################################################################
var formDivs = document.getElementsByClassName('formDiv');

for (var i = formDivs.length - 1; i >= 0; i--) {
  formDivs[i].style.display = 'none';
}

formDivs[0].style.display = 'block';
// INITIALIZE FORM END##########################################################################

// var nextButtons = document.getElementsByClassName('nextButton');

// for (var i = nextButtons.length - 1; i >= 0; i--) 
// {
//   var currDiv = id_(nextButtons[i].getAttribute('currentDiv'));
//   var nextDiv = id_(nextButtons[i].getAttribute('targetDiv'));

//   nextButtons[i].addEventListener('click', function() 
//     {
//       currDiv.style.display = 'none';
//       nextDiv.style.display = 'block';
//     });
// }

// var prevButtons = document.getElementsByClassName('prevButton');

// for (var i = prevButtons.length - 1; i >= 0; i--) 
// {
//   var currDiv = id_(prevButtons[i].getAttribute('currentDiv'));
//   var prevDiv = id_(prevButtons[i].getAttribute('targetDiv'));

//   prevButtons[i].addEventListener('click', function() 
//     {

//       prevDiv.style.display = 'block';
//       currDiv.style.display = 'none';
//     });
// }


// CHECKBOX JS TEST 
// var inputs = document.getElementsByTagName("input");  // all inputs

// for(var i = 0; i < inputs.length; i++) 
// {
//     if(inputs[i].type == "checkbox") 
//     {
//         inputs[i].addEventListener("onmouseover", 
          
//           function () 
//           {
//              if (inputs[i].checked) 
//              {
//                 var labels = document.getElementsByTagName('label');

//                 //htmlFor
//                 for (var k = labels.length - 1; k >= 0; k--) 
//                 {
//                   if (labels[i].htmlFor == inputs[i].getAttribute('id'))
//                   {
//                     labels[i].innerHTML += ' <i class="fas fa-check-circle"></i>';
//                   }
//                 }


//              }
//              else
//              {
//                 var labels = document.getElementsByTagName('label');

//                 //htmlFor
//                 for (var k = labels.length - 1; k >= 0; k--) 
//                 {
//                   if (labels[i].htmlFor == inputs[i].getAttribute('id'))
//                   {
//                     labels[i].innerHTML += ' <i class="fas fa-check-circle"></i>';
//                   }
//                 }
//              }
//           }
        
//         );    
//     }  
// }


 // TESTS
 // error_message('Please enter a valid name.');
 // success_message('Great! Please fill out the next section.');


// id_('first_name').onclick = function () {

//   message('Please enter your First Name.');

// };

//  id_('last_name').onclick = function () {

//   message('Please enter your Last Name.');

// };

//message("Industry Partner Form");

// on clicking the next_section1 button
// document.getElementById('next_section1').onclick = function()
// {

//   var prefix = document.getElementById('prefix').value + ' ';
//   var suffix = document.getElementById('suffix').value + ' ';
//   var first_name = document.getElementById('first_name').value + ' ';
//   var last_name = document.getElementById('last_name').value + ' ';

 //  message('Great! Please proceed to the next section <button class="nextButton" id="next_section1"> Next <i class="fas fa-chevron-circle-right"></i> </button>');

// };