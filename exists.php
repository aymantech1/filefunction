<?php

if(file_exists("test.txt")){
    echo "Yes";
}
else{
    echo "No";
}
echo "<br>";
$size = filesize("test.txt");
echo $size;