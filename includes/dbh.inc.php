<?php
    $serverName = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbName = 'bobbys_desserts';
    
    $conn = mysqli_connect($serverName, $username, $password);
    mysqli_select_db($conn, $dbName);