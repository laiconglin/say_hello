<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link rel="stylesheet" href="jquery.mobile-1.3.1.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
    </script>
    <script src="jquery.mobile-1.3.1.js"></script>  
</head>
<body>
<div data-role="page" id="login_in" data-title="评评灌灌 - 登录">
    <div data-role="header" data-theme="c">
        <h2>评评灌灌 - 登录</h2>
        <a href="#left-panel" data-icon="bars" data-iconpos="notext" >Menu</a>
    </div>
    <div data-role="content">
        <form id="contents" action="post_form_test.php" method="post">
            <label for="name">用户名:</label>
            <input type="text" name="name" id="text-basic" value="">
            <label for="password-1">密&nbsp;&nbsp;&nbsp;&nbsp;码:</label>
            <input type="password" data-clear-btn="false" name="password" id="password-1" value="" autocomplete="off">
            <input type="submit" value="登录" data-iconpos="right" data-mini="true" data-theme="e">
        </form>
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

