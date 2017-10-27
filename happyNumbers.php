<?php
function happy($number){
    $arr = array();
    $numb = intval($number);
    if($numb==1){
        echo 1;
    }else{
       findNotOneHappyNumber($numb, $arr);
    }
}
function printResult ($num){
    if ($num==1){
        echo 1;
    }else{
        echo 0;
    }
}
function findNotOneHappyNumber ($intNumber, $foundNumbers){
    while ($intNumber!=1 && !in_array($intNumber, $foundNumbers)){
        $foundNumbers[]=$intNumber;
        $strNumber = strval($intNumber);
        if ($intNumber < 10){
            $intNumber = $intNumber * $intNumber;
        }elseif ($intNumber >= 10){
            $arr1= array();
            for ($i=0; $i<strlen($strNumber); $i++){
                $arr1[] = $strNumber[$i]*$strNumber[$i];
            }
            $intNumber = array_sum($arr1);
        }
    }
    printResult($intNumber);
}

//happy("22");
happy("7");