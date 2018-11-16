<!DOCTYPE html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="styles/stylessheet.css" />
  </head>
  <body>
      <div id="wrapper">

        <div id="banner">
          <p><b>Welcome to The Quintessential Gamer!</b></p>
        </div>

        <nav id="navigation">
          <ul id="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="schedule.php">Schedule</a></li>
            <li><a href="merch.php">Store</a></li>
            <li><a href="followMe.php">Follow Me</a></li>
            <li><a href="aboutMe.php">About Me</a></li>
          </ul>
        </nav>

        <div id="content_area">
          <?php echo $content; ?>
        </div>

        <div id="sidebar">
        </div>

        <footer>
          <p> All Rights Reserved</p>
        </footer>

    </div>


  </body>
</html>
