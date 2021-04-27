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
        echo '<link href="' . $row['Theme'] . 
        '.css" id="rS" rel="stylesheet" type="text/css">';
      }
      else
      {
        echo '<link href="dark.css" id="rS" rel="stylesheet" type="text/css">';
      }
    }
    else
    {
      echo '<link href="dark.css" id="rS" rel="stylesheet" type="text/css">';
    }

    ?>





    <!-- CSS 3 EXTERNAL -->
   <!--  <link href="request_dark.css" id="rS" rel="stylesheet" type="text/css"> -->

    <!-- <link href="test_dark.css" id="tS" rel="stylesheet" type="text/css">
    <link href="export_dark.css" id="eS" rel="stylesheet" type="text/css">
    <link href="help_dark.css" id="hS" rel="stylesheet" type="text/css"> -->
    <link href="mobile_dark.css" id="mS" rel="stylesheet" type="text/css">

    <!-- THEMES CSSS -->
    <!-- <link href="themes.css" id="thS" rel="stylesheet" type="text/css"> -->

    <!-- CSS FOR ICONS -->
<!--     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 -->
    <!-- ICONS SCRIPT -->
    <script src="https://kit.fontawesome.com/a104d25a3e.js" crossorigin="anonymous"></script>


    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com"> 

    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200&family=Noto+Sans+KR:wght@100&display=swap" rel="stylesheet">

    <!-- JavaScript (INTERNAL) -->
    <!-- <script>

    var d = new Date();

    function swapStylesheet(sheet, name) 
    {
        document.getElementById(name).setAttribute('href', sheet);
    }

    if (d.getHours() >= 6 && d.getHours() < 18)
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

  </script> -->

  </head>

  <body>


    <button class="uiButtonOff" id="close" onclick="closePreview()"> 
      Close <i id="closeLinkIcon" class='far fa-times-circle'></i>
    </button>

    <div id="layer"></div>
    
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

            <button id="themeButton" type="submit" class="linkB" style="float: right">
              <span class="navLabel">Themes</span> 
            <i class="fas fa-paint-brush"></i>   

           </button>
    </div>


  <script type="text/javascript" src="themeScript.js"></script>


   <div id="precisionSearchLinkDiv" class="displayNone">

    <form method="POST" target="_blank" action="precisionSearch.html">
      <button id="precisionSearchButton">
        <i class='fab fa-sistrix'></i>  
        Precision Search
        <i class='fas fa-arrow-circle-right'></i>
      </button>
    </form>

    <div class="info">
      
      Precision Search enables you to search precisely by creating your own Search Conditions. <br><br>

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
            
            <input type="text" name="searchBar" id="searchBar" class="search_TextField"  placeholder="Search...">
            
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

        <div class="widget" id="todaySummary">
          <h1 class="widgetTitle" id="greeting"></h1>
        <!-- TODAY PHP SCRIPT START -->

          <?php
          
          global $o;
          global $newEntriesToday;

          $newEntriesToday = False;

          require "./connect.php";
          require_once "./global.php";
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
          <p style='margin-left: 2.5%'>Copyright <i class='far fa-copyright'></i> 2020-2021. <b>Team Lotus.</b> </p>

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

    <div id="helpDiv">

      <h1>Help?</h1>

      <div class="helpArticle">

        <h2>Navigating Around < > </h2>
        
        <ul>
          <li>You can always return <b>home</b> by clicking the <br><br>
            <b>"Industry Partner Database"</b> <br><br> 
            link on the top middle of the screen
          </li>
            <br>

          <li>
            You can click on a record to access its full details
            <br>
            
            <br>
            You can click the <b>(X)</b> button to dismiss a record's preview
          </li>
          <br>

          <li>
            You can use the <b>Search Icon</b> on the top right corner to search for records.
            <br><br>
            <img class="helpSearchIcon" src="search_bright.png" width="35px">
          </li>
          <br>
          
          <li>
            You can use the <b>Download Icon</b> on the top left corner to export data.
            <br><br>
            <img class="helpDownloadIcon" src="download_bright.png" width="35px">
          </li>
          <br>

          <li>
            You can click the <b>Close Icon</b> to dismis either Search or Export operations.
            <br><br>
            <img class="helpCloseIcon" src="close_bright.png" width="35px">
          </li>
          <br>
        </ul>

      </div>

      <div class="helpArticle">

        <h2>Search?</h2>
        
        <p></p>

        <ul>
          <li>To start a search, click the <b>Search Icon</b> on the top right corner<br><br>
            <img class="helpSearchIcon" src="search_bright.png" width="35px">
          </li>
          <br>

          <li>
            To dismiss the search operation, click the <b>Close Icon</b>
            <br><br>
            <img class="helpCloseIcon" src="close_bright.png" width="35px">
          </li>
          <br>

          <li>
            To search for something, type it in the <b>Search Bar</b> <br><br> 
            Click the <b>Search Icon</b> <br><b>
            or </b><br> 
            Press the <b>"Enter"</b> key
          </li>
          <br>

          <li>To go back and view all records, click the <br><br>
            <b>"Industry Partner Database"</b> <br><br> 
            link on the top middle of the screen
          </li>
          <br>

        </ul>

      </div>

      <div class="helpArticle">

        <h2>Export all records?</h2>

        <p>
          You can download data 
          as an Excel Spreadsheet 
          <br><br> 
          Format : <b>.xls</b>
        </p>

        <ul>
          <li>
          To export all data,<br> click the <b>Downlaod Icon</b> on the top left corner<br><br>
            <img class="helpDownloadIcon" src="download_bright.png" width="35px">
          </li>
          <br>

          <li>
            To dismiss the export operation,<br> click the <b>Close Icon</b>
            <br><br>
            <img class="helpCloseIcon" src="close_bright.png" width="35px">
          </li>
          <br>

          <li>
           By default, the downloaded file is named as 
           <br><br>
           <b>"Industry Data.xls"</b>
           <br><br>
           You can rename it by typing the desired file name in the text box
          </li>
          <br>

          <li>
            Click the <b>Downlaod Icon</b> to download the file<br><br>
            <img class="helpDownloadIcon" src="download_bright.png" width="35px">
          </li>
          <br>

        </ul>

      </div>

      <div class="helpArticle">

        <h2>Export only Search Results?</h2>
        
        <p>
          You can download data 
          as an Excel Spreadsheet 
          <br><br> 
          Format : <b>.xls</b>
        </p>

        <ul>

          <li>
          To export only the search data, <br> you need to perform a search by clicking the <b>Search Icon</b> on the top right corner<br><br>
            <img class="helpSearchIcon" src="search_bright.png" width="35px">
          </li>
          <br>

          <li>
           To export the search resutls,<br> click the <b>Downlaod Icon</b> on the top left corner<br><br>
            <img class="helpDownloadIcon" src="download_bright.png" width="35px">
          </li>
          <br>

          <li>
            To dismiss the export operation,<br> click the <b>Close Icon</b>
            <br><br>
            <img class="helpCloseIcon" src="close_bright.png" width="35px">
          </li>
          <br>

          <li>
           To rename the download file, <br>type the desired file name in the text box
          </li>
          <br>

          <li>
            Click the <b>Downlaod Icon</b> to download the file<br><br>
            <img class="helpDownloadIcon" src="download_bright.png" width="35px">
          </li>
          <br>

        </ul>

      </div>

      <div class="helpArticle" id="fontSizeHelpArticle">

        <h2>Font Size?</h2>

        <ul>
          <li>
           On a Mac, 
           <br><br>
           Use "Command" <b>+</b> "+" to Increase Font Size.
           <br><br>
           Use "Command" <b>+</b> "-" to Decrease Font Size.
          </li>
          <br>

          <li>
           On Windows, 
           <br><br>
           Use "CTRL" <b>+</b> "+" to Increase Font Size.
           <br><br>
           Use "CTRL" <b>+</b> "-" to Decrease Font Size.
           <br><br>
           You can also hold <b>"CTRL"</b> and scroll the <b>"Mouse Wheel"</b> to adjust the Font Size.
          </li>
          <br>
        </ul>

      </div>

      <div class="helpArticle" id="displayHelpArticle">

        <h2>Display?</h2>
        <h2>Can't differentiate between elements?</h2>
        
        <p>Please make sure the <b>Contrast</b> Setting of your display is around 50%</p>

      </div>

      <div class="helpArticle">

        <h2>Dismiss Help?</h2>

        To dismiss Help, click on <span id="helpHelpButton" style="padding: 2.5%;padding-top:  1%;padding-bottom: 1%;margin: 1%;color: white;background-color: darkred;border-radius: 0.5em;font-size: x-large;">X</span> button on the top left of the screen
        <br><br>

      </div>

      <div class="helpArticle">

        <h2>Need more help?</h2>

        Contact Support 
        <br><br>
        <a class="helpEmailLink" href="mailto:support@lotus.com">Team Lotus</a>
        <br><br>

      </div>

    </div>

    <!-- HELP DIV END -->

    <!-- HELP DIV ICON SWITCH SCRIPT START -->

    <script type="text/javascript">
    
    var d = new Date();

    searchIcons = document.getElementsByClassName("helpSearchIcon");
    exportIcons = document.getElementsByClassName("helpDownloadIcon");
    closeIcons = document.getElementsByClassName("helpCloseIcon");

    if (d.getHours() >= 6 && d.getHours() < 18)
    {  
        for (var i = searchIcons.length - 1; i >= 0; i--) {
          searchIcons[i].src = "search_bright.png";
        }

        for (var i = closeIcons.length - 1; i >= 0; i--) {
          closeIcons[i].src = "close_bright.png";
        }

        for (var i = exportIcons.length - 1; i >= 0; i--) {
          exportIcons[i].src = "download_bright.png";
        }
        //document.getElementById('helpHelpButton').style.backgroundColor = "red";
    }
    else
    {
        for (var i = searchIcons.length - 1; i >= 0; i--) {
          searchIcons[i].src = "search_dark.png";
        }

        for (var i = closeIcons.length - 1; i >= 0; i--) {
          closeIcons[i].src = "close_dark.png";
        }

        for (var i = exportIcons.length - 1; i >= 0; i--) {
          exportIcons[i].src = "download_dark.png";
        }

        //document.getElementById('helpButton').style.color = "white";
    }

    </script>

    <!-- HELP DIV ICON SWITCH SCRIPT END -->

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

              </script>';
      }
      elseif (isset($row['Theme']) && $row['Theme'] == 'dynamic')
      {
        echo '<script src="dynamicTheme.js"></script>';
      }
    }
    

    ?>
  