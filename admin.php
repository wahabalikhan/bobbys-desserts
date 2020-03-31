<?php
    require 'includes/dbh.inc.php';
    require 'includes/functions.inc.php';

    if (!isAdmin()) {
        header("Location: index.php");
    }

    $con = mysqli_connect('localhost','root','root');
    mysqli_select_db($con,'bobbys_desserts');
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
    <section id="admim">
        <div class="container">
            <div class="user-panel">
                <h2>User panel</h2>
                <p class="heading">Add user</p>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email address</th>
                        <th>Password</th>
                    </tr>
                    <?php
                        echo "<tr><form action='includes/insert.inc.php' method='POST'>
                        <td><input type=text name=username value='".$row["username"]."'></td>
                        <td><input type=text name=email_address value='".$row["email_address"]."'></td>
                        <td><input type=password name=password value='".$row["password"]."'></td>
                        <input type=hidden name=user_id value='".$row["user_id"]."'>
                        <td><input type='submit' name='add-user' value='Add'></td>
                        </form><tr>";
                    ?>
                </table>
                <?php
                    $sql = "SELECT * FROM users";
                    $records = mysqli_query($con, $sql);
                ?>
                <p class="heading">Update users</p>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email address</th>
                        <th>Password</th>
                        <th>User level</th>
                    </tr>
                    <?php
                        while ($row = mysqli_fetch_array($records)) {
                            echo "<tr><form action='includes/update.inc.php' method='POST'>
                            <td><input type=text name=username value='".$row["username"]."'></td>
                            <td><input type=text name=email_address value='".$row["email_address"]."'></td>
                            <td><input type=text name=password value='".$row["password"]."'></td>
                            <td><input type=text name=user_level value='".$row["user_level"]."'></td>
                            <input type=hidden name=user_id value='".$row["user_id"]."'>
                            <td><input type='submit' value='Update'></td>
                            </form><tr>";
                        }
                    ?>
                </table>
                <?php
                    $sql = "SELECT * FROM users";
                    $records = mysqli_query($con, $sql);
                ?>
                <p class="heading">Remove users</p>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email address</th>
                        <th>Password</th>
                    </tr>
                    <?php
                        while ($row = mysqli_fetch_array($records)) {
                            echo "<tr><td>".$row['username']."</td>
                            <td>".$row['email_address']."</td>
                            <td>".$row['password']."</td>
                            <td><a href=includes/delete.inc.php?user_id=".$row['user_id'].">Delete</a></td>
                            <tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
    </section>
    <?php require "footer.php"?>

    <!-- Scripts -->
    <script src="assets/js/app.js"></script>
</body>
</html>