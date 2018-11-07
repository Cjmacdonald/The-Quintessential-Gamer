<?php

require ("Entities/storeEntity.php");

class storeModel {

    function GetMerchTypes() {
        require 'credentials.php';

        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT type FROM merch") or die(mysql_error());
        $types = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($types, $row[0]);
        }

        mysql_close();
        return $types;
    }

    function GetMerchByType($type) {
        require 'credentials.php';

        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM merch WHERE type LIKE '$type'";
        $result = mysql_query($query) or die(mysql_error());
        $merchArray = array();

        while ($row = mysql_fetch_array($result)) {
            $name = $row[1];
            $type = $row[2];
            $price = $row[3];
            $size = $row[4];
            $image = $row[5];
            $review = $row[6];

            $merch = new storeEntity(-1, $name, $type, $price, $size, $image, $review);
            array_push($merchArray, $merch);
        }
        mysql_close();
        return $merchArray;
    }

}

?>
