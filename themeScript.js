
function id_(_id) 
{
    return document.getElementById(_id);    
}


id_('themeButton').addEventListener('click', function() 
{
    if (id_('themesMenu').classList.contains('displayNone'))
        id_('themesMenu').classList.remove('displayNone');
    else
        id_('themesMenu').classList.add('displayNone');
});