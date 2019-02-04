<?php
$termometras = [
    [
        'text' => 'as',
        'color' => 'green',
        'form' => 'apskritimas',
    ],
    [
        'text' => 'B',
        'color' => 'green',
        'form' => 'kvadratas',
    ],
    [
        'text' => 'B',
        'color' => 'orange',
        'form' => 'kvadratas',
    ],
    [
        'text' => 'D',
        'color' => 'red',
        'form' => 'kvadratas',
    ],
];

function pzdamat($x1 ,$l) {
    foreach ($x1 as $key => $parametras) {
        $x1[$key]['color'] = 'pilka';
    }
    $x1[$l]['color'] = 'red';
    return $x1;
}
$termometras = pzdamat($termometras, 1);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>termometras</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div id="flexContainer">
            <?php foreach ($termometras as $parametras): ?>
                <div class='block <?php print $parametras['color'] . ' ' . $parametras['form']; ?>'>
                    <span>   <?php print $parametras['text']; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>


