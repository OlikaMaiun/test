<?php
function swapCase ($string){
    $string = str_split($string);
    $finalString = array();
    for ($i=0; $i<count($string); $i++){
        if(ctype_upper($string[$i])){
            $finalString[] = strtolower($string[$i]);
        } else{
            $finalString[] = strtoupper($string[$i]);
        }
    }
    return implode($finalString). "\n";
}
echo swapCase("Hello world!");
echo swapCase("JavaScript language 1.8");