<?php
$dishes = [
    [
        'name' => 'Nut salad',
        'price' => 3.44,
        'ingridients' => [
            'Nuts',
            'Joghurt'
        ]
    ],
    [
        'name' => 'Bulldish',
        'price' => 4.77,
        'ingridients' => [
            'Rice',
            'Soya'
        ]
    ]
];
?>
<html>
    <head>
        <title>Dishes uzduotis</title>            
    </head>
    <body>
        <div>
            <?php foreach ($dishes as $dish): ?>
                <h2><?php print $dish['name'] . ': ' . $dish['price']; ?></h2>
                <ul>
                    <?php foreach ($dish['ingridients'] as $part) : ?>
                        <li><?php print $part ; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>
        </div>
    </body>
</html>