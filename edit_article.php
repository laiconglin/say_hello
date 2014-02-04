<?php
require_once('check_login.php');
if(isset($_GET['article_id'])){
    $article = select_article_by_id($_GET['article_id']);
    $title = $article['title'];
    $content = $article['content'];
    $author = $article['author_name'];;
    $create_date = $article['create_time'];
    $theme = $article['theme'];
    $publish_info = "Post By ".$author." on ".$create_date;
    $show_article_url = "/say_hello/show_article.php?article_id=".$_GET['article_id'];
    $update_article_url = "/say_hello/update_posted_article.php?article_id=".$_GET['article_id'];
}
else{
   redirect('/say_hello/index.php'); 
}

?>
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
    <script src="http://malsup.github.com/jquery.form.js"></script> 
    <!-- here to support to copy Evernote -->
    <link href="css/styles/solarized-dark.css" rel="stylesheet" type="text/css">
    <script src="rainbow-custom.min.js"></script>
    <script src="form_editor.js"></script>
    <script>
    var result;
    $(document).ready(function(){
        var user_name = getCookie("say_hello_username");
        console.log("hello world");
        $("img#top_user_thumbnail").attr("src","/say_hello/images/thumbnail_" + user_name + ".png");
        $("div#top_user_name").text(user_name);

        textarea_supporttab();
        result = add_preview_click_event();
        init_upload_img();

    });
    </script>
    <style>
        #progress { position:relative; width:100%; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
        #bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
        #percent { position:absolute; display:inline-block; top:3px; left:48%; }
    </style>
    
</head>
<body>
<div data-role="page" id="posted_something" data-theme="d" data-title="评评灌灌">
    <div data-role="header" data-theme="c">
        <h2>评评灌灌</h2>
        <a href="#left-panel" data-icon="bars" data-iconpos="notext" >Menu</a>
    </div><!-- /header -->

    <div data-role="content" style="background:#46463C url(/say_hello/images/bg.png);" >
        <div class="article article-content">
            <fieldset data-role="controlgroup" data-type="horizontal">
                <input type="radio" name="editor-mode" id="editor-mode-a" value="on" checked="checked">
                <label for="editor-mode-a">编辑</label>
                <input type="radio" name="editor-mode" id="editor-mode-b" value="off">
                <label for="editor-mode-b">预览</label>
            </fieldset>
            <div id='fileuploader'>
                <form action="/say_hello/upload_file.php" method="post" enctype="multipart/form-data" id="upload_form" style="margin-bottom:0;">
                        <input type="file" name="file" id="file" data-mini="true" data-inline="true" value="选择图片">
                        <a data-role="button" data-inline="true" data-mini="true" id="upload_image_submit">上传图片</a>
                </form>
            </div>
            <div id="progress" style="display:none;">
                <div id="bar"></div>
                <div id="percent">0%</div >
            </div>
            <div id="message" style="display:none;"></div>
            <form id="contents" action="<?php echo $update_article_url; ?>"  method="post">
                <label for="title">标题:</label>
                <input type="text" name="title" id="content_input_title" value="<?php echo $title; ?>">
                <label for="content">正文:</label>
                <textarea name="content" id="content_textarea" style="height:160px;"><?php echo $content; ?></textarea>
                <input type="submit" value="保存" data-iconpos="left" data-inline="true" data-icon="check" data-mini="true" data-theme="e">
                <a href="<?php echo $show_article_url; ?>" data-role="button" data-mini="true" data-icon="delete" data-inline="true">取消</a>
            </form>
            <div class="article article-content" id="article_preview" style="display:none;">
                <h3 style="text-align:center;" id="article_preview_title"><?php echo $title; ?> </h3>
                <p class="article-ul-li-span"><?php echo $publish_info; ?> </p>
                <div class="article-content-html" id="article_preview_content"></div>
            </div><!-- /article -->
        </div><!-- /edit article -->
    </div><!-- /content -->

    <div data-role="panel" id="left-panel" data-theme="c">
          <ul data-role="listview">
            <li><a href="#" data-rel="close"><img id="top_user_thumbnail" /><div id="top_user_name" style="font-size:40px;text-align:center;vertical-align:middle;"></div></a></li>
            <li><a href="/say_hello/index.php">首页</a></li>
            <li><a href="/say_hello/write_something.php">写点东西</a></li>
            <li><a href="/say_hello/logout.php">退出</a></li>
          </ul>
    </div>
    <!-- /panel 
    <div data-role="panel" id="right-panel" data-display="overlay" data-position="right" data-theme="c">
        <ul data-role="listview" data-theme="d" data-icon="false">
            <li data-icon="delete"><a href="#" data-rel="close">Close</a></li>
            <li data-role="list-divider">Share this page</li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Google +</a></li>
            <li><a href="#">Mail</a></li>
        </ul>
    </div> 
    -->
    <div data-role="footer" data-theme="c">
        <p>Copyright &copy; 2013 Conglin Lai</p>
    </div>
</div><!--page-->
</body>
</html>
