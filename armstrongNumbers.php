<?php
function armstrongNumbers ($testNumber){
    $arrNumbers = str_split($testNumber);
    $degree = count($arrNumbers);
   for ($i=0; $i<$degree; $i++){
       $arrNumbers[$i]=pow($arrNumbers[$i], $degree);
   }
   $sumOfNumber = array_sum($arrNumbers);
    if ($sumOfNumber==$testNumber){
        return "True \n";
    }else{
        return "False \n";
    }
}
echo armstrongNumbers("153");
echo armstrongNumbers("351");
echo armstrongNumbers("8654");
echo armstrongNumbers("6");
echo armstrongNumbers("831");