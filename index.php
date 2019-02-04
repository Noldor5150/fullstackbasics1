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

function pzdamat($termometras1) {
    foreach ($termometras1 as &$parametras) {

        $parametras['color'] = 'red';
    }
    return $termometras1;
}
$termometras = pzdamat($termometras);
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


