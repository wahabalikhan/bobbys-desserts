<?php
    require 'dbh.inc.php';

    $userSql = "UPDATE users SET username='$_POST[username]', email_address='$_POST[email_address]', password='$_POST[password]', user_level ='$_POST[user_level]' WHERE user_id='$_POST[user_id]'";
    if (mysqli_query($con, $userSql)) {
        echo "Successfully updated record";
    } else {
        echo "Failed to update record ";
    }
    header("refresh:1; url='../admin.php'");

    $productSql = "UPDATE products SET product_name ='$_POST[product_name]', product_price ='$_POST[product_price]', product_description ='$_POST[product_description]', special ='$_POST[special]', vegetarian ='$_POST[vegetarian]', gluten_free ='$_POST[gluten_free]', image_directory ='$_POST[image_directory]'WHERE product_id='$_POST[product_id]'";
    if (mysqli_query($con, $productSql)) {
        echo "Successfully updated record";
    } else {
        echo "Failed to update";
    }
    header("refresh:1; url='../admin.php'");