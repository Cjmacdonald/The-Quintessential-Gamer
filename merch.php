<?php

require 'Controller/merchController.php';
$merchController = new merchController();

if(isset($_POST['types']))
{
    //Fill page with merchs of the selected type
    $merchTables = $merchController->CreateMerchTables($_POST['types']);
}
else
{
    //Page is loaded for the first time, no type selected -> Fetch all types
    $merchTables = $merchController->CreateMerchTables('%');
}

//Output page data
$title = 'merch overview';
$content = $merchController->CreateMerchDropdownList(). $merchTables;

include 'Template.php';
?>
