<?php

session_start();
require 'function.php';


// pemeriksaan session login
if (isset($_SESSION["login"])) {
    header("location: index.php");
    exit;
}


if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // cek username dan password
    if ($username == "permataparty123" && $password == "12345") {
        header("location: index.php");
        $_SESSION["login"] = true;
        exit;
    } else {
        header("location: login.php?error=true");
    }
}

?>
