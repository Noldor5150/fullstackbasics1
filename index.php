<?php

$sheep = ['scheise'];
for ($i = 1; $i < 5; $i++) {
    $sheep[$i] = &$sheep[$i - 1];
}
foreach ($sheep as $key => $value) {
    unset($sheep[$key]);
    $sheep[$key] = $value;
}
$sheep[1] = 'sabaka';
var_dump($sheep);
?>