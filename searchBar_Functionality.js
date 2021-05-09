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

    // if (searchNavIcon.classList.contains("fa-times-circle")
    //   && searchNavIcon.classList.contains("far"))
    // {
    //   searchNavIcon.classList.remove("fa-times-circle");
    //   searchNavIcon.classList.remove("far");
    //   searchNavIcon.classList.add("fab");
    //   searchNavIcon.classList.add("fa-sistrix");
    //   searchNavButton.classList.remove("linkB_active");
    // }

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

    // searchNavIcon.classList.remove("fa-sistrix");
    // searchNavIcon.classList.remove("fab");
    // searchNavIcon.classList.add("far");
    // searchNavIcon.classList.add("fa-times-circle");
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
      else
      {
        //document.getElementById("searchBar").focus();
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
