<?php
require_once('check_login.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link rel="apple-touch-icon" href="/say_hello/images/nihongo_256.png">
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
    $(document).on("pageinit", "#index_page", function( event ) {
        console.log( "This page was just enhanced by jQuery Mobile!" );
    });
    $(document).ready(function(){
        console.log("hello world jqm");
        var user_name = getCookie("say_hello_username");
        $("img#top_user_thumbnail").attr("src","/say_hello/images/thumbnail_" + user_name + ".png");
        $("div#top_user_name").text(user_name);
    });
    </script>
</head>
<body>
<div data-role="page" id="index_page" data-theme="d" data-title="Toeic Listening">
    <div data-role="header" data-theme="c">
        <h2>Toeic Listening</h2>
        <a href="#left-panel" data-icon="bars" data-iconpos="notext" >Menu</a>
    </div><!-- /header -->
    <div data-role="content" style="background:#46463C url(/say_hello/images/bg.png);" >
        <ul data-role='listview' data-inset='true' style='margin:0px;'>
            <li>
                <a href="/say_hello/toeic_new_listening.php?book=toeic_keyword">
                    <h4>toeic keyword</h4>
                </a>
            </li>
            <li>
                <a href="/say_hello/toeic_new_listening.php?book=EnglishInterview">
                    <h4>English Interview</h4>
                </a>
            </li>
            <li>
                <a href="/say_hello/toeic_new_listening.php?book=ToeicTest800_A">
                    <h4>ToeicTest800_A</h4>
                </a>
            </li>
            <li>
                <a href="/say_hello/toeic_new_listening.php?book=ToeicTest800_B">
                    <h4>ToeicTest800_B</h4>
                </a>
            </li>
            <li>
                <a href="/say_hello/toeic_new_listening.php?book=Toeic_Test_Sample_A">
                    <h4>Toeic_Test_Sample_A</h4>
                </a>
            </li>
            <li>
                <a href="/say_hello/toeic_new_listening.php?book=Toeic_Test_Sample_B">
                    <h4>Toeic_Test_Sample_B</h4>
                </a>
            </li>
            <li>
                <a href="/say_hello/toeic_new_listening.php?book=upgradeEnglish_A">
                    <h4>upgradeEnglish_A</h4>
                </a>
            </li>
            <li>
                <a href="/say_hello/toeic_new_listening.php?book=upgradeEnglish_B">
                    <h4>upgradeEnglish_B</h4>
                </a>
            </li>
            <li>
                <a href="/say_hello/toeic_new_listening.php?book=Toeic_2500">
                    <h4>Toeic_2500</h4>
                </a>
            </li>
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
