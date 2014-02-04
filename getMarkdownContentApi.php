<?php
require_once('tools.php');
$new_title = "什么是HTML5？";
if(isset($_POST['title'])) {
    $new_title = $_POST['title'];
    //echo $new_title."<br/>";
}
$new_content = "test hello";
$result = Array();
if(isset($_POST['content'])) {
    $new_content = $_POST['content'];
    $result['title'] = $new_title;
    $new_content_markdown = convert2MarkdownFormat($new_content);
    $result['content_markdown'] = $new_content_markdown;
    echo json_encode($result);
}
else{
    $result['error'] = "true";
    echo json_encode($result);
}
?>
