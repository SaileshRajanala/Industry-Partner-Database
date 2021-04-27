
function changeTheme(theme="bright", _id = 'themeCSS') 
{
    document.getElementById(_id).setAttribute('href', theme + ".css");
}

function setThemeForHours(theme, hourStart, hourEnd, _midnight = false, _id = 'themeCSS')
{
    var d = new Date();

    if (_midnight) // for special cases that include midnight
    {
        if (d.getHours() >= hourStart || d.getHours() < hourEnd)
        {
            changeTheme(theme, _id);
        } 
    } 
    else if (d.getHours() >= hourStart && d.getHours() < hourEnd)
    {
        changeTheme(theme, _id);
    }
}

setThemeForHours('bright',    6,  8);
setThemeForHours('wsu',       8, 10);
setThemeForHours('citrus',   10, 12);
setThemeForHours('abyss',    12, 14);
setThemeForHours('summer',   14, 16);
setThemeForHours('bubbles',  16, 18);
setThemeForHours('dark',     18, 23);
setThemeForHours('midnight', 23,  6, true);