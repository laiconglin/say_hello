<?php
$new_title = "test hello";
//var_dump($_POST);
if(isset($_POST['title'])) {
    $new_title = $_POST['title'];
    //echo $new_title."<br/>";
}
$new_date = "2013-09-20";
if(isset($_POST['date'])) {
    $new_date = $_POST['date'];
    //echo $new_date."<br/>";
}
$new_content = "Lorem ipsum dolor sit amet, consectetur adipisicing elit,Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium perspiciatis unde omnis iste natus error sit voluptatem accusantiumdoloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";
if(isset($_POST['content'])) {
    $new_content = $_POST['content'];
    //echo $new_content."<br/>";
}
$new_publish_info = "Post By lai on sunday,March 05,2013";
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link rel="stylesheet" href="jquery.mobile-1.3.1.css" />
    <script src="jquery.min.js">
    </script>
    <script src="jquery.mobile-1.3.1.js"></script>  
    <link rel="stylesheet" href="css/style.css" /> 
</head>
<body>
<div data-role="page" id="posted_something" data-theme="d" data-title="评评灌灌">
    <div data-role="header" data-theme="c">
        <h2>评评灌灌 - 发表成功</h2>
        <a href="#left-panel" data-icon="bars" data-iconpos="notext" >Menu</a>
    </div><!-- /header -->

    <div data-role="content" style="background:#46463C url(/say_hello/images/bg.png);" >
        <div class="article article-content">
            <h3 style="text-align:center;"><?php echo $new_title; ?> </h3>
            <p class="article-ul-li-span"><?php echo $new_publish_info; ?> </p>
            <p> <?php echo $new_content; ?></p>
            <img src="/say_hello/images/article/article_1.png" />
            <p><a href="#right-panel" data-role="button" data-theme="b" data-inline="true" data-mini="true" data-shadow="false">Share</a></p>
        </div><!-- /article -->
    </div><!-- /content -->

    <div data-role="panel" id="left-panel" data-theme="c">
          <ul data-role="listview">
            <li data-icon="delete"><a href="#" data-rel="close">Close</a></li>
            <li><a href="#" data-rel="close">首页</a></li>
            <li><a href="/say_hello/login.php">登录</a></li>
            <li><a href="/say_hello/write_something.php">写点东西</a></li>
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
        <p>Copyright &copy; 2013 Conglin Lai</p>
    </div>
</div><!--page-->
</body>
</html>
