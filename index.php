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
$slotai = slot_run(3, 3);
?>
<html>
    <head>
        <title>Foras fore f-ja</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <?php foreach ($slotai as $eiles): ?>
            <div class="flex">
                <?php foreach ($eiles as $stulpai): ?>
                    <div class="klase-<?php print $stulpai ?>"></div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </body>
</html>




