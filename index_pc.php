<?php
require_once('check_login.php');
$all_articles = select_articles();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <script src="utils.js"></script>
</head>
<body>

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
        echo "<div class='article'>";
        echo "<ul style='margin:0px;'>";
        echo "<li>";
        echo "<a href=\"/say_hello/show_article_pc.php?article_id=$article_id\">";
        echo "<h3> $title</h3>";
        echo "<p class=\"article-span\"> $publish_info</p>";
        echo "</a>";
        echo "</li>";
        echo "</ul>";
        echo "</div>";
    }
?>

</body>
</html>
