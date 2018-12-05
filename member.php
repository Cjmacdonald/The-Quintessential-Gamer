<?php
session_start();
include "login/connect.php";
$title = "login";
$content ='
<h3><center><font size = 45><font color = "3E72F3">You have been successfully logged in!</font></font></center></h3>
';
/*$getName = mysqli_query("SELECT * FROM users WHERE Email='$Email'",$conn);
    $row = mysqli_fetch_array($getName);

    $Email = $row['Email'];*/
require 'template.php';
	 ?>
