<?php
function hexToDecimal ($hex){
    $decimal = hexdec($hex);
    return $decimal ."\n";
}
echo hexToDecimal("9f");
echo hexToDecimal("11");