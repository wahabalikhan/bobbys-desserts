<?php
    require 'includes/dbh.inc.php';
    require 'includes/functions.inc.php';
    if (!isAdmin()) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bobby's World</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <header>
        <div class="container">
            <?php require "header.php"?>
            <div class="hero">
                <h1 class="title">Admin panel</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius repellendus laboriosam dolores recusandae aliquid vitae molestias, autem ea fugit et.</p>
            </div>
        </div>
    </header>
    <?php require "footer.php"?>

    <!-- Scripts -->
    <script src="assets/js/app.js"></script>
</body>
</html>