<?php session_start();

  include("connect.php");
  include("functions.php");

  $user_data = check_login($conn);
?>

<!DOCTYPE html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Search Results</title>

    <!-- CSS 3 EXTERNAL -->
    <!-- <link href="request_dark.css" id="rS" rel="stylesheet" type="text/css">
    <link href="test_dark.css" id="tS" rel="stylesheet" type="text/css">
    <link href="export_dark.css" id="eS" rel="stylesheet" type="text/css">
    <link href="help_dark.css" id="hS" rel="stylesheet" type="text/css"> -->


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
    

    <link href="mobile_dark.css" id="mS" rel="stylesheet" type="text/css">

    <!-- CSS FOR ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

      <!-- <img class="icon" src="lotus_dark.png" style="left: 4%;width: 2.5em;"> -->
            
           <form method="POST" action="test_developer.php">
          <!-- <button type="submit" class="linkB" id="homeNavButton" style="float: left">
           Industry Partner Database</button> -->

           <button type="submit" class="linkB" id="homeNavButton" style="float: left">
            <i class="fas fa-chevron-circle-left"></i> Back </button>
         </form>

          <form method="POST" action="logout.php">
           <button type="submit" class="linkB" style="float: right">
              <span class="navLabel">Sign Out</span> 
            <i class="fas fa-sign-out-alt"></i>          
           </button>
          </form>

          <button id="helpNavButton" class="linkB" style="float: right">
            <span class="navLabel">Help</span> <i id="helpNavIcon" class='far fa-question-circle'></i></button>

          <!-- <button class="linkB" style="float: right">
            Close <i id="closeLinkIcon" class='far fa-times-circle'></i></button> -->

          <button id="exportNavButton" class="linkB" style="float: right;display: none">
            <span class="navLabel">Export</span> <i id="exportNavIcon" class='fas fa-arrow-circle-down'></i></button>


          <!-- <button id="searchNavButton" class="linkB" style="float: right">
            <span class="navLabel">Search</span> <i id="searchNavIcon" class='fab fa-sistrix'></i></button> -->

      </div>

     <form name="searchForm" action="" method="post"> 

          <div id="searchBarDiv" class="search_div">
             
            <button class="search_Icon" id="searchButtonIcon"  type="submit">
              <i class="fa fa-search"></i>
            </button>
            
            <input type="text" name="searchBar" id="searchBar" class="search_TextField"  placeholder="Search..."
            value="<?php if (isset($_POST["searchBar"])) echo $_POST['searchBar'] ?>">
          
          </div>

     </form>



     <!-- EXPORT DIV START -->

    <div id="exportDiv" class="alertDiv">

      <h1>Export Search Results for "<?php if (isset($_POST["searchBar"])) echo $_POST['searchBar'] ?>"</h1>

      <form action="exportSearch.php" method="POST">
          <label>Download as </label>
          <input type="fileName" id="fileName" name="fileName" placeholder="Industry Data">
          <input style="display: none;" type="text" name="searchContent" id="searchContent">
          <button class="downloadButton" type="submit">
           <i id="exportNavIcon" class='fas fa-arrow-circle-down'></i>
         </button>
      </form>

      <!-- <form action="exportAll.php" method="POST">
          <label>or Export all records ?</label>
          <button class="downloadButton" type="submit"><img class=downloadIcon 
            id="downloadImg" src="download_bright.png"></button>
      </form> -->
      
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

    <!-- SEARCH EXPORT SCRIPT START -->

    <script type="text/javascript">

    var x = document.getElementById("searchBar");
    var y = document.getElementById("searchContent");
    var z = document.getElementById("fileName");
    
    function myFunction() 
    {
      y.value = x.value;
      z.value = x.value;
    }

    myFunction(); // when page is ready

    document.getElementById("searchBar").addEventListener("keyup", myFunction);

    </script>

    <!-- SEARCH EXPORT SCRIPT END -->

    <!-- EXPORT DIV FUNCTIONALITY SCRIPT START -->
    <script type="text/javascript" src="exportScript.js"></script>
    <!-- EXPORT DIV FUNCTIONALITY SCRIPT END -->

     <div class="dashboard"></div>
    <!-- SEARCH SECTION -->

     <div  id="searchResultsDiv">
        
        <div class="widget">

          <?php
          require "./connect.php";
          require_once "./global.php";
          require_once "./prerequisites.php";

          global $searchBarTextValue, $keyWords, $previewsQueries;

          $previewsQueries = [];
          
          // UNIVERSAL SEARCH
          if (isset($_POST["searchBar"]))
          {
            $searchBarTextValue = htmlentities($_POST["searchBar"], ENT_QUOTES);

            // Makes sure only one whitespace between words
            $searchBarTextValue = preg_replace('/\s+/', ' ', $searchBarTextValue);

            // Removes spaces at the front and back
            $searchBarTextValue = trim($searchBarTextValue);

            $keyWords = explode(' ', $searchBarTextValue);

            // Searches only unique keywords
             $keyWords = array_map('strtolower',$keyWords);
             $keyWords = array_unique($keyWords);
             $keyWords = array_values($keyWords);

            global $sql;
            $sql = "

          SELECT DISTINCT " . $insertSchema . ", Timestamp FROM Industry_Partner_Database WHERE False "; 

          // for ($i = 0; $i < count($keyWords); $i++)
          // {
          //   // Universal Search Results
          //   $sql .= getSearchConditionsFor($keyWords[$i]);
          // }

          $sql .= getSearchConditionsFor($searchBarTextValue);

          $sql .= " ORDER BY Timestamp DESC ";

          $result = $conn->query($sql);

          if ($result) 
          {
            echo "<div class=\"filterSearchResult primaryFilterDiv\">";


            if ($result->num_rows == 1) 
            {
              echo '<h2 class="widgetTitle">

              <form method="post" action="exportSearch_developer.php">

              <button type="submit" name="keyword" value="'. $searchBarTextValue . '" 
              class="filterSearchExportLink">
                ' . $result->num_rows . ' Search Result for ' . $searchBarTextValue . '
                 &nbsp<i class="fas fa-arrow-circle-right"></i>
              </button>
              </form>

              </h2>';
            }
            elseif ($result->num_rows != 0) 
            {
              echo '<h2 class="widgetTitle">

              <form method="post" action="exportSearch_developer.php">

              <button type="submit" name="keyword" value="'. $searchBarTextValue . '" 
              class="filterSearchExportLink">
                ' . $result->num_rows . ' Search Results for ' . $searchBarTextValue . '
                 &nbsp<i class="fas fa-arrow-circle-right"></i>
              </button>
              </form>

              </h2>';
            }
            else
            {
              echo '<h2 class="widgetTitle">' . $result->num_rows . 
              ' Search Results for "' . $searchBarTextValue . '"</h2>';
            }

            // if ($result->num_rows == 1) 
            //   echo '<h2 class="widgetTitle"> 1 Search Result for "' . 
            //   $searchBarTextValue . '"</h2>';
            // else
            //   echo '<h2 class="widgetTitle">' . $result->num_rows . 
            //   ' Search Results for "' . $searchBarTextValue . '"</h2>';

            echo printRecords($sql);
            array_push($previewsQueries, $sql);

            // if ($result->num_rows != 0) 
            //   echo exportSearchLink($searchBarTextValue);

            echo '</div>';



            if ($result->num_rows == 0) 
            // Prints Filtered Content
            if (count($keyWords) > 1 || 
               (count($keyWords) == 1 && $searchBarTextValue != $keyWords[0]))
            for ($i = 0; $i < count($keyWords); $i++)
            {

              // GENERATE SQL SEARCH QUERY
              $keyword_sql = "

              SELECT DISTINCT " . $insertSchema . 
              ", Timestamp FROM Industry_Partner_Database WHERE False "; 

              $keyword_sql .= getSearchConditionsFor($keyWords[$i]);

              $keyword_sql .= " ORDER BY Timestamp DESC ";

              // echo "<br>";echo "<br>";echo "<br>";
              // echo "KEYWORD SQL <br><br>" . $keyword_sql;
              // echo "<br>";echo "<br>";echo "<br>";

              $result = $conn->query($keyword_sql);

              echo "<div class=\"filterSearchResult\">";



              if ($result->num_rows == 1) 
              {
                echo '<h2 class="widgetTitle">

                <form method="post" action="exportSearch_developer.php">

                <button type="submit" name="keyword" value="'. $keyWords[$i] . '" 
                class="filterSearchExportLink">
                  ' . $result->num_rows . ' Search Result for "' . $keyWords[$i] . '"
                   &nbsp<i class="fas fa-arrow-circle-right"></i>
                </button>
                </form>

                </h2>';
              }
              elseif ($result->num_rows != 0) 
              {
                echo '<h2 class="widgetTitle">

                <form method="post" action="exportSearch_developer.php">

                <button type="submit" name="keyword" value="'. $keyWords[$i] . '" 
                class="filterSearchExportLink">
                  ' . $result->num_rows . ' Search Results for "' . $keyWords[$i] . '"
                   &nbsp<i class="fas fa-arrow-circle-right"></i>
                </button>
                </form>

                </h2>';
              }
              else
              {
                echo '<h2 class="widgetTitle">' . $result->num_rows . 
                ' Search Results for "' . $keyWords[$i] . '"</h2>';
              }


              // if ($result->num_rows == 1) 
              //   echo '<h2 class="widgetTitle"> 1 Search Result for "' . 
              //   $keyWords[$i] . '"</h2>';
              // else
              //   echo '<h2 class="widgetTitle">' . $result->num_rows . 
              //   ' Search Results for "' . $keyWords[$i] . '"</h2>';


              echo printRecords($keyword_sql);
              array_push($previewsQueries, $keyword_sql);

              // if ($result->num_rows != 0) 
              //   echo exportSearchLink($keyWords[$i]);

              echo '</div>';
            }


          }
          else
            echo '<h2 class="widgetTitle">Sorry, no results found for "' . 
            $searchBarTextValue . '"</h2>';
          }


          ?>

      </div>

       </div>

      <!-- RESULTS PREVIEW -->

      <?php

      // if (isset($_POST["searchBar"]))
      // {
      //  echo printRecordPreviews($sql); 
      // }

      if (count($previewsQueries) > 0) 
      {
        for ($i = 0; $i < count($previewsQueries); $i++)
        {
          echo printRecordPreviews($previewsQueries[$i]); 
        }
      }

      ?>

  <!-- Preview SCRIPT -->
  <script type="text/javascript" src="previewScript.js"></script>
    
  <!-- SEARCH BAR GRAPHIC SCRIPT -->
  <script type="text/javascript" src="searchBar_Graphic.js"></script>


 <script type="text/javascript">
   document.body.style.animation = 'none';
   document.getElementById('topBar').style.animation = 'none';
   document.getElementById('searchResultsDiv').style.animationName = 'toplaunch';
   document.getElementById('searchResultsDiv').style.animationDelay = '0s';
   document.getElementById('searchResultsDiv').style.animationDuration = '0.5s';
 </script>

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
        document.getElementById('helpHelpButton').style.backgroundColor = "red";
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

        document.getElementById('helpButton').style.color = "white";
    }

    </script>

    <!-- HELP DIV ICON SWITCH SCRIPT END -->

    <!-- HELP DIV FUNCTIONALITY SCRIPT START -->
    <script type="text/javascript" src="helpScript.js"></script>
    <!-- HELP DIV FUNCTIONALITY SCRIPT END -->

  </body>

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
  