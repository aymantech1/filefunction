<?php

if($file = fopen("test1.txt","x")){
    echo "Yes";
}
else{
    echo "No";
}
    
fwrite($file,"I am Nirjhore");

fclose($file);

echo "<br>";

$getContent = file_get_contents("test.txt");

echo $getContent;