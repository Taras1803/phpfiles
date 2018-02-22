<?php

$handle = fopen ("php://stdin","r");
$num = fgets($handle);

$regex = "/^(\\+7|8|\\+\\s7)(([()-]|\\s)*[0-9]\\s?){10}$/ui";

if(preg_match($regex, $num)){
    echo "номер $num введен корректно\n ";
    $regex2 = "/[^0-9]/";
    $changenumber = preg_replace($regex2,"", $num);
    $regex3 = "/(7)([0-9]{10})/";
    if(preg_match($regex3,$changenumber)){
        $changenumber2 = preg_replace($regex3,'8$2',$changenumber);
        echo " Скорректированная версия $changenumber2\n";
    }else
    echo "Скорректированная версия $changenumber";
}else
    echo "номер $num ВВЕДЕН НЕ КОРЕКТНО";