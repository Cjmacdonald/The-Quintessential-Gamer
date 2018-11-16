<?php

require ("Entities/storeEntity.php");

class storeModel {

    function GetMerchTypes() {
        require 'credentials.php';

        mysqli_connect($host, $user, $password) or die(mysqli_error($conn));
        mysqli_select_db($conn,$database);
        $result = mysqli_query($conn, "SELECT DISTINCT type FROM store") or die(mysqli_error($conn));
        $types = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($types, $row[0]);
        }

        mysqli_close($conn);
        return $types;
    }

    function GetMerchByType($type) {
        require 'credentials.php';

        mysqli_connect($host, $user, $password) or die(mysqli_error);
        mysqli_select_db($conn, $database);

        $query = "SELECT * FROM store WHERE type LIKE '$type'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $merchArray = array();

        while ($row = mysqli_fetch_array($result)) {
            $name = $row[1];
            $type = $row[2];
            $price = $row[3];
            $size = $row[4];
            $image = $row[5];
            $review = $row[6];

            $merch = new storeEntity(-1, $name, $type, $price, $size, $image, $review);
            array_push($merchArray, $merch);
        }
        mysqli_close($conn);
        return $merchArray;
    }

}

?>
