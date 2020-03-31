<?php session_start(); ?>

<div class="toggle">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
</div>
<a href="index.php" class="logo"><img src="assets/img/logo.png" alt=""></a>
<nav>
    <?php
        if (isset($_SESSION['session_user_id'])) {
            if ($_SESSION['session_user_level'] == 1) {
                echo '
                <ul class="main-nav">
                    <a href="menu.php">Menu</a>
                    <a href="index.php#gallery">Gallery</a>
                    <a href="#contact">Contact</a>'?>
                    <?php echo '<a href="admin.php">Admin panel</a>';?>
                    <?php echo '<a>Logged in as: '.$_SESSION['session_username'].'</a>';?>
                    <?php echo '<a href="includes/logout.inc.php"><button type="submit" name="logout-submit" class="logout btn">Logout</button></a>
                </ul>
                ';
            } else {
                echo '
                <ul class="main-nav">
                    <a href="menu.php">Menu</a>
                    <a href="index.php#gallery">Gallery</a>
                    <a href="#contact">Contact</a>'?>
                    <?php echo '<a>Logged in as: '.$_SESSION['session_username'].'</a>';?>
                    <?php echo '<a href="includes/logout.inc.php"><button type="submit" name="logout-submit" class="logout btn">Logout</button></a>
                </ul>
                ';
            }
        } else {
            echo '
            <ul class="main-nav">
                <a href="menu.php">Menu</a>
                <a href="index.php#gallery">Gallery</a>
                <a href="#contact">Contact</a>
                <a href="signup-login.php" class="signup-login btn">SIGNUP/LOGIN</a>
            </ul>
            ';
        }
    ?>
</nav>