
function changeTheme(theme="bright", _id = 'themeCSS') 
{
    document.getElementById(_id).setAttribute('href', theme + ".css");
}

var themes = ['abyss', 
              'citrus',
              'bright',
              'dark',
              'midnight',
              'summer',
              'bubbles',
              'wsu'];

              

changeTheme(themes[Math.floor(Math.random() * themes.length)]);