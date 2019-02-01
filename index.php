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
function slot_check($array) {
    $winners = [];
    foreach ($array as $key => $value) {
        if (array_sum($value) == count($value)) {
            $winners[] = $key;
        }
    };
    return $winners;
}
$game = slot_run(3, 3);
var_dump(slot_check($game));
?>
<html>
    <head>
        <title>Function slotRun</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <table>
            <?php foreach ($game as $cols): ?>
                <tr>
                    <?php foreach ($cols as $col): ?>
                        <td class="<?php print ($col ? 'gold' : 'silver'); ?>"></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>

   
