<?php
require_once('check_login.php');
if(isset($_GET['article_id'])){
    $article = select_article_by_id($_GET['article_id']);
}
$title = $article['title'];
$content = $article['content'];
$author = $article['author_name'];;
$create_date = $article['create_time'];
$theme = $article['theme'];
$publish_info = "Post By ".$author." on ".$create_date;

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link rel="stylesheet" href="jquery.mobile-1.3.1.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <script src="jquery.mobile-1.3.1.js"></script>  
    <link rel="stylesheet" href="css/style.css" /> 
    <script src="utils.js"></script>
    <script>
    $(document).ready(function(){
        var user_name = getCookie("say_hello_username");
        console.log("hello world");
        $("img#top_user_thumbnail").attr("src","/say_hello/images/thumbnail_" + user_name + ".png");
        $("div#top_user_name").text(user_name);
    });

    </script>
</head>
<body>
<div data-role="page" id="posted_something" data-theme="d" data-title="评评灌灌">
    <div data-role="header" data-theme="c">
        <h2>评评灌灌</h2>
        <a href="#left-panel" data-icon="bars" data-iconpos="notext" >Menu</a>
    </div><!-- /header -->

    <div data-role="content" style="background:#46463C url(/say_hello/images/bg.png);" >
        <div class="article article-content">
            <h3 style="text-align:center;"><?php echo $title; ?> </h3>
            <p class="article-ul-li-span"><?php echo $publish_info; ?> </p>
            <div class="article-content-html"> <?php echo $content; ?></div>
            <p><a href="#right-panel" data-role="button" data-theme="b" data-inline="true" data-mini="true" data-shadow="false">Share</a></p>
        </div><!-- /article -->
    </div><!-- /content -->

    <div data-role="panel" id="left-panel" data-theme="c">
          <ul data-role="listview">
            <li><a href="#" data-rel="close"><img id="top_user_thumbnail" /><div id="top_user_name" style="font-size:40px;text-align:center;vertical-align:middle;"></div></a></li>
            <li><a href="/say_hello/index.php">首页</a></li>
            <li><a href="/say_hello/write_something.php">写点东西</a></li>
            <li><a href="/say_hello/logout.php">退出</a></li>
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
