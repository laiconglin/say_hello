<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$extension = strtolower($extension);
$result = array();
        //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        //echo "Type: " . $_FILES["file"]["type"] . "<br>";
        //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/x-png")
    || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 20000000)
    && in_array($extension, $allowedExts))
{
    if ($_FILES["file"]["error"] > 0)
    {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
        //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        //echo "Type: " . $_FILES["file"]["type"] . "<br>";
        //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
        $now_time = time();
        $file_name = "upload/hello_" . $now_time . "_" .$_FILES["file"]["name"];
        if (file_exists($file_name))
        {
            echo  $file_name. " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],$file_name);
            $result['file_path'] = $file_name;
            //exec("sh process_img.sh ".$file_name);
            $flag = exec("identify -verbose ".$file_name." | grep 'exif:Orientation:' | cut -c 23-");
            $result['flag'] = $flag;
            if($flag == 6) {
                //echo "rotate";
                exec("convert ".$file_name." -rotate 90 ".$file_name); 
            }
            $flag = exec("identify -format '%w' ".$file_name);
            if($flag > 1000) {
                //echo "bigger";
                exec("convert ".$file_name." -resize 640x960 ".$file_name);
            }
            if($_FILES["file"]["size"] > 200000) {
                exec("convert -strip -interlace Plane -gaussian-blur 0.05 -quality 85% ".$file_name." ".$file_name);
            }
            echo json_encode($result);
        }
    }
}
else
{
    echo "type:".$_FILES["file"]["type"]." size:".$_FILES["file"]["size"]." error";
}
?>
