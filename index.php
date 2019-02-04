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
            <?php foreach ($termometras as $key => $value): ?>
                <div class='block <?php print $termometras[$key]['color'].' '. $termometras[$key]['form']; ?>'>
                        <?php print $termometras[$key]['text']; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>


