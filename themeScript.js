
function id_(_id) 
{
    return document.getElementById(_id);    
}

function addTheme(themeName)
{
    
}

// ON DOCUMENT LOAD
id_('themesMenu').classList.add('displayNone');

id_('themeButton').addEventListener('click', function() 
{
    if (id_('themesMenu').classList.contains('displayNone'))
        id_('themesMenu').classList.remove('displayNone');
    else
        id_('themesMenu').classList.add('displayNone');
});