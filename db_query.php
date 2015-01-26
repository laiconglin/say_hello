<?php
require_once('config.php');
function getDBHandle(){
    try {
        $hostname = $GLOBALS['hostname'];
        $dbname = $GLOBALS['dbname'];
        $dbuser = $GLOBALS['dbuser'];
        $dbpassword = $GLOBALS['dbpassword'];
        $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser, $dbpassword);
        /*** echo a message saying we have connected ***/
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    return $dbh;
}
function auth($username, $password) { 
    try{
        $dbh = getDBHandle();
        $password = md5($password);
        $stmt = $dbh->prepare("SELECT * FROM user where name=:name AND password=:password");
        $stmt->bindParam(':name',$username);
        $stmt->bindParam(':password',$password);
        $stmt->execute();        
        $result = $stmt->fetchAll();
        /*** close the database connection ***/
        $dbh = null;
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    return count($result);
}
function insert_new_acc($name, $request_url) {
    try{
        $dbh = getDBHandle();
        /*** set the error reporting attribute ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->query('set names utf8;');
        $stmt = $dbh->prepare('insert into acc_log (`id`, `user_name`, `api_name`,`access_time`) values (NULL, :user_name, :url_name, CURRENT_TIMESTAMP)');
        $stmt->bindParam(':user_name',   $name);
        $stmt->bindParam(':url_name',   $request_url);
        $result = $stmt->execute();
        $result = $dbh->lastInsertId();
    } 
    catch(PDOException $e) {
        echo $e->getMessage();
        return 0;
    }
    return $result;
}
function insert_new_article($title, $content, $content_markdown, $author, $theme){
    try{
        $dbh = getDBHandle();
        /*** set the error reporting attribute ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->query('set names utf8;');
        $stmt = $dbh->prepare('insert into articles (`id`, `title`, `content`,`content_markdown`,  `author_name`, `create_time`, `theme`) values (NULL, :title, :content, :content_markdown, :author, CURRENT_TIMESTAMP, :theme)');
        $stmt->bindParam(':title',   $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':content_markdown', $content_markdown);
        $stmt->bindParam(':author',  $author);
        $stmt->bindParam(':theme',   $theme);
        $result = $stmt->execute();
        $result = $dbh->lastInsertId();
    } 
    catch(PDOException $e) {
        echo $e->getMessage();
        return 0;
    }
    return $result;
}
function select_article_by_id($id) {
    $result = array();
    try{
        $dbh = getDBHandle();
        /*** set the error reporting attribute ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->query('set names utf8;');
        $stmt = $dbh->prepare("SELECT * FROM articles where id = :id and author_name = :author_name");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':author_name', $_SESSION['username']);
        $stmt->execute();
        $all = $stmt->fetchAll();
        $row = $all[0];
    } 
    catch(PDOException $e) {
        echo $e->getMessage();
    }

    $result['title'] = $row['title'];
    $result['content'] = $row['content'];
    $result['content_markdown'] = $row['content_markdown'];
    $result['author_name'] = $row['author_name'];
    $result['create_time'] = $row['create_time'];
    $result['theme'] = $row['theme'];
    return $result;
}

function select_articles() {
    $result = array();
    try{
        $dbh = getDBHandle();
        /*** set the error reporting attribute ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->query('set names utf8;');
        $stmt = $dbh->prepare("SELECT id, title, author_name, create_time FROM articles where author_name = :author_name order by create_time desc");
        $stmt->bindParam(':author_name', $_SESSION['username']);
        $stmt->execute();
        $result = $stmt->fetchAll();
    } 
    catch(PDOException $e) {
        echo $e->getMessage();
        return 0;
    }

    return $result;
}


function update_article_by_id($id, $title, $content, $content_markdown){
    try{
        $dbh = getDBHandle();
        /*** set the error reporting attribute ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->query('set names utf8;');
        $stmt = $dbh->prepare("update articles set title=:title, content=:content , content_markdown=:content_markdown where id=:id");
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':title',$title);
        $stmt->bindParam(':content',$content);
        $stmt->bindParam(':content_markdown',$content_markdown);
        $result = $stmt->execute();
    } 
    catch(PDOException $e) {
        echo $e->getMessage();
    }
    return $result;
}
?>
