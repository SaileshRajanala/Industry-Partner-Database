
function id_(_id) 
{
    return document.getElementById(_id);    
}

function addThemes(themeNames)
{
    var themeOptionsDiv = document.createElement('div');
    themeOptionsDiv.setAttribute('id', 'themeOptionsDiv');

    for (let i = 0; i < themeNames.length; i++) 
    {
        var themeButton = document.createElement('button');
        themeButton.setAttribute('name', 'theme');
        themeButton.classList.add('themeImageButton');
        themeButton.setAttribute('type', 'submit');
        themeButton.setAttribute('value', themeNames[i]);

        var themeImage = document.createElement('img');
        themeImage.classList.add('themeImage');
        themeImage.setAttribute('src', 'theme_' + themeNames[i] + '.png');

        themeButton.append(themeImage);

        // adding theme below
        themeOptionsDiv.append(themeButton);
    }

    var themesForm = document.createElement('form');
    themesForm.setAttribute('name', 'themeChange');
    themesForm.setAttribute('method', 'POST');
    themesForm.setAttribute('action', '');


    var themesDivTitle = document.createElement('h1');
    themesDivTitle.setAttribute('id', 'themesDivTitle');

    themesDivTitle.innerHTML = '<i class="fas fa-paint-roller"></i> &nbsp<i class="fas fa-palette"></i> &nbsp Themes &nbsp <i class="fas fa-paint-brush"></i> &nbsp <i class="fas fa-brush"></i> &nbsp';


    
    themesForm.append(themesDivTitle);
    themesForm.append(themeOptionsDiv);


    var themesMenu = document.createElement('div');
    themesMenu.setAttribute('id', 'themesMenu');

    themesMenu.append(themesForm);


    // Dynamic Creation of the ThemesMenuDiv
    var themesMenuDiv = document.createElement('div');
    themesMenuDiv.setAttribute('id', 'themesMenuDiv');

    themesMenuDiv.append(themesMenu);

    document.body.append(themesMenuDiv);
}


// // ON DOCUMENT LOAD
// id_('themesMenuDiv').classList.add('displayNone');

// id_('themeButton').addEventListener('click', function() 
// {
//     if (id_('themesMenuDiv').classList.contains('displayNone'))
//         id_('themesMenuDiv').classList.remove('displayNone');
//     else
//         id_('themesMenuDiv').classList.add('displayNone');
// });



// ADD THEMES BELOW
addThemes([
'wsu', 
'bright', 
'citrus', 
'abyss', 
'bubbles', 
'dark', 
'midnight',

// NEW Themes go 


]);