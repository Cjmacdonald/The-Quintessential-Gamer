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
            <li><center><a href="index.php">Home</a></center></li>
            <li><a href="schedule.php">Major Releases</a></li>
            <li><center><a href="merch.php">Store</a></center></li>
            <li><a href="followMe.php">Follow Me</a></li>
            <li><a href="aboutMe.php">About Me</a></li>
            <li><a href="login/login/signup.php">Sign up</a></li>

          </ul>
        </nav>

        <div id="content_area">
          <?php echo $content; ?>
        </div>

        <footer>
          <p> All Rights Reserved</p>
        </footer>

    </div>


  </body>
</html>
