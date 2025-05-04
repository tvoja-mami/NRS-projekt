<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "NRS_projekt";
    $conn = "";

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die("Povezava s podatkovno bazo ni uspela: " . mysqli_connect_error());
    }

?>