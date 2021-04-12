
var scroll_Y = 0;

function previewDiv(i)
{ 
  targets = document.getElementsByClassName('noPreview');

  for (var k = 0; k < targets.length; k++) 
    if (i == k)
    {
      scroll_Y = window.scrollY;

      //document.getElementsByClassName('widget')[0].style.opacity = "0";
      document.getElementsByClassName('dashboard')[0].style.position = "fixed";
      document.getElementsByClassName('dashboard')[0].style.width = "84%";

      targets[i].classList.add('preview');

      document.getElementById('layer').style.display = 'block';

      document.getElementById('close').classList.add('uiButtonOn');
      document.getElementById('close').classList.remove('uiButtonOff');
    }
}

function closePreview()
{
  targets = document.getElementsByClassName('noPreview');

  for (var k = 0; k < targets.length; k++) 
      targets[k].classList.remove('preview');

    //document.getElementsByClassName('widget')[0].style.opacity = "1";
    document.getElementsByClassName('dashboard')[0].style.position = "relative";
    document.getElementsByClassName('dashboard')[0].style.width = "92%";

    window.scrollTo(0, scroll_Y);
    document.getElementById('layer').style.display = 'none';

    document.getElementById('close').classList.add('uiButtonOff');
    document.getElementById('close').classList.remove('uiButtonOn');
}

// entries = document.getElementsByTagName('tr');

// for (var k = 0; k < entries.length; k++)
//   entries[k].onmousedown = function() {previewDiv(k)};

var rowIndex = 0;

var tables = document.getElementsByClassName("dataTable");

for (var f = 0; f < tables.length; f++) 
{ 
  var rows = tables[f].getElementsByTagName("tr");

   for (var i = 0; i < rows.length; i++) 
   {
      var currentRow = tables[f].rows[i];

      var createClickHandler = function(row, rowIndex) 
      {
        return function() 
        {
          previewDiv(rowIndex);
        };
      };

      currentRow.onclick = createClickHandler(currentRow, rowIndex);
      rowIndex++;
  }

}