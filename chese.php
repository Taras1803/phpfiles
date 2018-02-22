<?php
$handle = fopen ("php://stdin","r");
echo "enter string\n";
$strings = fgets($handle);
echo "enter columns\n";
$columns = fgets($handle);
for ($i = 0; $i < $strings ; $i++) {
    for ($r = 0; $r < $columns; $r++) {
        if ($i % 2){
        if ($r % 2) echo "_";
            else echo "#";
        }else {
            if ($r % 2) echo "#";
        else echo "_";
        }
        }
    echo "\n";
}