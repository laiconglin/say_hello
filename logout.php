<?php
setcookie("say_hello_username", "", time()-3600);
if(isset($_SESSION['username'])) {
    unset($_SESSION['username']);
}
header ('Location: /say_hello/login.php');
?>
