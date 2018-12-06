<?php

require 'Controller/merchController.php';
$merchController = new merchController();

if(isset($_POST['types']))
{
    $merchTables = $merchController->CreateMerchTables($_POST['types']);
}
else
{
    $merchTables = $merchController->CreateMerchTables('%');
}

$title = 'merch overview';
$content = $merchController->CreateMerchDropdownList(). $merchTables;

include 'Template.php';
?>
