<?php
require_once('db_connect.php');
function auth($username, $password) { 
    try{
        $dbh = $GLOBALS['dbh'];
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
?>
