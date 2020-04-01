<?php
    require 'dbh.inc.php';

    if (isset($_POST['login-submit'])) {
        $mailusername = $_POST['mailusername'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username=? OR email_address=?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup-login.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $mailusername, $mailusername);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            if ($row = mysqli_fetch_assoc($result)) {
                $dbPassword = $row['password'];

                if ($password != $dbPassword) {
                    header("Location: ../signup-login.php?error=wrongpassword");
                    exit();
                } else if ($password == $dbPassword) {
                    session_start();
                    $_SESSION['session_user_id'] = $row['user_id'];
                    $_SESSION['session_username'] = $row['username'];
                    $_SESSION['session_user_level'] = $row['user_level'];

                    header("Location: ../signup-login.php?login=success");
                    exit();
                } else {
                    header("Location: ../signup-login.php?error=wrongpassword");
                    exit();
                }
            } else {
                header("Location: ../signup-login.php?error=nouser");
                exit();
            }
        }
    } else {
        header("Location: ../signup-login.php");
        exit();
    }