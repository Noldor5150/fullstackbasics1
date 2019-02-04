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

$istorijos = [
    [
        'storie' => '....once upon a time....',
        'color' => 'green',
    ],
    [
        'storie' => '...couple Bamboos were "fucking" around...',
        'color' => 'green',
    ],
    [
        'storie' => '...some Eggplants also did...',
        'color' => 'orange',
    ],
    [
        'storie' => '...so they met eachother, and drinking party began...',
        'color' => 'red',
    ],
];

function history($x1, $l) {
    $newhistory = [];
    foreach ($x1 as $key => $parametras) {
        if ($key <= $l) {
            $newhistory[] = $parametras;
        }
    }
    return $newhistory;
}

$bendras_random_skaicius = rand(0, 3);
$istorijos = history($istorijos, $bendras_random_skaicius);

function pzdamat($x1, $l) {
    foreach ($x1 as $key => $parametras) {
        if ($key > $l) {
            $x1[$key]['color'] = 'pilka';
        }
        $x1[$key]['show_text'] = false;
        if ($key <= $l) {
            $x1[$key]['show_text'] = true;
        }
    }
    return $x1;
}

$termometras = pzdamat($termometras, $bendras_random_skaicius);
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
                    <?php if ($parametras['show_text']): ?>
                        <span>   <?php print $parametras['text']; ?></span>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div id="stories">
            <ul id="stories">
                <?php foreach ($istorijos as $parametras): ?>
                    <li class="storie-<?php print $parametras['color'] ?>">
                        <?php print $parametras['storie'] ?>
                    </li>
                </ul>
            <?php endforeach; ?>
        </div>
    </body>
</html>


