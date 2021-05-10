<?php session_start();

  include("connect.php");
  include("functions.php");

  $user_data = check_login($conn);
?>

<!DOCTYPE html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Industry Partner Database</title>


    <?php

    if (isset($_POST['theme']))
    {
      $sql = "UPDATE main SET Theme = '" . $_POST['theme']
      . "' WHERE ID = '" . $_SESSION['user_id'] ."'";

      mysqli_query($conn, $sql);
    }

    $sql = "SELECT * FROM main WHERE ID = '" . $_SESSION['user_id'] ."'";

    $result = mysqli_query($conn, $sql);

    $row = $result->fetch_assoc();
    
    if (mysqli_num_rows($result) > 0)
    {
      if (isset($row['Theme']))
      {
        // For Random Theme
        if ($row['Theme'] == 'random')
        {
           $themes = ['abyss', 
                      'citrus',
                      'bright',
                      'dark',
                      'midnight',
                      'summer',
                      'bubbles',
                      'wsu'];

          echo '<link href="' . $themes[rand(0, count($themes) - 1)] . 
          '.css" id="themeCSS" rel="stylesheet" type="text/css">';
        }


        // Usual Case
        echo '<link href="' . $row['Theme'] . 
        '.css" id="themeCSS" rel="stylesheet" type="text/css">';

      }
      else
      {
        echo '<link href="dark.css" id="themeCSS" rel="stylesheet" type="text/css">';
      }
    }
    else
    {
      echo '<link href="dark.css" id="themeCSS" rel="stylesheet" type="text/css">';
    }


    ?>





    <!-- CSS 3 EXTERNAL -->
  
    <!-- MOBILE CSS & SCRIPT START -->
    <link href="mobile_dark.css" id="mS" rel="stylesheet" type="text/css">
    
    <script type="text/javascript">
      var d = new Date();

      if (d.getHours() >= 6 && d.getHours() <= 18) 
        document.getElementById('mS').setAttribute('href', 'mobile_bright.css');
      else
        document.getElementById('mS').setAttribute('href', 'mobile_dark.css');
    </script>
    <!-- MOBILE CSS & SCRIPT END -->

    <!-- ICONS SCRIPT -->
    <script src="https://kit.fontawesome.com/a104d25a3e.js" crossorigin="anonymous"></script>


    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com"> 

    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200&family=Noto+Sans+KR:wght@100&display=swap" rel="stylesheet">

  </head>

  <body>


    <button class="uiButtonOff" id="close" onclick="closePreview()"> 
      Close <i id="closeLinkIcon" class='far fa-times-circle'></i>
    </button>

    <div id="layer"></div>


    <!-- Search Suggestions -->
    <style type="text/css">
       #searchSuggestionsDiv
       {
        max-height: 50%;
        overflow-y: scroll;
        z-index: 1;
       }
     </style>

     <div id="searchSuggestionsDiv"></div>



    
    <!-- Top Bar Arc Structure -->
    <div id="topBar">

        <form method="POST" action="test_developer.php">
        <button type="submit" class="linkB" id="homeNavButton" style="float: left">
           Industry Partner Database</button>
         </form>



         <form method="POST" action="logout.php">
           <button type="submit" class="linkB" style="float: right">
              <span class="navLabel">Sign Out</span> 
            <i class="fas fa-sign-out-alt"></i>          
           </button>
          </form>



          <button id="helpNavButton" class="linkB" style="float: right">
            <span class="navLabel">Help</span> 
            <i id="helpNavIcon" class='far fa-question-circle'></i>
          </button>

          <!-- <button class="linkB" style="float: right">
            Close <i id="closeLinkIcon" class='far fa-times-circle'></i></button> -->

          <button id="exportNavButton" class="linkB" style="float: right">
            <span class="navLabel">Export</span> 
            <i id="exportNavIcon" class='fas fa-arrow-circle-down'></i>
          </button>

          <button id="searchNavButton" class="linkB" style="float: right">
            <span class="navLabel">Search</span> 
            <i id="searchNavIcon" class='fab fa-sistrix'></i>
          </button>

            <button id="themeButton" type="submit" class="linkB" 
            style="float: right;">
              <span class="navLabel">Themes</span> 
            <i class="fas fa-paint-brush"></i>   

           </button>
    </div>


  <script type="text/javascript" src="themeScript.js"></script>


   <div id="precisionSearchLinkDiv" class="displayNone">

    <form method="POST" target="_blank" action="precisionSearch.php">
      <button id="precisionSearchButton">
        <i class='fab fa-sistrix'></i>  
        Precision Search
        <i class='fas fa-arrow-circle-right'></i>
      </button>
    </form>

    <div class="info">
      
      Precision Search enables you to search precisely by creating your own Search Conditions.

      Click the link above to search for something that involves a lot of conditions.

    </div>

  </div>

  <script type="text/javascript" src="precisionSearchDiv.js"></script>


    <!-- TOP BAR MOBILE START -->
      <!-- <script type="text/javascript" src="topBarMobileScript.js"></script> -->
      <!-- TOP BAR MOBILE END -->
      
      <!-- SEARCH BAR -->
      <form name="searchForm" action="search_developer.php" method="POST">

          <div id="searchBarDiv" class="search_div">
             
            <button class="search_Icon" id="searchButtonIcon"  type="submit">
              <i class="fa fa-search"></i>
            </button>
            
            <input type="text" name="searchBar" id="searchBar" class="search_TextField"  placeholder="Quick Search...">
            
          </div>

     </form>


     <!-- EXPORT DIV START -->

    <div id="exportDiv" class="alertDiv">

      <h1>Export everything</h1>

      <form action="exportAll_developer.php" method="POST">
          <label>Download as </label>
          <input type="fileName" id="fileName" name="fileName" placeholder="Industry Data">

          <button class="downloadButton" type="submit">
           <i id="exportNavIcon" class='fas fa-arrow-circle-down'></i>
         </button>
      </form>
      
    </div>

    <script type="text/javascript">

    var d = new Date();
    var downloadIcons = document.getElementsByClassName("downloadIcon");

    if (d.getHours() >= 6 && d.getHours() < 18)
    {  
        for (var i = downloadIcons.length - 1; i >= 0; i--) {
          downloadIcons[i].src = "download_bright.png";
        }
    }
    else
    {
        for (var i = downloadIcons.length - 1; i >= 0; i--) {
          downloadIcons[i].src = "download_dark.png";
        }    
    }

    </script>

    <!-- EXPORT DIV END -->

    <!-- EXPORT DIV FUNCTIONALITY SCRIPT START -->
    <script type="text/javascript" src="exportScript.js"></script>
    <!-- EXPORT DIV FUNCTIONALITY SCRIPT END -->

    <div class="dashboard">

      <h1 class="mobileOnly mobileTitle">Industry Partner Database</h1>

        <div class="widget" id="todaySummary">
          <h1 class="widgetTitle" id="greeting"></h1>
        <!-- TODAY PHP SCRIPT START -->

          <?php
          
          global $o;
          global $newEntriesToday;

          $newEntriesToday = False;

          require "./connect.php";
          require_once "./prerequisites.php";

          $sql = "SELECT " . $insertSchema . ", Timestamp FROM Industry_Partner_Database WHERE DATE(CONVERT_TZ(`Timestamp`,'+00:00','-05:00')) = DATE(CONVERT_TZ(CURRENT_TIMESTAMP(),'+00:00','-05:00')) ORDER BY Timestamp DESC";
          
          $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
          $newEntriesToday = True; // There are new entries for the day.

          echo '<p style="margin-left: 2.5%"><b>';
          echo $result->num_rows;

          $randomNumber = rand(0,3);

          $happyEmote = "";

          if ($randomNumber == 0)
          {
            $happyEmote = ' &nbsp<i class="fas fa-smile"></i>';
          }
          elseif ($randomNumber == 1)
          {
            $happyEmote = ' &nbsp<i class="fas fa-smile-wink"></i>';
          }
          elseif ($randomNumber == 2)
          {
            $happyEmote = ' &nbsp<i class="far fa-laugh-wink"></i>';
          }
          else
          {
            $happyEmote = ' &nbsp<i class="fas fa-smile-beam"></i>';           
          }


          if ($result->num_rows == 1) 
            echo '</b> new entry today.' . $happyEmote . '</p>';
          else
            echo '</b> new entries today.' . $happyEmote . '</p>';
          
          echo '<h1 class="widgetTitle">Today\'s Entries' . 
               '&nbsp <i class="fas fa-user-plus"></i></h1>';

          echo printRecords($sql);
        }
        else // No entries for today
        {
          $randomNumber = rand(0,2);

          if ($randomNumber == 0) // random cry or sad face
          {
            $sadEmote = '<i class="fas fa-frown"></i>';
          }
          elseif ($randomNumber == 1)
          {
            $sadEmote = '<i class="fas fa-sad-tear"></i>';
          }
          else
          {
            $sadEmote = '<i class="fas fa-frown-open"></i>';
          }

          echo '<p style="margin-left: 2.5%">No new entries yet, today.' . 
          '&nbsp ' . $sadEmote . '</p>';
        }

        ?>

      <!-- TODAY PHP SCRIPT END -->
      </div>

      <!-- GREETING SCRIPT START -->
        <script type="text/javascript">
          
          d = new Date();

          if (d.getHours() >= 18)
          {
            document.getElementById('greeting').innerHTML = "Good Evening!" + 
            " &nbsp<i class='fas fa-moon'></i>";
          }
          else if (d.getHours() >= 12)
          {
            document.getElementById('greeting').innerHTML = "Good Afternoon!" + 
            " &nbsp<i class='fas fa-sun'></i>";
          }
          else if (d.getHours() >= 3)
          {
            document.getElementById('greeting').innerHTML = "Good Morning!" + 
            " &nbsp<i class='fas fa-sun'></i>";
          }
          else
          {
            document.getElementById('greeting').innerHTML = "Good Night!" + 
            " &nbsp<i class='fas fa-moon'></i>";
          }

        </script>
        <!-- GREETING SCRIPT END -->


        <!-- DAILY SUGGESTIONS START -->
        <div class="widget" id="dailySuggestionsDiv"> 
          
          <h1 class="widgetTitle"> Daily Suggestions &nbsp<i class="fas fa-lightbulb"></i></h1>

        </div>

        <script type="text/javascript" src="dailySuggestions.js"></script>
        <!-- DAILY SUGGESTIONS END -->






        <!-- OLDER ENTRIES -->

        <?php

          $sql = "SELECT " . $insertSchema . ", Timestamp FROM Industry_Partner_Database WHERE DATE(CONVERT_TZ(`Timestamp`,'+00:00','-05:00')) != DATE(CONVERT_TZ(CURRENT_TIMESTAMP(),'+00:00','-05:00')) ORDER BY Timestamp DESC";

          $result = $conn->query($sql);

          if ($result->num_rows > 0) 
          {
            echo "<div class='widget'>";
            echo '<h1 class="widgetTitle">';

            if ($newEntriesToday) 
              echo 'Older Entries &nbsp<i class="far fa-calendar-alt"></i>';
            else
              echo "All Entries &nbsp<i class='far fa-list-alt'></i>";

            echo "</h1>";

            echo printRecords($sql);

            echo "</div>";
          }
        ?>    

        


        <?php

        if(isset($_SESSION['admin']))
        {
          if($_SESSION['admin'] == 4)
          {
            echo 

            '<div class="widget">

            <h1 class="widgetTitle">Admin Panel &nbsp<i class="fas fa-users-cog"></i></h1>

              <form action="account_setting.php" method="POST">
              <button class="linkB" style="margin-left: 2.5%">
              <i class="fas fa-wrench"></i>&nbsp Change Password</button>
              </form>
              <br>
              <form action="admin_panel.php" method="POST">
              <button class="linkB" style="margin-left: 2.5%">
              <i class="fas fa-wrench"></i>&nbsp Add or Remove Users</button>
              </form>
              <br>

            </div>';
          }
          else
          {
            echo 

            '<div class="widget">

            <h1 class="widgetTitle">Account Settings &nbsp<i class="fas fa-users-cog"></i></h1>

              <form action="account_setting.php" method="POST">
              <button class="linkB" style="margin-left: 2.5%">
              <i class="fas fa-wrench"></i>&nbsp Change Password</button>
              </form>
              <br>

            </div>';
          }
        }


        ?>


      <div class="widget">

        <h1 class="widgetTitle">Information &nbsp<i class='fas fa-info-circle'></i></h1>

          <?php

          $sql = "SELECT * FROM Industry_Partner_Database";

          $result = $conn->query($sql);

          echo "<p style='margin-left: 2.5%'>Total number of records = <b>";
          echo $result->num_rows;
          echo "</b>";

          ?>

          <p style='margin-left: 2.5%'>Version <b>4.7 RS</b></p>
          <p style='margin-left: 2.5%' id="copyrightInfo"></p>
          
          <script type="text/javascript" src="copyrightScript.js"></script>

      </div>

    </div>


    <!-- Previews -->
    <?php

      echo printRecordPreviews(

        "SELECT " . $insertSchema . ", Timestamp FROM Industry_Partner_Database WHERE DATE(CONVERT_TZ(`Timestamp`,'+00:00','-05:00')) = DATE(CONVERT_TZ(CURRENT_TIMESTAMP(),'+00:00','-05:00')) ORDER BY Timestamp DESC"

      );

      echo printRecordPreviews(

        "SELECT " . $insertSchema . ", Timestamp FROM Industry_Partner_Database WHERE DATE(CONVERT_TZ(`Timestamp`,'+00:00','-05:00')) != DATE(CONVERT_TZ(CURRENT_TIMESTAMP(),'+00:00','-05:00')) ORDER BY Timestamp DESC"

        );

    ?>





    <!-- PREVIEW SCRIPT -->
    <script type="text/javascript" src="previewScript.js"></script>
    

    <!-- SEARCH SCRIPT -->
    <script type="text/javascript" src="searchBar_Graphic.js"></script>
    <script type="text/javascript" src="searchBar_Functionality.js"></script>


    <!-- HELP DIV START -->
    <div id="helpDiv"></div>
    <!-- HELP DIV END -->

    <!-- HELP DIV FUNCTIONALITY SCRIPT START -->
    <script type="text/javascript" src="helpScript.js"></script>
    <!-- HELP DIV FUNCTIONALITY SCRIPT END -->

  </body>
  
  </html>


  <?php

    $sql = "SELECT * FROM main WHERE ID = '" . $_SESSION['user_id'] ."'";

    $result = mysqli_query($conn, $sql);

    $row = $result->fetch_assoc();
    
    if (mysqli_num_rows($result) > 0)
    {
      if (isset($row['Theme']) && $row['Theme'] == 'dark')
      {
        echo '<script src="wallpaper.js"></script>';
      }
      elseif (isset($row['Theme']) && $row['Theme'] == 'wsu')
      {
        echo '<script type="text/javascript">

                document.body.style.backgroundImage = "url(\'wsu" + 
                (Math.floor(Math.random() * 6) + 1) + ".jpg\')";
                
                document.body.style.backgroundSize = "auto";
              </script>';
      }
      elseif (isset($row['Theme']) && $row['Theme'] == 'dynamic')
      {
        echo '<script src="dynamicTheme.js"></script>';
      }
      // elseif (isset($row['Theme']) && $row['Theme'] == 'random')
      // {
      //   echo '<script src="randomTheme.js"></script>';
      // }
    }
    

    ?>
  