<?php
function selfDescribingNumber ($number){
    $numberArr = str_split($number);
    for ($i=0; $i<strlen($number); $i++){
        $numberOfArr = array_keys($numberArr, $i);
        if(count($numberOfArr) != $numberArr[$i]){
            return 0;
        }
    }
    return 1;
}

echo selfDescribingNumber("2020");