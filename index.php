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
                <h1 class="title">Bobby's Desserts</h1>
                <h1 class="slogan">It hits different...</h1>
                <p>Take a dive into our award-winning desserts and venues as we provide customers with only the best and ensure they leave with a smile on their face. BobbyBoy Desserts is the number one stop for a delectable range of gelato, desserts and hot puddings served and prepared freshly in house by our experienced staff. We pride ourselves on our specialist range of desserts.</p>
            </div>
            <a href="#about" class="learn-more btn">LEARN MORE</a>
        </div>
    </header>
    <section id="about">
        <div class="container">
            <img src="assets/img/about.png" alt="">
            <div class="about-box">
                <h2>MAKE IT A NIGHT TO REMEMBER</h2>
                <p>At BobbyBoy Desserts, we make sure that our customers leave with a night to remember. We ensure that we give our customers an experience that they'll never forget with our warm, welcoming atmosphere, friendly staff and exotic specials desserts.</p>
                <a href="#specials" class="specials btn">OUR SPECIALS</a>
            </div>
        </div>
    </section>
    <section id="specials">
        <div class="container">
            <h1>Our specials</h1>
            <div class="product-grid grid">
                <?php
                    $sql = "SELECT * FROM products";
                    $records = mysqli_query($con, $sql);
                ?>
                <?php
                    while ($row = mysqli_fetch_array($records)) {
                        if ($row['special'] == 1) {
                            echo "<div class='product-item'>
                                <div class='product-info'>
                                <div class='product-name'>".$row['product_name']."</div>
                                <div class='product-image'><img src='".$row['image_directory']."' alt=''></div>
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
                    }
                ?>
            </div>
            <a href="" class="menu-tour btn">TAKE A TOUR OF OUR MENU</a>
        </div>
    </section>
    <section id="gallery">
        <div class="container">
            <h1>Come dine with us</h1>
            <div class="gallery-grid grid">
                <img src="assets/img/gallery/gallery_image_1.png" alt="" class="gallery-image">
                <img src="assets/img/gallery/gallery_image_2.png" alt="" class="gallery-image">
                <img src="assets/img/gallery/gallery_image_3.png" alt="" class="gallery-image">
                <img src="assets/img/gallery/gallery_image_4.png" alt="" class="gallery-image">
                <img src="assets/img/gallery/gallery_image_5.png" alt="" class="gallery-image">
                <img src="assets/img/gallery/gallery_image_6.png" alt="" class="gallery-image">
                <img src="assets/img/gallery/gallery_image_7.png" alt="" class="gallery-image">
                <img src="assets/img/gallery/gallery_image_8.png" alt="" class="gallery-image">
                <img src="assets/img/gallery/gallery_image_9.png" alt="" class="gallery-image">
            </div>
        </div>
    </section>
    <?php require "footer.php"?>
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>