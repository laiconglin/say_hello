<?php
require_once('config.php');
$dbh = null;
try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser, $dbpassword);
    /*** echo a message saying we have connected ***/
    //echo 'Connected to database';
}
catch(PDOException $e){
    echo $e->getMessage();
} 
?>
