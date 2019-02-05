<?php
$x = 0;
function change_x(&$x) {
    $x = 5;
}

change_x($x);
print $x; 
?>