
<?php
$termometras = [
    [
        'forma' => 'apskritimas',
        'spalva' => 'zalia',
        'textas' => 'AS'
    ],
    [
        'forma' => 'kvadratas',
        'spalva' => 'zalia',
        'textas' => 'B'
    ],
    [
        'forma' => 'kvadratas',
        'spalva' => 'orange',
        'textas' => 'B'
    ],
    [
        'forma' => 'kvadratas',
        'spalva' => 'raudona',
        'textas' => 'D'
    ]
];
var_dump($termometras);
?>
?>
<html>
    <head>
        <title>About</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <div class=“termometras”>
        <?php foreach ($termometras as $key => $value): ?>
            <?php if ($key == $names[$term_rand]): ?>
                <div><?php print $names[$term_rand]; ?></div>
            <?php else: ?>
                <div class="padala">Nieko</div>
            <?php endif; ?>
        <?php endforeach; ?>

    </div>
</body>
</html>
   
