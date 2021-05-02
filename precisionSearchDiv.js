function id_(_id)
{
  return document.getElementById(_id);
}

function animate(_id, _animationClass)
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

id_('searchNavButton').addEventListener('click', function() 
{
  var _id = 'precisionSearchLinkDiv';

  if (id_(_id).classList.contains('displayNone'))
  {
    id_(_id).classList.remove('displayNone');

    animate(_id, 'launchUpAnimation');
  }
  else 
    id_(_id).classList.add('displayNone');
});





