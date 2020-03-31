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

    if (isset($_POST['add-product'])) {
        $productName = $_POST['product_name'];
        $productPrice = $_POST['product_price'];
        $productDescription = $_POST['product_description'];
        $special = $_POST['special'];
        $vegetarian = $_POST['vegetarian'];
        $glutenFree = $_POST['gluten_free'];
        $imageDirectory = $_POST['image_directory'];

        $sql = ("INSERT INTO products (product_name, product_price, product_description, special, vegetarian, gluten_free, image_directory) VALUES ('$productName','$productPrice','$productDescription','$special','$vegetarian','$glutenFree','$imageDirectory')");
        if (!mysqli_query($con, $sql)) {
            echo "Failed to insert record";
        } else {
            echo "Successfully inserted record";
        }
        header("refresh:1; url='../admin.php'");
    }