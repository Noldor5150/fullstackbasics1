<?php
$mano_atmintis = ['penktadienis', 'paskaita', 'baras', 'alus', 'viskis', 'gintonikas', 'pirmadienis'];
$atmintis = count($mano_atmintis);
$random_flash = rand(0, $atmintis - 1);
?>
<html>
    <head>
        <title>for each</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <h1>WTF?</h1>
        <h2>Mano atmintis</h2>
        <h3><?php print $mano_atmintis[$random_flash]; ?></h3>
        <ul>
            <?php foreach ($mano_atmintis as $value): ?>
                <li><?php print $value; ?></li>
            <?php endforeach; ?>
        </ul>    
    </body>
</html> 