<?php
function slag ($name, $surname){
    if($name=="Olha"){
        print "You can enter.";
    } else {
        print "It's not your account!";
    }
}

slag("Olha", "Maiun");

$number = "7";
$arr = array();
$numb = intval($number);
if($numb==1){
    echo 1;
}else{
    while ($numb!=1 || ! in_array($numb,$arr)){
        $arr[]=$numb;
        if ($numb < 10){
            $numb = $numb * $numb;
        }elseif ($numb >= 10){
            $arr1= array();
            for ($i=0; $i<=strlen($number); $i++){
                $arr1[] = $i*$i;
            }
            $numb = array_sum($arr1);
        }
        if ($numb==1){
            echo 1;

        }elseif(in_array($numb,$arr)){
            echo 0;

        }
    }
}