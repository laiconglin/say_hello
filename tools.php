<?php
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

?>
