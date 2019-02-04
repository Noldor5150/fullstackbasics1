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
    '0 lygis',
    '1 lygis',
    'antas lygis',
    '3 lygis'
];

function history($x1, $l) {
    $newhistory =[];
    foreach ($x1 as $key => $parametras) {
        if ($key <= $l) {
             $newhistory[] = $parametras;
        }
    }
    return $newhistory;
}
$istorijos = history($istorijos, rand(0, 3));
var_dump($istorijos);


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

$termometras = pzdamat($termometras, rand(0, 3));

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
    </body>
</html>


