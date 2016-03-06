<?php

$getContent = file_get_contents("test.txt");

echo $getContent;

echo"<br>";

$putContent = "BITM";

if(file_put_contents("putting.txt", $putContent)){
    echo "Puttuing Successful";
}
else{
    echo "Putting Not Successful";

}