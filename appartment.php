<?php
define("QUANTITY_FLOOR", 4);
define("QUANTITY_ENTRANCE", 10);
$handle = fopen ("php://stdin","r");
end:
echo "Enter appartment please\n";
$appartment = fgets($handle);
echo "Enter number of floor please\n";
$floor = fgets($handle);
if ($appartment > $floor * QUANTITY_FLOOR * QUANTITY_ENTRANCE ) {
echo "In this house there is no such apartment\n";
    goto end;
}
$maxFloorEntrance = QUANTITY_FLOOR * $floor;
$numberEntrance = ceil($appartment / (QUANTITY_FLOOR * $floor));
$totalNumberFloor = ceil($appartment/QUANTITY_FLOOR);
if ( $totalNumberFloor % $floor == 0){
    $numberFloor = $floor;
}
else
    $numberFloor = $totalNumberFloor % $floor;
echo "Entrance = $numberEntrance\nFloor = $numberFloor\n";