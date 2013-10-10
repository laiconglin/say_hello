<?php
require_once('tools.php');
setcookie("say_hello_username", "", time()-3600);
if(isset($_SESSION['username'])) {
    unset($_SESSION['username']);
}
echo $_SESSION['username'];
header('/say_hello/login.php');
?>
