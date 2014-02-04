<?php
session_start();
require_once('tools.php');
require_once('db_query.php');
if (isset($_POST['username']) && isset($_POST['password']) && !isset($_COOKIE["say_hello_username"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $authed = auth($username, $password);

    if ($authed == 0) {
        //redirect('/say_hello/login.php?error='.$authed);
    } else {
        $_SESSION['username'] = $username;
    }
}

if(isset($_COOKIE["say_hello_username"])) {
    $_SESSION['username'] = $_COOKIE["say_hello_username"];
    redirect('/say_hello/index.php');
}

if (isset($_SESSION['username'])) {
    if(!isset($_COOKIE["say_hello_username"])) {
        setcookie("say_hello_username",$_SESSION['username'], time()+3600*24*7);
    }
    else {
        if($_SESSION['username'] != $_COOKIE["say_hello_username"]) {
            setcookie("say_hello_username", $_SESSION['username'], time()+3600*24*7);
        }
    }
    $navbar = 1;
    $logindisplay = 0;
    redirect('/say_hello/index.php');
} else {
    //redirect('/say_hello/login.php');
}
?>
