<?php

// Outputs all the result of shellcommand "ls", and returns
// the last output line into $last_line. Stores the return value
// of the shell command in $retval.
            $file_name = "upload/IMG_0005.JPG";
$cmd = "identify -verbose ".$file_name." | grep 'exif:Orientation:' | cut -c 23-";
$last_line = system("identify", $retval);

// Printing additional info

$file_name = $_GET['name'];

$file_name = "upload/".$file_name;
echo exec("ls -l")."<br>";
            //$file_name = "upload/IMG_0005.JPG";
            $flag = exec("identify -verbose ".$file_name."| grep 'exif:Orientation:' | cut -c 23-");
            echo "flag:".$flag."<br>";
            if($flag == 6) {
                echo "rotate";
                exec("convert ".$file_name." -rotate 90 ".$file_name); 
            }
            $flag = exec("identify -format '%w' ".$file_name);
            echo "flag:".$flag;
            if($flag > 1000) {
                echo "bigger";
                exec("convert ".$file_name." -resize 640x960 ".$file_name);
            }
            exec("convert -strip -interlace Plane -gaussian-blur 0.05 -quality 85% ".$file_name." ".$file_name);
?>
