<?php
/*
$host = "localhost";
$user = "root";
$passwd = "";
$database = "storedb";

$conn = mysqli_connect ($host, $user, $password, $database);
*/
$db = mysqli('127.0.0.1','root','','storedb');
if ($db -> connect_errno)
{
  die('sorry it done broke');
}
?>
