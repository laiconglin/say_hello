<?php
require_once('check_login.php');
$all_articles = select_articles();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link rel="stylesheet" href="jquery.mobile-1.3.1.css" />
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
    <script src="jquery.mobile-1.3.1.js"></script>  
    <script>
    $(document).ready(function(){
        console.log("hello world jqm");
        var user_name = getCookie("say_hello_username");
        $("img#top_user_thumbnail").attr("src","/say_hello/images/thumbnail_" + user_name + ".png");
        $("div#top_user_name").text(user_name);
    });
    </script>
</head>
<body>
<div data-role="page" id="index_page" data-theme="d" data-title="评评灌灌">
    <div data-role="header" data-theme="c">
        <h2>评评灌灌</h2>
        <a href="#left-panel" data-icon="bars" data-iconpos="notext" >Menu</a>
    </div><!-- /header -->
    <div data-role="content" style="background:#46463C url(/say_hello/images/bg.png);" >
<?php
    foreach($all_articles as $article){
        //echo "<pre>";
        //print_r($article);
        //echo "</pre>";
        $article_id = $article['id'];
        $title = $article['title'];
        $author = $article['author_name'];;
        $create_date = $article['create_time'];
        $publish_info = "Post By ".$author." on ".$create_date;
        echo "<div class='article article-content'>";
        echo "<ul data-role='listview' data-inset='true'>";
        echo "<li>";
        echo "<a href=\"/say_hello/show_article.php?article_id=$article_id\">";
        echo "<h3> $title</h3>";
        echo "<p class=\"article-ul-li-span\"> $publish_info</p>";
        echo "</a>";
        echo "</ul>";
        echo "</div>";
    }
?>

        <div class="article article-content">
        </div><!-- /article -->
        <p><a href="#right-panel" data-role="button" data-theme="b" data-inline="true" data-mini="true" data-shadow="false">Share</a></p>
    </div><!-- /content -->
    <div data-role="panel" id="left-panel" data-theme="c" data-ajax="false">
        <ul data-role="listview">
            <li><a href="#" data-rel="close"><img id="top_user_thumbnail" /><div id="top_user_name" style="font-size:40px;text-align:center;vertical-align:middle;"></div></a></li>
            <li><a href="#" data-rel="close">首页</a></li>
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
</div>

</body>
</html>
