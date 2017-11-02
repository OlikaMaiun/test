<?php
function beautifulStrings ($string){
    $beauty = range("a","z");
    $arrString = str_split($string);
    $counter = 0;
    for ($i=0; $i<count($arrString); $i++) {
        $index = array_search($arrString[$i],$beauty)+ 1;
        $counter = $counter + $index;
    }

    return $counter;
}
echo beautifulStrings('zz');
