<?php
$base_url = 'http://localhost:4000/The_quintessential_gamer/index.php';
$signin_url = substr($base_url . $_SERVER['PHP_SELF'], 0, -(6 + strlen(basename($_SERVER['PHP_SELF']))));
$ip_address = $_SERVER['REMOTE_ADDR'];
