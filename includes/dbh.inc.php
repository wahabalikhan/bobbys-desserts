<?php
    $serverName = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbName = "bobbys_desserts";

    $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
    if (!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }