<?php

$text = "А роза упала на лапу Азора";
$result = 'палиндром';

$text1 = mb_strtolower($text);
$text2 = str_replace(" ","",$text1);
$length = mb_strlen($text2);
$halflength = floor($length / 2);

for ($i = 0; $i <= $halflength; $i++){
$left = mb_substr($text2,$i,1);
$right = mb_substr($text2,($length-1)-$i,1);
if($left != $right){
    echo "На $i сравнении эта фраза оказалась не $result";
    break;
}if ($left == $right){
    echo "На $i сравнении эта фраза $result <br />";
    }
}

