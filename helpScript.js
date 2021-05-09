
// HELP DIV FUNCTIONALITY SCRIPT START 

var helpDiv = document.getElementById('helpDiv');

var helpNavIcon = document.getElementById('helpNavIcon');
var helpNavButton = document.getElementById('helpNavButton');

helpNavButton.onclick = function() 
{ 
  if (helpDiv.classList.contains("helpOn"))
  {
    helpDiv.classList.add("helpOff");
    helpDiv.classList.remove("helpOn");

    if (helpNavButton.classList.contains("linkB_active"))
    {
      helpNavButton.classList.remove("linkB_active");
    }
  }
  else 
  {
    helpDiv.classList.add("helpOn");
    
    // helpNavIcon.classList.remove("fa-question-circle");
    // helpNavIcon.classList.add("fa-times-circle");
    
     helpNavButton.classList.add("linkB_active");

    helpDiv.classList.add("helpOn");
    
    if (helpDiv.classList.contains("helpOff"))
      helpDiv.classList.remove("helpOff");
  }

};

// HELP DIV FUNCTIONALITY SCRIPT END -->




// HELP DIV CONTENT

if (document.getElementById('helpDiv') != undefined) 
{
  document.getElementById('helpDiv').innerHTML = 
  "<h1>Help <i class='far fa-question-circle'></i></h1>" + 
  
  "<div class=\"helpArticle\">" + 

    "<h2>Navigating Around <i class='far fa-question-circle'></i></h2>" + 
    
    "<ul>" + 

      "<li>" + 
        "Click a record to access its full details." + 
        "<br><br>" + 
        "Click &nbsp" + 
        "Close <i class='far fa-times-circle'></i> " + 
        "<br> <br>" + 
        "to dismiss a record's preview" + 
     " </li>" + 
      "<br>" + 

     " <li>" + 
      "  Click &nbsp" + 
      "  <span class=\"navLabel\">Search</span>" +  
      "  <i class='fab fa-sistrix'></i>" + 
       " <br><br> " + 
      "  on the top right corner to search for records." + 
      "  <br><br>" + 
      "  Click the same button to dismiss Search operation." + 
      "</li>" + 
      "<br>" + 
      
      "<li>" + 
      "  Click &nbsp" + 
      "  <span class=\"navLabel\">Export</span> " + 
      "  <i class='fas fa-arrow-circle-down'></i>" + 
      "  <br><br>" + 
      "  on the top right corner to export data." + 
      "  <br><br>" + 
      "  Click the same button to dismiss Export operation." + 
      "</li>" + 
      "<br>" + 

     " <li>" + 
     "   Click &nbsp" + 
     "   <span class=\"navLabel\">Themes</span> " + 
     "   <i class=\"fas fa-paint-brush\"></i>" + 
     "   <br><br>" + 
     "   on the top right corner to change the theme of the webpage." + 
     "   <br><br>" + 
     "   Click the same button to dismiss Themes Selection." + 
     " </li>" + 
     " <br>" + 

     " <li>" + 
     "   Click &nbsp" + 
     "   <span class=\"navLabel\">Help</span> " + 
     "   <i class='far fa-question-circle'></i>" + 
    "    <br><br>" + 
    "    on the top right corner to get help." + 
    "    <br><br>" + 
     "   Click the same button to dismiss Help." + 
    "  </li>" + 
    "  <br>" + 
   " </ul>" + 

  "</div>" + 

 " <div class=\"helpArticle\">" + 

  "  <h2>Search <i class='far fa-question-circle'></i></h2>" + 
    
    "<ul>" + 
    " <li>" + 
    "   Click &nbsp" + 
     "   <span class=\"navLabel\">Search</span> " + 
      "  <i class='fab fa-sistrix'></i>" + 
      "  <br><br>" + 
      "  to search for a record." + 
      "  <br><br>" + 
      "  Click the same button to dismiss Search." + 
      "</li>" + 
      "<br>" + 

     " <li>" + 
     "   Type a Search keyword in the search bar." + 
     "   <br><br> " + 
     "   Click the &nbsp <i class=\"fa fa-search\"></i> &nbsp to search." + 
     " </li>" + 
      "<br>" + 

    "  <li>To go back and view all records, click <br><br>" + 
     "  <i class=\"fas fa-chevron-circle-left\"></i> Back" + 
     "   <br><br>" + 
     "  on the top left of the screen." + 
      "</li>" + 
      "<br>" + 

    "</ul>" + 

  "</div>" + 

 " <div class=\"helpArticle\">" + 

  "  <h2>Export all data <i class='far fa-question-circle'></i></h2>" + 

    "<p>" + 
    "  Download all data as " + 
    "  an Excel Spreadsheet. " + 
    "  <br><br> " + 
    "  Format : <b>.xls</b>" + 
    "</p>" + 

    "<ul>" + 
     " <li>" + 
     "   Click &nbsp" + 
    "    <span class=\"navLabel\">Export</span> " + 
     "   <i class='fas fa-arrow-circle-down'></i>" + 
     "   <br><br>" + 
        "on the top right corner to export data." + 
    "    <br><br>" + 
     "   Click the same button to dismiss Export operation." + 
    "  </li>" + 
    "  <br>" + 

      "<li>" + 
      " By default, the exported file is named as " + 
      " <br><br>" + 
      " ' Industry Data.xls '" + 
      " <br><br>" + 
      " You can rename it by typing the desired file name in the text box." + 
      "</li>" + 
      "<br>" + 

      "<li>" + 
      "  Click the &nbsp <i class='fas fa-arrow-circle-down'></i> &nbsp to download the file." + 
      "</li>" + 
      "<br>" + 

    "</ul>" + 

  "</div>" + 

  "<div class=\"helpArticle\">" + 

    "<h2>Export Search Results <i class='far fa-question-circle'></i></h2>" + 
    
    "<p>" + 
     " You can export Search Results <br>" + 
     " as an Excel Spreadsheet " + 
     " <br><br> " + 
     " Format : <b>.xls</b>" + 
    "</p>" + 

    "<ul>" + 

     " <li>" + 
     " Search for a record by clicking the <br><br>  " + 
      "<span class=\"navLabel\">Search</span> " + 
      "<i class='fab fa-sistrix'></i>    " +   
      "</li>" + 
     " <br>" + 

   "   <li>" + 
   "    Click &nbsp" + 
   "     <span class=\"navLabel\">Export</span> " + 
   "     <i class='fas fa-arrow-circle-down'></i>" + 
   "     <br><br>" + 
   "     to export Search Results." + 
   "   </li>" + 
   "   <br>" + 
   " </ul>" + 

  "</div>" + 

"  <div class=\"helpArticle\" id=\"fontSizeHelpArticle\">" + 

    "<h2>Font Size <i class='far fa-question-circle'></i></h2>" + 

    "<ul>" + 
     " <li>" + 
     "  On a Mac, " + 
     "  <br><br>" + 
     "  Press &nbsp ' Command ' &nbsp<b>and</b>&nbsp  ' + ' &nbspto increase Font Size." + 
     "  <br><br>" + 
  "     Press &nbsp ' Command ' <b>and</b>&nbsp  ' - ' &nbspto decrease Font Size." + 
      "</li>" + 
 "     <br>" + 

     " <li>" + 
     "  On Windows, " + 
      " <br><br>" + 
      " Press &nbsp ' CTRL ' &nbsp<b>and</b>&nbsp ' + ' &nbspto increase Font Size." + 
      " <br><br>" + 
      " Press &nbsp ' CTRL ' &nbsp<b>and</b>&nbsp ' - ' &nbspto decrease Font Size." + 
      "</li>" + 
      "<br>" + 
   " </ul>" + 

  "</div>" + 

  "<div class=\"helpArticle\" id=\"displayHelpArticle\">" + 

    "<h2>Display <i class='far fa-question-circle'></i></h2><br>" + 
    "Can't differentiate between elements?" + 
    
    "<p>Please make sure the <b>Contrast</b> Setting of your display is around 50%</p>" + 

  "</div>" + 

  "<div class=\"helpArticle\">" + 

    "<h2>More help <i class='far fa-question-circle'></i></h2>" + 

    "<br><br>" + 
    "<a class=\"helpEmailLink\" href=\"mailto:support@lotus.com\">Contact Support</a>" + 
    "<br><br>" + 

  "</div>" +

  "<div class=\"helpArticle\">" +
    
    "<h2> Programming Manual </h2>" +

    "<br>" +

    "<a class=\"linkB\" style='text-decoration:none'" + 
    "href=\"Industry%20Partner%20Database%20-%20Programming%20Manual.pdf\" " + 
    "download> " +
      "&nbspProgramming Manual <i class='fas fa-arrow-circle-down'></i> " +
    "</a>" +
    
    "<br><br>" +

  "</div>";
}
