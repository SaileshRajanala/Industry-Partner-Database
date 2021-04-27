
function changeTheme(theme="bright", _id = 'themeCSS') 
{
    document.getElementById(_id).setAttribute('href', theme + ".css");
}

var d = new Date();

var hour = d.getHours();

if (hour >= 0 && hour <= 1)
{

}

if (d.getHours() >= 6 && d.getHours() < 180)
{  
    swapStylesheet("request_bright.css", "rS");
    swapStylesheet("test_bright.css", "tS");
    swapStylesheet("export_bright.css", "eS");
    swapStylesheet("help_bright.css", "hS");
    swapStylesheet("mobile_bright.css", "mS");
}
else
{
    swapStylesheet("request_dark.css", "rS");
    swapStylesheet("test_dark.css", "tS");
    swapStylesheet("export_dark.css", "eS");
    swapStylesheet("help_dark.css", "hS");
    swapStylesheet("mobile_dark.css", "mS");
}