<?php
    if (isset($_POST['send'])) {
        $name = $_POST['fullname'];
        $emailAddress = $_POST['email-address'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mailTo = "";
        $headers = "From: ".$emailAddress;
        $text = "You have received an email from ".$name.".\n\n".$message;

        mail($mailTo, $subject, $text, $headers);
        header("Location: ../index.php?mailsend");
    }