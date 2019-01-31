<?php
function slot_run() {
    $slot = [];
    for ($i = 0; $i < 6; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $slot[$i][$j] = rand(0, 1);
        }
    }
    return $slot;
}
var_dump(slot_run());
?>






