<?php
$base_url = 'http:///The_quintessential_gamer/index';
$signin_url = substr($base_url . $_SERVER['PHP_SELF'], 0, -(6 + strlen(basename($_SERVER['PHP_SELF']))));
$ip_address = $_SERVER['REMOTE_ADDR'];
