
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


function initializeThemes() 
{
    id_('themesMenuDiv').classList.add('displayNone');

    id_('themeButton').addEventListener('click', function() 
    {
        if (id_('themesMenuDiv').classList.contains('displayNone'))
        {
            id_('themesMenuDiv').classList.remove('displayNone');
            animate('themesMenuDiv', 'launchTopAnimation');

            id_('themeButton').classList.add('linkB_active');
        }
        else
        {
            id_('themesMenuDiv').classList.add('displayNone');

            if (id_('themeButton').classList.contains('linkB_active'))
                id_('themeButton').classList.remove('linkB_active');
        }
    });    
}




// ADD THEMES BELOW
addThemes([

'wsu', 
'bright', 
'citrus', 
'abyss', 
'bubbles', 
'summer',
'dark', 
'midnight',

// ADD THEMES BELOW THIS LINE <*> ------ <*>
// eg. 'newtheme',





// ADD THEMES ABOVE THIS LINE <*> ------ <*>
]);


// // // // // // // // 
initializeThemes();  // 
// // // // // // // //
// DON'T REMOVE ABOVE LINE - (!!!! important !!!!) 








