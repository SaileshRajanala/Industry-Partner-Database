
// var d = new Date();
    
// document.getElementById('searchBar').onfocus = function() 
// {
//   if (d.getHours() >= 6 && d.getHours() < 18)
//   {  
//     document.getElementById("searchBarDiv").style.backgroundColor = 'black';
//     //document.getElementById("searchBarDiv").style.boxShadow = "none";
//     // document.getElementById("searchButtonIcon").style.boxShadow = "none";
//   }
//   else
//   {
//     document.getElementById("searchBarDiv").style.backgroundColor = 'white';
//   }

//   document.getElementById("searchBarDiv").style.padding = '0.7%';
//   document.getElementById("searchBarDiv").style.paddingLeft = '1.3%';
//   document.getElementById("searchBarDiv").style.margin = '-0.7%';
//   document.getElementById("searchBarDiv").style.paddingRight = '0.1%';
// };

// // CrossBrowserCompatible Method for FocusOut below
// document.getElementById('searchBar').addEventListener("focusout", onFocusOff);

// function onFocusOff() 
// {
//   if (d.getHours() >= 6 && d.getHours() < 18)
//   {  
//     document.getElementById("searchBarDiv").style.backgroundColor = 'white';
//     //document.getElementById("searchBarDiv").style.boxShadow = "0px 13px 26px rgb(200,200,200)";
//     // document.getElementById("searchButtonIcon").style.boxShadow = "0px 0px 13px rgb(200,200,200)";
//   }
//   else
//   {
//     document.getElementById("searchBarDiv").style.backgroundColor = 'rgb(25,25,25)';
//   }
//   document.getElementById("searchBarDiv").style.padding = '0%';
//   document.getElementById("searchBarDiv").style.margin = '0%';
// };


function id_(_id)
{
  return document.getElementById(_id);
}

id_('searchBar').addEventListener('focusin', function()
{
  id_('searchBarDiv').classList.add('searchBarDivFocusIn');
  id_('searchButtonIcon').classList.add('searchButtonIconFocusIn');
  id_('searchBar').classList.add('searchBarFocusIn');
});


id_('searchBar').addEventListener('focusout', function()
{
  id_('searchBar').classList.remove('searchBarFocusIn');
  id_('searchButtonIcon').classList.remove('searchButtonIconFocusIn');
  id_('searchBarDiv').classList.remove('searchBarDivFocusIn');
});


























