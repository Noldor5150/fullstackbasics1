<?php
$balius = [
    [
        'pavadinimas' => 'Žuvis',
        'kiekis' => 1,
        'mato_vnt' => 'kibiras',
        'kas_atnese' => 'Laura',
        'stilius' => 'kibiras'
    ],
    [
        'pavadinimas' => 'Baklažanai',
        'kiekis' => 18,
        'mato_vnt' => 'kg',
        'kas_atnese' => 'Tomas',
        'stilius' => 'kilogramai'
    ],
    [
        'pavadinimas' => 'Aliejus',
        'kiekis' => 0.7,
        'mato_vnt' => 'litrai',
        'kas_atnese' => 'Monika',
        'stilius' => 'litrai'
    ],
];
var_dump($balius);
?>
<html>
    <head>
        <title>Balius</title>            
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div>
            <?php foreach ($balius as $value): ?>
            <p><?php print $value['kiekis'] ?> <span class="<?php print $value['stilius']?>"></span><?php print $value['pavadinimas'] . '(' . $value['kas_atnese'] . ')'; ?></p>
            <?php endforeach; ?>
        </div>
    </body>
</html> 