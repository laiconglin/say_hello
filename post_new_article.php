<?php
require_once('check_login.php');
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
$new_content = "<p>一旦你真正理解了HTML5，将会改变你对web的思维方式。<br/></p><p>HTML5：每个人都在使用它，但是几乎没有人知道它是什么。我意识到这个听起来就像是某部电影-由Sartre编剧的Waiting for Godot. 但这个确实是个事实，大多数人把HTML5当作HTML4+来使用，甚至更糟糕的是，HTML4（当然还有一些东西他们根本就不用）。现在当然还不是时候转移目标，因为当你回头看的时候，你也许会忽略HTML5所带来的一些很细微但是很重要的东西。<br/></p><p>在这里，我想更加深入的研究HTML5。我想化繁为简，HTML5即是某种全新的事物，同时它也仅仅是HTML。然后一旦你理解了HTML5，将会改变你现在的code方式，甚至改变你对web和你自己的web应用的思维方式。<br/><h4>1. 回归本源</h4></p><p>HTML总是被用来作为相互连接的东西。回到web远古时代，web因为各种大文件而一度被人们废弃一旁。90年代，web充斥着15页的说明书，所有的内容都在一个单独的文件里面，你必须滚动以便来查找这些超大的文件，就像你查阅大百科全书一样。大部分早期的HTML版本都是来处理这一类问题的，被普遍认为可读性和可用性极差。这主要是因为Tim Berners-Lee(被认为是HTML之父)是一个为了让其他也在CERN的研究员也能明白的研究员。如果你曾经认识某一个在该项目中深陷泥潭的人，你就会知道他们的字典里就没有简洁这两个字，因此在线阅读超长篇幅的文档就很有必要了，但是在web上滚动一个15页甚至1500页的文档，并非长远之计。<br/></p><p>因此，在很早的时候，HTML并不是主要用来显示那些格式化好的文档的。对于HTML来说，其根本非常简单，就是一个tag。它使得一个文档可以链接到另外一个文档。这样突然的，15页的文档就变成了15个单页的文档，再将他们全部链接起来，这样就可以解决前面的问题了。跟滚动说拜拜，向有用的链接说你好(Bye bye scrolling, hello useful linking)。这就是所有标准的东西了，如果这些东西对于你来说很新鲜，那么现在可以这么说，这里的水很快就会变得很深了。<br/><h4>2.HTML5仍然连接内容</h4></p><p>回到现在， 最终，连接互联网上各种内容的能力仍然是HTML5的主要特征。就像现在一样，我们开始了解到HTML5的本来的面目，用来连接大量的超文本和静态图片。因此介绍在HTML5中的audio 和video 元素，只不过是以前的元素的逻辑上的一个扩展而已。<br/></p><p>(注：更加准确的说法是，audio 和video 代替了object 和其他人们长期以来嵌入到web网页中的代码，
大量的从类似YouTube之类的网站上抓取。而且，而且这些元素不仅仅有语义上的功能，而且还是把这些链接的内容抓到一个页面中，而不是让你跳转到另外一个网页，那就是说，甚至像 img , 在某种程度上说，它也是从另外一个链接或者地址抓取图片信息到一个网页中。它们都都是仅仅是个链接而已，这就是为什么说，HTML 实际上是关于：链接和连接内容。)<br/></p><p>因此，现在你可以将图片，音频，视频等直接放到一个文档中。更加重要的是，因为这些东西已经成为了第一等公民，你可以很容易的通过JavaScript来操纵音频和视频内容。这是个很重要的事，我之后将会跟你解释。简单来说，一个一等公民的元素，将会鼓励你更多直接的通过编程方式来访问该内容，而不是你总是得用一个很底层或者很狡猾的方式来得到它。因此尽管audio 和video是新的，但是他们的目的一点也不新。HTML5 允许你将更多的资源集成到";
if(isset($_POST['content'])) {
    $new_content = $_POST['content'];
    //echo $new_content."<br/>";
}
$author = $_COOKIE['say_hello_username'];
$date_today = date("F j, Y, g:i a");
$new_publish_info = "Post By ".$author." on ".$date_today;

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link rel="stylesheet" href="jquery.mobile-1.3.1.css" />
    <script src="jquery.min.js">
    </script>
    <script src="jquery.mobile-1.3.1.js"></script>  
    <link rel="stylesheet" href="css/style.css" /> 
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
        <h2>评评灌灌 - 发表成功</h2>
        <a href="#left-panel" data-icon="bars" data-iconpos="notext" >Menu</a>
    </div><!-- /header -->

    <div data-role="content" style="background:#46463C url(/say_hello/images/bg.png);" >
        <div class="article article-content">
            <h3 style="text-align:center;"><?php echo $new_title; ?> </h3>
            <p class="article-ul-li-span"><?php echo $new_publish_info; ?> </p>
            <div class="article-content-html"> <?php echo $new_content; ?></div>
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
