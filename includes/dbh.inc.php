<?php
    $serverName = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbName = "bobbys_desserts";

    $con = mysqli_connect('localhost','root','root');
    mysqli_select_db($con,'bobbys_desserts');

    $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
    if (!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }