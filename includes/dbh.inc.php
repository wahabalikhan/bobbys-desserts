<?php
    $serverName = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbName = 'bobbys_desserts';
    
    $con = mysqli_connect($serverName, $username, $password);
    mysqli_select_db($con, $dbName);