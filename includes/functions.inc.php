<?php
    session_start();
    define('user_level_admin', '1');

    function isAdmin() {
        if ($_SESSION['session_user_level'] == user_level_admin) {
            return true;
        } else {
            return false;
        }
    }