<?php
$dishes = [
    [
        'name' => 'Eggplant salad',
        'price' => 7.77,
        'style' => 'eggplant',
        'ingridients' => [
            'Nuts',
            'Joghurt'
        ]
    ],
    [
        'name' => 'Bamboodish',
        'price' => 6.66,
        'style' => 'bamboo',
        'ingridients' => [
            'Rice',
            'More meat'
        ]
    ]
];
?>
<html>
    <head>
        <title>Dishes uzduotis</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <?php foreach ($dishes as $dish): ?>
            <div class="<?php print $dish['style']; ?>">
                <h2><?php print $dish['name']; ?></h2>
                <ul>
                    <?php foreach ($dish['ingridients'] as $part): ?>
                        <li><?php print $part; ?></li>
                    <?php endforeach; ?>
                </ul>
                <p class="dish-info">Kaina: <?php print $dish['price']; ?> Eur</p>
            </div>
        <?php endforeach; ?>
    </body>
</html>