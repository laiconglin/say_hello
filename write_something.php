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
<div data-role="page" id="write_something" data-title="评评灌灌">
    <div data-role="header" id="write_something_header" data-theme="c">
        <h4>写点东西吧，少年</h4>
        <a href="#left-panel" data-icon="bars" data-iconpos="notext" >Menu</a>
    </div><!-- /header -->
    <div data-role="content" id="write_something_header" data-theme="c">
        <div class="article">
            <form id="contents" action="post_new_article.php" method="post">
                <label for="title">标题:</label>
                <input type="text" name="title" id="text-basic" value="">
                <label for="content">正文:</label>
                <textarea cols="40" rows="60" name="content" id="content_textarea" style="height:200;"></textarea>
                <input type="submit" value="提交" data-iconpos="right" data-mini="true" data-theme="e">
            </form>
        </div><!-- /article -->
    </div><!-- /content -->
    <div data-role="panel" id="left-panel" data-theme="c">
          <ul data-role="listview">
            <li data-icon="delete"><a href="#" data-rel="close">Close</a></li>
            <li><a href="/say_hello/index.php">首页</a></li>
            <li><a href="/say_hello/login.php">登录</a></li>
            <li><a href="#" data-rel="close">写点东西</a></li>
          </ul>
    </div><!-- /panel -->
    <div data-role="panel" id="right-panel" data-display="overlay" data-position="right" data-theme="c">
        <ul data-role="listview" data-theme="d" data-icon="false">
            <li data-icon="delete"><a href="#" data-rel="close">Close</a></li>
            <li data-role="list-divider">Share this page</li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Google +</a></li>
            <li><a href="#">Mail</a></li>
        </ul>
    </div><!-- /panel -->
    <div data-role="footer" data-theme="c">
        <p>Copyright&copy; 2013 Conglin Lai</p>
    </div>
</div>

</body>
</html>
