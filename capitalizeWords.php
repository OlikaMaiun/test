<?php
function capitalizeWords($string){
$string = ucwords($string);
return$string. "\n";
}
echo capitalizeWords("Hello world");
echo capitalizeWords("javaScript language");
echo capitalizeWords("a letter");