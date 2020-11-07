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

function swapStylesheet(sheet, name) {
   document.getElementById(name).setAttribute('href', sheet);
}

    // // if (d.getHours() >= 6 && d.getHours() < 18)
    // //     swapStylesheet("request_bright.css", "rS");
    // // else
    // //     swapStylesheet("request_dark.css", "rS");

      function previewDiv(i)
      {
        var target = document.getElementById(i);

          target.classList.add("preview");


      }

      previewDiv(0);

    //   function closePreview(i)
    //   {
    //     var target = document.getElementsByClassName('details')[i];

    //     target.classList.remove('preview');
    //     target.classList.add("noPreview");
    //   }

    //   rows = document.getElementsByTagName('tr');

    //   document.getElementsByClassName('widgetTitle')[0].onmousedown = function() {
    //       previewDetails(0)};
    //     };

    //   for (var i = rows.length - 1; i >= 0; i--) 
    //   {
    //     rows[i].onmousedown = function() {
    //       previewDetails(i)};

    //       rows[i].style.backgroundColor = "white";
        // document.body.onmousedown = function(i) {closePreview(i)};
      //}

  </script>

  </head>

  <body>
    
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
            // $timestamp = strtotime($row["Timestamp"]);
            
            // $day = date('d', $timestamp);
            // $month = date('m', $timestamp); 

            // $this_month = date('m', time()); 
            // $today = date('d', time());

            // if($row["Prefix"] != ""     &&
            //    $this_month    == $month &&
            //    $today         == $day    )

            {

              echo "<tr onclick=previewDiv(\"id{$o}\")>";
              $o++;

              echo "<td>" . $row["First_Name"] . " " . $row["Last_Name"]  . "</td>";

              echo "<td>" . $row["Workplace"] . "</td>";

              echo "<td>" . $row["Title"] . "</td>";

              echo "<td>" . $row["Timestamp"] . "</td>";

              // echo "<td>" . "Learn More >" . "</td>";            
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

              echo "<td>" . $row["Timestamp"] . "</td>";

              // echo "<td>" . "Learn More >" . "</td>";            
              echo "</tr>";
            }
          }

          ?>

        </table>
        
      </div>

    </div>

    <!-- Previews -->

    <?php

      $sql = "SELECT " . $insertSchema . ", Timestamp FROM Contacts WHERE DATE(`Timestamp`) != CURDATE() ORDER BY Timestamp DESC";

        $result = $conn->query($sql);

  if ($result->num_rows > 0) 
    while($row = $result->fetch_assoc()) 
    {
      if($row["Prefix"] != "")
      {
        echo "<div class=\"noPreview\" id=\"id{$o}\">";

        echo "<h2 class=\"previewTitle\">";

        echo $row["Prefix"] . '. ' . $row["First_Name"] . ' ' . $row["Last_Name"] . '</h2>';
        echo '<div class="previewSection">';
        echo $row["Title"] . '<br><br>';
        echo $row["Workplace"] . '<br><br>';
        echo 'LinkedIn : ' . $row["LinkedIn"] . '<br><br>';
        echo 'Current Status : ' . $row["Current_Status"] . '</div';
    
        echo '<div class="previewSection"> Notes <br><br>' . $row["Notes"] . '</div>';

        echo '<div class="previewSection">Email : ' . $row["Email"] . '<br><br>';
        echo 'Phone : ' . $row["Phone_Number"] . '<br><br>';
        echo 'Timestamp : ' . $row["Timestamp"] . '<br><br>';

        echo '</div>';
      }
   }

    ?>


  </body>