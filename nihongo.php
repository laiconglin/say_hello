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
    });
    </script>
</head>
<body>
<div data-role="page" id="index_page" data-theme="d" data-title="日语听力">
    <div data-role="header" data-theme="c">
        <h2>日语听力</h2>
    </div><!-- /header -->
    <div data-role="content" style="background:#46463C url(/say_hello/images/bg.png);" >
        <ul data-role='listview' data-inset='true' style='margin:0px;'>
            <li>
                <a href="/say_hello/nihongo_listening.php?book=new_nihon_02">
                    <h4>new_nihon_02</h4>
                </a>
            </li>
            <li>
                <a href="/say_hello/nihongo_listening.php?book=new_nihon_03">
                    <h4>new_nihon_03</h4>
                </a>
            </li>
            <li>
                <a href="/say_hello/nihongo_listening.php?book=new_nihon_04">
                    <h4>new_nihon_04</h4>
                </a>
            </li>
            <li>
                <a href="/say_hello/nihongo_listening.php?book=BusinessJapanese">
                    <h4>Business Japanese</h4>
                </a>
            </li>
        </ul>
        <p><a href="#right-panel" data-role="button" data-theme="b" data-inline="true" data-mini="true" data-shadow="false">Share</a></p>
    </div><!-- /content -->
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
