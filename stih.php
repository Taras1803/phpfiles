<?php

$word1 = array('Чудесных', 'Суровых', 'Занятных', 'Внезапных');
$word2 = array('слов', 'зим', 'глаз', 'дней', 'лет', 'мир', 'взор');
$word3 = array('прикосновений', 'поползновений', 'судьбы явлений',
'сухие листья', 'морщины смерти', 'долины края', 'замены нету',
'сухая юность', 'навек исчезнув');
$word4 = array('обретаю', ' понимаю', 'начертаю', 'закрываю', 'оставляю',
'вынимаю', 'умираю', 'замерзаю', 'выделяю');
$word5 = array('очертания', 'безысходность', 'начертанья', 'смысл жизни',
'вирус смерти', 'радость мира');

for ($z = 0; $z < 4; $z++) {
    for ($i = 0; $i < 2; $i++) {
        $w1 = array_rand($word1);
        $w11 = $word1[$w1];
        $w2 = array_rand($word2);
        $w22 = $word2[$w2];
        $w3 = array_rand($word3);
        $w33 = $word3[$w3];
        $w4 = array_rand($word4);
        $w44 = $word4[$w4];
        $w5 = array_rand($word5);
        $w55 = $word5[$w5];
        $words = array($w11, ' ', $w22, ' ', $w33, ' ', '<br />');
        foreach ($words as $t)
            echo $t;
    }
    echo "Я " . $w44 . " " . $w55 . "<br/>" . "<br/>";
}



