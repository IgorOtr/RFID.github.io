<?php
    session_start();

    session_destroy();

    unset($_SESSION['email']);

    session_unset();

    header('location: http://localhost/RFID/RFID/Admin/login.php');