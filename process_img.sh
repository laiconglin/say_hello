file_name=$1

flag=`identify -verbose $file_name | grep "exif:Orientation:" | cut -c 23-`
if (( flag == 6 ))
then
    #echo "rotate";
    convert $file_name -rotate 90 $file_name
fi

flag=`identify -format "%w" $file_name`
if (( flag > 1000 ))
then
    #echo "too large";
    convert $file_name -resize 640x960 $file_name
fi
convert -strip -interlace Plane -gaussian-blur 0.05 -quality 85%  $file_name $file_name
