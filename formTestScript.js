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

var labels = document.getElementsByTagName('LABEL');
for (var i = 0; i < labels.length; i++) {
    if (labels[i].htmlFor != '') {
         var elem = document.getElementById(labels[i].htmlFor);
         if (elem)
            elem.label = labels[i];         
    }
}

// INITIALIZE FORM START #################################
var formDivs = document.getElementsByClassName('formDiv');

for (var i = formDivs.length - 1; i >= 0; i--) {
  formDivs[i].style.display = 'none';
}

document.body.style.backgroundImage = "url(\'wsu" + 
    (Math.floor(Math.random() * 6) + 1) + ".jpg\')";

formDivs[0].style.display = 'block';
// INITIALIZE FORM END ###################################
