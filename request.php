<!DOCTYPE html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Industry Partner Database</title>

    <!-- CSS 3 EXTERNAL -->
    <link href="request_dark.css" id="rS" rel="stylesheet" type="text/css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

    <!-- JavaScript (INTERNAL) -->
  <script>
    var d = new Date();

    function swapStylesheet(sheet, name) 
    {
        document.getElementById(name).setAttribute('href', sheet);
    }

    if (d.getHours() >= 6 && d.getHours() < 18)
        swapStylesheet("request_bright.css", "rS");
    else
        swapStylesheet("request_dark.css", "rS");

      var scroll_Y = 0;

      function previewDiv(i)
      { 
        targets = document.getElementsByClassName('noPreview');

        for (var k = 0; k < targets.length; k++) 
          if (i == k)
          {
            scroll_Y = window.scrollY;

            document.getElementsByClassName('widget')[0].style.opacity = "0";
            document.getElementsByClassName('dashboard')[0].style.position = "fixed";
            document.getElementsByClassName('dashboard')[0].style.width = "84%";

            targets[i].classList.add('preview');

            document.getElementById('close').classList.add('uiButtonOn');
            document.getElementById('close').classList.remove('uiButtonOff');
          }
      }

      function closePreview()
      {
        targets = document.getElementsByClassName('noPreview');

        for (var k = 0; k < targets.length; k++) 
            targets[k].classList.remove('preview');

          document.getElementsByClassName('widget')[0].style.opacity = "1";
          document.getElementsByClassName('dashboard')[0].style.position = "relative";
          document.getElementsByClassName('dashboard')[0].style.width = "92%";

          window.scrollTo(0, scroll_Y);

          document.getElementById('close').classList.add('uiButtonOff');
          document.getElementById('close').classList.remove('uiButtonOn');
      }

  </script>

  </head>

  <body>

    <button class="uiButtonOff" id="close" onclick="closePreview()">(X)</button>
    
    <div id="topBar">Industry Partner Database</div>

    <div class="dashboard">

      <div class="widget">

        <h1 class="widgetTitle">Today</h1>

        <table class="dataTable">

          <?php
          global $o;
          require "./connect.php";
          require_once "./global.php";

          $sql = "SELECT " . $insertSchema . ", Timestamp FROM Contacts WHERE DATE(`Timestamp`) = CURDATE() ORDER BY Timestamp DESC";

          $result = $conn->query($sql);
          $o = 0;

        if ($result->num_rows > 0) 
          while($row = $result->fetch_assoc()) 
          {

            {
              echo "<td>" . $row["First_Name"] . " " . $row["Last_Name"]  . "</td>";

              echo "<td>" . $row["Workplace"] . "</td>";

              echo "<td>" . $row["Title"] . "</td>";
              echo "<td><button class=\"uiButton\"  onclick=previewDiv({$o})>Details ></button></td>";
               $o++;
     
              echo "</tr>";
            }
          }

          ?>

        </table>
        
      </div>

      <div class="widget">

        <h1 class="widgetTitle">Older</h1>

        <table class="dataTable">

          <?php

          $sql = "SELECT " . $insertSchema . ", Timestamp FROM Contacts WHERE DATE(`Timestamp`) != CURDATE() ORDER BY Timestamp DESC";

          $result = $conn->query($sql);

          if ($result->num_rows > 0) 
          while($row = $result->fetch_assoc()) 
          {
            if($row["Prefix"] != "")
            {
              echo "<td>" . $row["First_Name"] . " " . $row["Last_Name"]  . "</td>";

              echo "<td>" . $row["Workplace"] . "</td>";

              echo "<td>" . $row["Title"] . "</td>";
              echo "<td><button class=\"uiButton\"  onclick=previewDiv({$o})>Details ></button></td>";
               $o++;
    
              echo "</tr>";
            }
          }

          ?>

        </table>
        
      </div>

    </div>

    <!-- Previews -->

    <?php

      $sql = "SELECT " . $insertSchema . ", Timestamp FROM Contacts WHERE DATE(`Timestamp`) = CURDATE() ORDER BY Timestamp DESC";

        $result = $conn->query($sql);

  if ($result->num_rows > 0) 
    while($row = $result->fetch_assoc()) 
    {
      if($row["Prefix"] != "")
      {
        echo "<div class=\"noPreview\" pairingNumber=\"{$o}\">";

        echo "<h2 class=\"previewTitle\">";
        echo $row["Prefix"] . '. ' . $row["First_Name"] . ' ' . $row["Last_Name"] . '</h2>';

        echo '<div class="previewSection">';
        echo $row["Title"] . '<br><br>';
        echo $row["Workplace"] . '<br><br>';
        echo 'LinkedIn : ' . $row["LinkedIn"] . '<br><br>';
        echo 'Current Status : ' . $row["Current_Status"] . '</div>';
    
        echo '<div class="previewSection"> Notes <br><br>' . $row["Notes"] . '</div>';

        echo '<div class="previewSection">Email : ' . $row["Email"] . '<br><br>';
        echo 'Phone : ' . $row["Phone_Number"] . '<br><br>';
        echo 'Timestamp : ' . $row["Timestamp"];

        echo '</div></div>';
      }
   }

    ?>

    <?php

      $sql = "SELECT " . $insertSchema . ", Timestamp FROM Contacts WHERE DATE(`Timestamp`) != CURDATE() ORDER BY Timestamp DESC";

        $result = $conn->query($sql);
        $o = 0;

  if ($result->num_rows > 0) 
    while($row = $result->fetch_assoc()) 
    {
      if($row["Prefix"] != "")
      {
        echo "<div class=\"noPreview\" pairingNumber=\"{$o}\">";

        echo "<h2 class=\"previewTitle\">";
        echo $row["Prefix"] . '. ' . $row["First_Name"] . ' ' . $row["Last_Name"] . '</h2>';

        echo '<div class="previewSection">';
        echo $row["Title"] . '<br><br>';
        echo $row["Workplace"] . '<br><br>';
        echo 'LinkedIn : ' . $row["LinkedIn"] . '<br><br>';
        echo 'Current Status : ' . $row["Current_Status"] . '</div>';
    
        echo '<div class="previewSection"> Notes <br><br>' . $row["Notes"] . '</div>';

        echo '<div class="previewSection">Email : ' . $row["Email"] . '<br><br>';
        echo 'Phone : ' . $row["Phone_Number"] . '<br><br>';
        echo 'Timestamp : ' . $row["Timestamp"];

        echo '</div></div>';
      }
   }

    ?>


  </body>