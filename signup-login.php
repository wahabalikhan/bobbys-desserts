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
                <h1 class="title">Become a regular if you haven't already</h1>
            </div>
        </div>
    </header>
    <section id="signup-login">
        <div class="container">
            <div class="signup-login-grid grid">
                <div class="form-1">
                    <h4 class="signup-login-form-header">SIGNUP</h4>
                    <form action="includes/signup.inc.php" method="POST">
                        <input type="text" name="username" placeholder="Username">
                        <input type="text" name="email_address" placeholder="Email address">
                        <input type="password" name="password" placeholder="Password">
                        <input type="submit" class="submit signup-submit" name="signup-submit" value="Signup">
                    </form>
                </div>
                <div class="form-2">
                    <h4 class="signup-login-form-header">LOGIN</h4>
                    <form action="includes/login.inc.php" method="POST">
                        <input type="text" name="mailusername" placeholder="Username/email address">
                        <input type="password" name="password" placeholder="Password">
                        <input type="submit" class="submit login-submit" name="login-submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php require "footer.php"?>
    
    <!-- Scripts -->
    <script src="assets/js/app.js"></script>
</body>
</html>