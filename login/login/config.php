<?php
include 'globalcon.php';
include 'dbconf.php';
$site_name = 'Test Site';
//login limit/timeout
$max_attempts = 5;
$login_timeout = 300;

$from_email = 'cambin094@gmail.com';
$from_name = 'Welcome to The Quintessential Gamer Newsletter';

//Email settings
$mailServerType = 'smtp';
$smtp_server = 'smtp.gmail.com';

//Email server settings
$smtp_user = 'cambin094@gmail.com';
$smtp_pw = 'Nothing0';
$smtp_port = 465;
$smtp_security = 'ssl';


$verifymsg = 'Click this link to view your monthly Newsletter!';
$active_email = 'Your new account is now active! Click this link to log in!';
$signupthanks = 'Thank you for signing up! You will receive an email shortly confirming the verification of your account.';
