<?php
    require 'dbh.inc.php';

    $userSql = "DELETE FROM users WHERE user_id='$_GET[user_id]'";
    if (mysqli_query($con, $userSql)) {
        echo "Successfully deleted record";
    } else {
        echo "Failed to delete record";
    }
    header("refresh:1; url='../admin.php'");

    $productSql = "DELETE FROM products WHERE product_id='$_GET[product_id]'";
    if (mysqli_query($con, $productSql)) {
        echo "Successfully deleted record";
    } else {
        echo "Failed to delete record";
    }
    header("refresh:1; url='../admin.php'");