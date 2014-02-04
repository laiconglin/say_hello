<?php
require_once('check_login.php');
?>
<!DOCTYPE html>
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
    index = 0;
    $(document).on("pageinit", "#index_page", function( event ) {
        console.log( "This page was just enhanced by jQuery Mobile!" );
    });
    
    $(document).ready(function(){
        console.log("hello world jqm");
        var user_name = getCookie("say_hello_username");
        $("img#top_user_thumbnail").attr("src","/say_hello/images/thumbnail_" + user_name + ".png");
        $("div#top_user_name").text(user_name);
        //audio.load();
        audio.addEventListener('ended', play_next);
        setTimeout(function(){audio.play();},100);
    });
    function play_next() {
        audio_name = $("h3#audio_name").html();
        book_name = $("h2#book").html();
        num = $("h3#audio_name").attr("number");
        num = parseInt(num) + 1;
        num_str = "";
        var mp3_names = $(".mp3_name");
        next_mp3 = mp3_names[num];
        next_track = next_mp3.innerText;
        next_name = book_name + "/" + next_track;
        $("h3#audio_name").html(next_track);
        $("h3#audio_name").attr("number", num);
        au=$("#audio source");
        au.attr("src", "/say_hello/toeic_listening/" + next_name);        
        audio.load();
    }
    function play_previous() {
        audio_name = $("h3#audio_name").html();
        book_name = $("h2#book").html();
        num = $("h3#audio_name").attr("number");
        num = parseInt(num) - 1;
        num_str = "";
        var mp3_names = $(".mp3_name");
        next_mp3 = mp3_names[num];
        next_track = next_mp3.innerText;
        next_name = book_name + "/" + next_track;
        $("h3#audio_name").html(next_track);
        $("h3#audio_name").attr("number", num);
        au=$("#audio source");
        au.attr("src", "/say_hello/toeic_listening/" + next_name);        
        audio.load();
    }
    </script>
</head>
<body>
<div data-role="page" id="index_page" data-theme="d" data-title="Toeic Listening">
    <div data-role="header" data-theme="c">
        <h2>Toeic Listening</h2>
        <a href="#left-panel" data-icon="bars" data-iconpos="notext" >Menu</a>
    </div><!-- /header -->
    <div data-role="content" style="background:#46463C url(/say_hello/images/bg.png);" >
        <?php
            $dir    = 'toeic_listening/'.$_GET['book'];
            $files = scandir($dir);
            $index = 0;
            $book = $_GET['book'];
            echo "<h2 id='book'>".$book."</h2>";
            $name = $files[$_GET['no']];
            echo "<h3 id='audio_name' number='". $_GET['no'] ."'>".$name."</h3><br/>";
        ?>
        <audio style="width:100%;" id="audio" controls autoplay>
            <?php
                $name = $files[$_GET['no']];
                $book = $_GET['book'];
                echo "<source src=\"/say_hello/toeic_listening/".$book."/". $name . "\" type=\"audio/mpeg\">";
            ?>
        Your browser does not support the audio element.
        </audio>
        <br/>
        <br/>
        <button onclick='play_previous()' data-icon="arrow-l" data-iconpos="left" data-inline="true">Previous</button>
        <button onclick='play_next()' data-icon="arrow-r" data-iconpos="right" data-inline="true">Next</button>
        <br/>
        <br/>
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
<div style="display:none;" >
<?php
    foreach($files as $file) 
    {
        echo "<p class='mp3_name'>" . $file . "</p>";
    }
?>

</div>
</body>
</html>
