<?php
require_once('check_authorized.php');
?>
<html>
<head
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <script src="utils.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <script>
        $(document).ready(function(){
            var username=getCookie("username");
            if (username!=null && username!=""){
                //alert("Welcome again " + username);
                $("input#username").attr("value",username);
            } 
        });
    </script>
</head>
<body>
这是一个登录界面
    <form id="contents" action="index_pc.php" method="post">
        <label for="name">用户名:</label>
        <input type="text" name="username" id="username" value="">
        <label for="password">密&nbsp;&nbsp;&nbsp;&nbsp;码:</label>
        <input type="password"  name="password" id="password-1" value="" autocomplete="off">
        <input type="submit" value="登录" >
    </form>
</body>

</html>
