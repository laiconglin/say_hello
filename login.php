<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <script src="utils.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <script>
        $(document).bind("mobileinit", function () {
            console.log("hello world mobileinit");
            $.mobile.ajaxEnabled = false;
        });
    </script>
    <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>  
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
<div data-role="page" id="login_in" data-title="评评灌灌 - 登录">
    <div data-role="header" data-theme="c">
        <h2>评评灌灌 - 登录</h2>
        <a href="#left-panel" data-icon="bars" data-iconpos="notext" >Menu</a>
    </div>
    <div data-role="content" style="background:#46463C url(/say_hello/images/bg.png);">
        <div class="article article-content">
            <form id="contents" action="index.php" method="post">
                <label for="name">用户名:</label>
                <input type="text" name="username" id="username" value="">
                <label for="password">密&nbsp;&nbsp;&nbsp;&nbsp;码:</label>
                <input type="password" data-clear-btn="false" name="password" id="password-1" value="" autocomplete="off">
                <input type="submit" value="登录" data-iconpos="right" data-mini="true" data-theme="e">
            </form>
        </div>
    </div>
    <div data-role="panel" id="left-panel" data-theme="c">
          <ul data-role="listview">
            <li data-icon="delete"><a href="#" data-rel="close">Close</a></li>
            <li><a href="/say_hello/index.php">首页</a></li>
            <li><a href="#" data-rel="close">登录</a></li>
            <li><a href="/say_hello/write_something.php">写点东西</a></li>
          </ul>
    </div><!-- /panel -->
    <div data-role="footer" data-theme="c">
        <p>Copyright &copy; 2013 Conglin Lai</p>
    </div>
</div>
</body>
</html>

