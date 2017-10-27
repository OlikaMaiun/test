<?php
function sameNumb ($numbers){
    $arr = explode(";", $numbers);
    $str1 = $arr[0];
    $str2 = $arr[1];
    $arr1 = explode(",", $str1);
    $arr2 = explode(",", $str2);
    $result = array_intersect($arr1, $arr2);
   if ($result){
       echo join(",", $result) ."\n";
   } else {
       echo "\n";
   }
}
sameNumb("1,2,3,4;4,2,6");
sameNumb("4,7,23;75,3,2,6");
sameNumb("6,4,5,9;9,4,99,87");
