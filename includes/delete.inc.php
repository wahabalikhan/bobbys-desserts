<?php
    require 'dbh.inc.php';

    $userSql = "DELETE FROM users WHERE user_id='$_GET[user_id]'";
    if (mysqli_query($conn, $userSql)) {
        echo "Successfully deleted record";
    } else {
        echo "Failed to delete record";
    }
    header("refresh:1; url='../admin.php'");

    $productSql = "DELETE FROM products WHERE product_id='$_GET[product_id]'";
    if (mysqli_query($conn, $productSql)) {
        echo "Successfully deleted record";
    } else {
        echo "Failed to delete record";
    }
    header("refresh:1; url='../admin.php'");