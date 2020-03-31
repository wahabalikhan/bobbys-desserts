<?php
    $con = mysqli_connect('localhost','root','root');
    mysqli_select_db($con,'bobbys_desserts');

    $sql = "UPDATE users SET username='$_POST[username]', email_address='$_POST[email_address]', password='$_POST[password]', user_level ='$_POST[user_level]' WHERE user_id='$_POST[user_id]'";
    if (mysqli_query($con, $sql)) {
        echo "Successfully updated record";
    } else {
        echo "Failed to update record ";
    }
    header("refresh:1; url='../admin.php'");