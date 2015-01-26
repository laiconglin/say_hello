<?php
//support Markdown syntax
require_once('php-markdown/Michelf/Markdown.inc.php');
use \Michelf\Markdown;
//==== Redirect... Try PHP header redirect, then Java redirect, then try http redirect.:
function redirect($url){
    $url = "http://".$_SERVER['HTTP_HOST'].$url; 
    //if (!headers_sent()){    //If headers not sent yet... then do php redirect
    //    header('Location: '.$url); exit;
    //}else{                    //If headers are sent... do java redirect... if java disabled, do html redirect.
        echo '<html>';
        echo '<head>';
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>';
        echo '</head>';
        echo '</html>';
        exit;
    //}
}//==== End -- Redirect

function getDeviceType(){
    require_once './Mobile-Detect/Mobile_Detect.php';
    $detect = new Mobile_Detect;
    $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
    return $deviceType;
}

function convert2MarkdownFormat($new_content) {
    $new_content_markdown = $new_content;
    $new_content_markdown = Markdown::defaultTransform($new_content_markdown);
    $markdown_search = array("<code>", "</code>", "<code>code data-", "endcode\n");
    $markdown_replace = array("<pre><code>", "</code></pre>", "<code data-", ">");
    $new_content_markdown = str_replace($markdown_search, $markdown_replace, $new_content_markdown);
    $markdown_search = array("<pre><pre>", "</pre></pre>");
    $markdown_replace = array("<pre>", "</pre>");
    $new_content_markdown = str_replace($markdown_search, $markdown_replace, $new_content_markdown);
    return $new_content_markdown;
}

?>
