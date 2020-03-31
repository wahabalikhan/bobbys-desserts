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
                <div class="product-item">
                    <div class="product-image"><img src="assets/img//products/product_image_1.png" alt=""></div>
                    <div class="product-info">
                        <div class="product-name">BELGIUM CHOCOLATE WAFFLE</div>
                        <div class="product-price">£7.99</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi illo eos, ea tempore reiciendis veritatis eveniet aspernatur neque provident voluptatem?</p>
                        <img src="assets/img/vegetarian.png" alt="" class="allergy-image">
                        <img src="assets/img/gluten_free.png" alt="" class="allergy-image">
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-image"><img src="assets/img//products/product_image_2.png" alt=""></div>
                    <div class="product-info">
                        <div class="product-name">KINDER BUENO WAFFLE</div>
                        <div class="product-price">£7.99</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi illo eos, ea tempore reiciendis veritatis eveniet aspernatur neque provident voluptatem?</p>
                        <img src="assets/img/vegetarian.png" alt="" class="allergy-image">
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-image"><img src="assets/img//products/product_image_3.png" alt=""></div>
                    <div class="product-info">
                        <div class="product-name">STRAWBERRY DELIGHT CREPE</div>
                        <div class="product-price">£7.99</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi illo eos, ea tempore reiciendis veritatis eveniet aspernatur neque provident voluptatem?</p>
                        <img src="assets/img/gluten_free.png" alt="" class="allergy-image">
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-image"><img src="assets/img//products/product_image_4.png" alt=""></div>
                    <div class="product-info">
                        <div class="product-name">NUTELLA SPREAD CREPE</div>
                        <div class="product-price">£7.99</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi illo eos, ea tempore reiciendis veritatis eveniet aspernatur neque provident voluptatem?</p>
                        <img src="assets/img/gluten_free.png" alt="" class="allergy-image">
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-image"><img src="assets/img//products/product_image_5.png" alt=""></div>
                    <div class="product-info">
                        <div class="product-name">BUBBLEGUM SUNDAE</div>
                        <div class="product-price">£7.99</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi illo eos, ea tempore reiciendis veritatis eveniet aspernatur neque provident voluptatem?</p>
                        <img src="assets/img/gluten_free.png" alt="" class="allergy-image">
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-image"><img src="assets/img//products/product_image_6.png" alt=""></div>
                    <div class="product-info">
                        <div class="product-name">MINTY SUNDAE</div>
                        <div class="product-price">£7.99</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi illo eos, ea tempore reiciendis veritatis eveniet aspernatur neque provident voluptatem?</p>
                        <img src="assets/img/gluten_free.png" alt="" class="allergy-image">
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-image"><img src="assets/img//products/product_image_7.png" alt=""></div>
                    <div class="product-info">
                        <div class="product-name">FERRERO ROCHER CHEESECAKE</div>
                        <div class="product-price">£7.99</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi illo eos, ea tempore reiciendis veritatis eveniet aspernatur neque provident voluptatem?</p>
                        <img src="assets/img/gluten_free.png" alt="" class="allergy-image">
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-image"><img src="assets/img//products/product_image_8.png" alt=""></div>
                    <div class="product-info">
                        <div class="product-name">CHOCOLATE CHIP COOKIE DOUGH</div>
                        <div class="product-price">£7.99</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi illo eos, ea tempore reiciendis veritatis eveniet aspernatur neque provident voluptatem?</p>
                        <img src="assets/img/gluten_free.png" alt="" class="allergy-image">
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-image"><img src="assets/img//products/product_image_9.png" alt=""></div>
                    <div class="product-info">
                        <div class="product-name">CHOCOLATE FUDGE CAKE</div>
                        <div class="product-price">£7.99</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi illo eos, ea tempore reiciendis veritatis eveniet aspernatur neque provident voluptatem?</p>
                        <img src="assets/img/gluten_free.png" alt="" class="allergy-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require "footer.php"?>
    
    <!-- Scripts -->
    <script src="assets/js/app.js"></script>
</body>
</html>