<?php
    require 'dbh.inc.php';
    
    if (isset($_POST['signup-submit'])) {
        $username = $_POST['username'];
        $emailAddress = $_POST['email-address'];
        $password = $_POST['password'];

        $sql = "SELECT username FROM users WHERE username=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup-login.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if ($resultCheck > 0) {
                header("Location: ../signup-login.php?error=usertaken&mail=".$emailAddress);
                exit();
            } else {
                $sql = "INSERT INTO users (username, email_address, password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup-login.php?error=sqlerror");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "sss", $username, $emailAddress, $password);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup-login.php?signup=success");
                    exit();
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    } else {
        header("Location: ../signup-login.php");
        exit();
    }