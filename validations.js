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
  messageDiv = id_('message');

  // messageDiv.classList.add('msgPopAnimation');
  messageDiv.innerHTML = '<i class="fas fa-comment"></i>&nbsp; ' + msg + '';
  
  // messageDiv.style.color = 'black';
  var d = new Date();

  if (d.getHours() >= 6 && d.getHours() < 18)
    messageDiv.style.backgroundColor = 'black';
  else 
    messageDiv.style.backgroundColor = 'white';

  // Code below is necessary for animation on request.
  messageDiv.addEventListener("animationend", 

    function() 
    {
        messageDiv.classList.remove('msgPopAnimation');            
    }
    
  );
}

function animate_Message()
{
	id_('message').classList.add('msgPopAnimation');
}

function focus_message(_id, msg)
{
  if (id_(_id).style.display != 'none')
  id_(_id).addEventListener("focusin", 
  function () 
  { 
  	message(msg);
  	animate_Message(); 
  });
}

function success_message(msg) 
{
  message(msg);
  messageDiv.style.backgroundColor = 'lime';
}

function error_message(msg) 
{
  message(msg);
  messageDiv.style.backgroundColor = 'red';
}

function no_message()
{
	id_('message').innerHTML = "";

	var d = new Date();

	if (d.getHours() >= 6 && d.getHours() < 18)
		messageDiv.style.backgroundColor = 'black';
	else 
		messageDiv.style.backgroundColor = 'white';
}

function alphabetsOnly(_id, _msg, _errorMsg) 
{
	id_(_id).addEventListener("keyup", function () 
	{	
		var regex = /^[a-zA-Z]+$/;

		if (id_(_id).value == "")
			message(_msg);
		else if (!regex.test( id_(_id).value ))
			error_message(_errorMsg);
		else
			message(_msg);
	}
	);
}
 
alphabetsOnly('first_name', 'Please enter your First Name', 
	'Frst Name should only contain Alphabets'); 

alphabetsOnly('last_name', 'Please enter your Last Name', 
	'Last Name should only contain Alphabets');



