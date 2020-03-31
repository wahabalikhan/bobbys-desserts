<?php
    $con = mysqli_connect('localhost','root','root');
    mysqli_select_db($con,'bobbys_desserts');
    
    if (isset($_POST['add-user'])) {
        $username = $_POST['username'];
        $emailAddress = $_POST['email_address'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (username, email_address, password) VALUES ('$username','$emailAddress','$password')";
        if (!mysqli_query($con, $sql)) {
            echo "Failed to insert record";
        } else {
            echo "Successfully inserted record";
        }
        header("refresh:1; url='../admin.php'");
    }