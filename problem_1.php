<?php
// Given a list of integers, find the minimum of their absolute values. 

// $arr = [10, 12, 15, 189, 22, 2, 34];
$arr = [10, -12, 34, 12, -3, 123];

$min = abs($arr[0]);

for($i=0;$i<count($arr);$i++){
    $cValue=abs($arr[$i]);
    if($cValue<$min){
        $min = $cValue;
    }
}

echo $min;