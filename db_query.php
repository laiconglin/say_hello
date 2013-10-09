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
        //echo 'Connected to database';
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
function insert_new_article($title, $content, $author, $theme){
    try{
        $dbh = getDBHandle();
        /*** set the error reporting attribute ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $dbh->prepare('insert into articles (`id`, `title`, `content`, `author_name`, `create_time`, `theme`) values (NULL, :title, :content, :author, CURRENT_TIMESTAMP, :theme)');
        $stmt->bindParam(':title',   $title);
        $stmt->bindParam(':content', $content);
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
        $stmt = $dbh->prepare("SELECT * FROM articles where id=:id");
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $all = $stmt->fetchAll();
        $row = $all[0];
    } 
    catch(PDOException $e) {
        echo $e->getMessage();
        return 0;
    }

    $result['title'] = $row['title'];
    $result['content'] = $row['content'];
    $result['author_name'] = $row['author_name'];
    $result['create_time'] = $row['create_time'];
    $result['theme'] = $row['theme'];
    return $result;
}


?>
