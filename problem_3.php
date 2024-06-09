<?php

//Given a sentence, keep the order of the words same, but reverse the characters of each word.  

$mainStr = 'I Love Programming';
$arrs = explode(' ',$mainStr);
$mainRevStr = '';
$inc = 1;
foreach($arrs as $arr){
$str = $arr;

$revStr = '';
for($i=(strlen($str)-1);$i>=0;$i--){
$revStr .= $str[$i];

}

if(count($arrs)==$inc){
    $mainRevStr .= $revStr;
}else{
    $mainRevStr .= $revStr.' ';
}

$inc++;
}

$finalResult =  '`'.$mainRevStr.'`';

echo $finalResult;