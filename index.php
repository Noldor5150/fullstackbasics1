<?php
function slot_run($rows, $cols) {
    $array = [];
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $array[$i][$j] = rand(0, 1);
        }
    }
    return $array;
}
var_dump(slot_run(3, 4));
?>





