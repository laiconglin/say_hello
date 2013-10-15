<?php
session_start();
require_once('db_query.php');
//echo auth("lai","231711");
//echo insert_new_article("hello", "fafadsfasdfadsf", "lai", ""); 
//
echo "<pre>";
echo update_article_by_id(14, "hello", "update it");
echo "</pre>";
?>

