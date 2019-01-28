<?php
$mano_atmintis = ['penktadienis', 'paskaita', 'baras', 'alus', 'viskis', 'gintonikas', 'pirmadienis'];
$draugo_atmintis = ['penktadienis', 'darbas', 'baras', 'alus', 'viskis', 'gintonikas', 'antradienis'];

$bendra_atmintis = array_intersect($mano_atmintis, $draugo_atmintis);
$atmintis = count($mano_atmintis);
$random_flash = rand(0, $atmintis - 1);
if (!in_array($mano_atmintis[$random_flash], $bendra_atmintis)) {
    $bendra_atmintis[] = $mano_atmintis[$random_flash];
}
?>
<html>
    <head>
        <title>for each</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <h1>WTF?</h1>
        <h2>Draugo atmintis</h2>
        <ul>
            <?php foreach ($draugo_atmintis as $value): ?>
                <li><?php print $value; ?></li>
            <?php endforeach; ?>
        </ul> 
        <h2>Mano atmintis</h2>
        <h3><?php print $mano_atmintis[$random_flash]; ?></h3>
        <ul>
            <?php foreach ($mano_atmintis as $value): ?>
                <li><?php print $value; ?></li>
            <?php endforeach; ?>
        </ul> 
        <h2>Bendra atmintis</h2>
        <ul>
            <?php foreach ($bendra_atmintis as $value): ?>
                <li><?php print $value; ?></li>
            <?php endforeach; ?>
        </ul>  
    </body>
</html> 