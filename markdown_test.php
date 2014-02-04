<?php
require_once('php-markdown/Michelf/Markdown.php');
use \Michelf\Markdown;
$text = "### 小标题";

echo Markdown::defaultTransform($text);

?>
