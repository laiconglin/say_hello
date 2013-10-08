<?php
session_start();
require_once('db_query.php');
if (isset($_POST['username']) && isset($_POST['password']) && !isset($_COOKIE["say_hello_username"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $authed = auth($username, $password);

    if (!$authed) {
        header('Location: /say_hello/login.php?error='.$authed);
    } else {
        $_SESSION['username'] = $username;
    }
}


if (isset($_SESSION['username'])) {
    if(!isset($_COOKIE["say_hello_username"])) {
        setcookie("say_hello_username",$value, time()+3600*24*7);
    }
    else {
        if($_SESSION['username'] != $_COOKIE["say_hello_username"]) {
            setcookie("say_hello_username",$value, time()+3600*24*7);
        }
    }
    $navbar = 1;
    $logindisplay = 0;
} else {
    header ('Location: /say_hello/login.php');
}
?>
