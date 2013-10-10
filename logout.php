<?php
require_once('tools.php');
setcookie("say_hello_username", "", time()-3600);
if(isset($_SESSION['username'])) {
    unset($_SESSION['username']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <script>
        window.location.href="http://localhost/say_hello/login.php";
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link rel="stylesheet" href="jquery.mobile-1.3.1.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <script src="jquery.mobile-1.3.1.js"></script>  
    <script src="utils.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <script>
    $(document).ready(function(){
        console.log("hello world");
    });

    </script>
</head>
<body>

</body>
</html>
