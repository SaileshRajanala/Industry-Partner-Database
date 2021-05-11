function id_(_id)
{
  return document.getElementById(_id);
}

id_('searchBar').addEventListener('focusin', function()
{
  id_('searchBarDiv').classList.add('searchBarDivFocusIn');
  id_('searchButtonIcon').classList.add('searchButtonIconFocusIn');
  id_('searchBar').classList.add('searchBarFocusIn');
});


id_('searchBar').addEventListener('focusout', function()
{
  id_('searchBar').classList.remove('searchBarFocusIn');
  id_('searchButtonIcon').classList.remove('searchButtonIconFocusIn');
  id_('searchBarDiv').classList.remove('searchBarDivFocusIn');
});


























