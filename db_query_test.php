<?php
session_start();
require_once('db_query.php');
//echo auth("lai","231711");
//echo insert_new_article("hello", "fafadsfasdfadsf", "lai", ""); 
//
echo "<pre>";
print_r(select_article_by_id(1));
echo "</pre>";
?>

