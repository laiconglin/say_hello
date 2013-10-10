<?php
require_once('check_login.php');
require_once('tools.php');
$new_title = "什么是HTML5？";
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
$new_content = "test hello";
$theme = "default";
if(isset($_POST['theme'])) {
    $new_content = $_POST['theme'];
    //echo $new_content."<br/>";
}
$author = $_COOKIE['say_hello_username'];
$date_today = date("F j, Y, g:i a");
$new_publish_info = "Post By ".$author." on ".$date_today;
if(isset($_POST['content'])) {
    $new_content = $_POST['content'];
    //echo $new_content."<br/>";
    $article_id = insert_new_article($new_title, $new_content, $author, $theme);
    if ($article_id > 0) {
        redirect("/say_hello/show_article.php?article_id=$article_id");
    }
    else {
        echo "error;";
    }
}
?>
