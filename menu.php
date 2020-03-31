<?php
    require 'includes/dbh.inc.php';

    $con = mysqli_connect('localhost','root','root');
    mysqli_select_db($con,'bobbys_desserts');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/logo.png" type="image/png">
    <title>Bobby's Desserts</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <header>
        <div class="container">
            <?php require "header.php"?>
            <div class="hero">
                <h1 class="title">Our menu</h1>
            </div>
            <input type="text" id="searchbar" name="searchbar" placeholder="Search for a dessert">
        </div>
    </header>
    <section id="menu">
        <div class="container">
            <div class="product-grid grid">
                <?php
                    $sql = "SELECT * FROM products";
                    $records = mysqli_query($con, $sql);
                ?>
                <?php
                    while ($row = mysqli_fetch_array($records)) {
                        echo "<div class='product-item'>
                            <div class='product-image'><img src='assets/img/products/product_image_2.png' alt=''></div>
                            <div class='product-info'>
                            <div class='product-name'>".$row['product_name']."</div>
                            <div class='product-price'>£".$row['product_price']."</div>
                            <p>".$row['product_description']."</p>"?>
                        <?php
                            if ($row['vegetarian'] == 1) {
                            echo "<img src='assets/img/vegetarian.png' alt='' class='allergy-image'></img>";
                            }
                            if ($row['gluten_free'] == 1) {
                            echo "<img src='assets/img/gluten_free.png' alt='' class='allergy-image'></img>";
                            }?>
                        <?php echo"</div>
                        </div>";
                    }
                ?>
            </div>
        </div>
    </section>
    <?php require "footer.php"?>
    
    <!-- Scripts -->
    <script src="assets/js/app.js"></script>
</body>
</html>