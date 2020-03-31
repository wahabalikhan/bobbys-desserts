<?php
    $con = mysqli_connect('localhost','root','root');
    mysqli_select_db($con,'bobbys_desserts');

    $sql = "DELETE FROM users WHERE user_id='$_GET[user_id]'";
    if (mysqli_query($con, $sql)) {
        echo "Successfully deleted record";
    } else {
        echo "Failed to delete record";
    }
    header("refresh:1; url='../admin.php'");