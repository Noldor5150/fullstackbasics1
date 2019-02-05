<?php

$sheep = ['scheise', 'bliat', 'suca', 'subine', 'zanuda'];
for ($i = 0; $i < 5; $i++) {
    $sheep[$i] = &$sheep[0];
}
var_dump($sheep);
