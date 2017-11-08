<?php
function lowestUniqueNumber ($numbers){
    $numbers = explode(" ", $numbers);
    $intNumbers = array();
    $new = array();
    for ($i=0; $i<count($numbers); $i++){
        $intNumbers[] = intval($numbers[$i]);
    }
    $new = array_count_values($intNumbers);

    $new = array_filter($new, "one");
    $vinNumber = sortArrayAndGetFirstKey($new);
    if ($vinNumber!=null) {
        return array_search($vinNumber, $intNumbers) + 1 ."\n";
    } else {
        return "0 \n";
    }
}
function sortArrayAndGetFirstKey($array){
    ksort($array);
    foreach ($array as $key=>$val){
        return $key;
    }
}
function one ($numb){
    return $numb == 1;
}
print lowestUniqueNumber("3 3 9 1 6 5 8 1 5 3");
print lowestUniqueNumber("9 2 9 9 1 8 8 8 2 1 1");