<?php
$mano_atmintis = ['penktadienis', 'paskaita', 'baras', 'alus', 'viskis', 'gintonikas', 'pirmadienis'];
?>
<html>
    <head>
        <title>for each</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <h1>WTF?</h1>
        <h2>MAno atmintis</h2>
        <ul>
            <?php foreach ($mano_atmintis as $value): ?>
                <li><?php print $value; ?></li>
            <?php endforeach; ?>
        </ul>    
    </body>
</html> 