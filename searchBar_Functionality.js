// SEARCHICON FUNCTIONALITY SCRIPT

var searchNavIcon = document.getElementById('searchNavIcon');
var searchNavButton = document.getElementById('searchNavButton');

var dashBoard = document.getElementsByClassName('dashboard')[0];
var searchBar = document.getElementById("searchBarDiv");

var d = new Date();

searchBar.style.display = "none";

searchNavButton.onclick = function() 
{ 
  if (searchBar.classList.contains("bubblegumOn"))
  {
    searchBar.classList.add("bubblegumOff");
    searchBar.classList.remove("bubblegumOn");

    if (searchNavButton.classList.contains("linkB_active"))
    {
      searchNavButton.classList.remove("linkB_active");
    }

      dashBoard.style.display = "block";
      dashBoard.style.animationDelay = "0s";
      dashBoard.classList.remove("hideBelow");

      document.getElementById('layer').style.display = "none";
  }
  else 
  {
    dashBoard.style.animationDelay = "0s";
    dashBoard.classList.add("hideBelow");

    searchNavButton.classList.add("linkB_active");

    document.getElementById('layer').style.display = "block";
    document.getElementById('layer').style.zIndex = '2';
    document.getElementById('precisionSearchLinkDiv').style.zIndex = '3';

    //Code below is necessary for button on input field
    searchBar.style.display = 'flex'; 

    searchBar.classList.add("bubblegumOn");
    
    if (searchBar.classList.contains("bubblegumOff"))
      searchBar.classList.remove("bubblegumOff");
  }

  searchBar.addEventListener("animationend", 

    function() 
    {
      if (searchBar.classList.contains("bubblegumOff"))
      {
          searchBar.style.display = 'none';
      }
    }

  );

  dashBoard.addEventListener("animationend", 

    function() 
    {
      if (dashBoard.classList.contains("hideBelow"))
      {
          dashBoard.style.display = 'none';
      }
    }

  );
};
