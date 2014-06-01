<?php
//require_once('check_login.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
    <link rel="apple-touch-icon" href="/say_hello/images/nihongo_256.png">
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
    $(document).on("pageinit", "#index_page", function( event ) {
        console.log( "This page was just enhanced by jQuery Mobile!" );
    });
    $(document).ready(function(){
        console.log("hello world jqm");
        //var user_name = getCookie("say_hello_username");
        //$("img#top_user_thumbnail").attr("src","/say_hello/images/thumbnail_" + user_name + ".png");
        //$("div#top_user_name").text(user_name);
        function filter_list() {
            $("ul.list_mp3 li a").each(function() {
                var s = $(this).children("h4").html().toLowerCase().trim();
                var words = $("input#search_list").val().trim().toLowerCase().split(' ');
                var hasWords = true;
                $.each(words, function() {
                    if(s.indexOf(this) < 0) {
                        hasWords = false;
                        return false; // break $.each
                    }
                });
                if(hasWords == false) {
                    $(this).parents("li").hide();
                }
                else{
                    $(this).parents("li").show();
                }
            });     
        }
        var wait_for_search = null;
        $("input#search_list").keyup(function() {
            clearTimeout(wait_for_search);
            wait_for_search = setTimeout(function() {
                filter_list();
            });
        })
    });
    </script>
</head>
<body>
<div data-role="page" id="index_page" data-theme="d" data-title="toeic_listening">
    <div data-role="header" data-theme="c">
    <h2><?php echo $_GET['book']; ?></h2>
        <!--
        <a href="#left-panel" data-icon="bars" data-iconpos="notext" >Menu</a>
        -->
    </div><!-- /header -->
    <div data-role="content" style="background:#46463C url(/say_hello/images/bg.png);" >
     <label for="search-4">Search:</label>
     <input type="search" data-mini="true" name="search-4" id="search_list" data-clear-btn="true" value="">
        <ul class="list_mp3" data-role='listview' data-inset='true' style='margin:0px;'>
<?php
    $dir    = 'toeic_listening/'.$_GET['book'];
    $files1 = scandir($dir);
    $index = -1;
    foreach($files1 as $value) 
    {

        $index = $index + 1;
        if($value === '.' || $value === '..') {continue;}
        echo "<li>";
        echo "<a href=\"/say_hello/play_new_toeic.php?book=".$_GET['book']."&no=".$index."\">";
        echo "<h4>".$value."</h4>";
        echo "</a>";
        echo "</li>";
    }
?> 
        </ul>
        <p><a href="#right-panel" data-role="button" data-theme="b" data-inline="true" data-mini="true" data-shadow="false">Share</a></p>
    </div><!-- /content -->
    <div data-role="panel" id="left-panel" data-theme="c" data-ajax="false">
        <ul data-role="listview">
            <li><a href="#" data-rel="close"><img id="top_user_thumbnail" /><div id="top_user_name" style="font-size:40px;text-align:center;vertical-align:middle;"></div></a></li>
            <li><a href="/say_hello/index.php" data-rel="close">首页</a></li>
            <li><a href="/say_hello/write_something.php">写点东西</a></li>
            <li><a href="#">Toeic</a></li>
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
