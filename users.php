<?php require 'includes/dbh.inc.php'; ?>

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
                <h1 class="title">Registered users</h1>
            </div>
            <input type="text" id="searchbar" name="searchbar" placeholder="Search for a user">
        </div>
    </header>
    <section id="menu">
        <div class="container">
            <div class="users-grid grid">
                <?php
                    $sql = "SELECT * FROM users";
                    $records = mysqli_query($conn, $sql);
                ?>
                <?php
                    while ($row = mysqli_fetch_array($records)) {
                        echo "<div class='user-item item'>
                            <div class='user-name'>".$row['username']."</div>
                        </div>";
                    }
                ?>
            </div>
        </div>
    </section>
    <?php require "footer.php"?>
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>