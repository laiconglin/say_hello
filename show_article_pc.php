<?php
require_once('check_login.php');
if(isset($_GET['article_id'])){
    $article = select_article_by_id($_GET['article_id']);
    $title = $article['title'];
    $content = $article['content_markdown'];
    $author = $article['author_name'];;
    $create_date = $article['create_time'];
    $theme = $article['theme'];
    $publish_info = "Post By ".$author." on ".$create_date;
    $edit_article_url = "/say_hello/edit_article_pc.php?article_id=".$_GET['article_id'];
}
else{
   redirect('/say_hello/index_pc.php'); 
}

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <!-- here to support to copy Evernote -->
    <link href="css/styles/solarized-dark.css" rel="stylesheet" type="text/css">
    <script src="rainbow-custom.min.js"></script>
    <script src="utils.js"></script>
    <script>
    $(document).ready(function(){
        var user_name = getCookie("say_hello_username");
        console.log("hello world:" + user_name);
        //Rainbow.color();
    });

    </script>
    <link href="css/style_pc.css" rel="stylesheet" type="text/css">
</head>
<body>
        <h3 style="text-align:center;"><?php echo $title; ?> </h3>
        <p class="article-ul-li-span"><?php echo $publish_info; ?> </p>
        <?php echo $content; ?>
        <p><a href="<?php echo $edit_article_url; ?>" >编辑</a></p>

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
    <p>Copyright &copy; 2013 Conglin Lai</p>
</body>
</html>
