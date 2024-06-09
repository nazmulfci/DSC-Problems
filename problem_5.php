<?php
$number = 62343;
$sum = 0;

while($number>0){
    $lastValue = $number%10;
    $number = (int)$number/10;
    $sum += $lastValue;
}
echo $sum;
