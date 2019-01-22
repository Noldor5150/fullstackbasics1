<?php
Date_default_timezone_set('Europe/Vilnius');
$siusklines_turis = 40;
$dienos_siuksliu_turis = rand(0, 10);
$max_kaupo_turis = rand(1, 3);
$dienos = floor(($siusklines_turis + $max_kaupo_turis) / $dienos_siuksliu_turis);
$data = date('d', strtotime("+$dienos days"));
?>
<html>
    <head>
        <title>3 taskas</title>
    </head>
    <body>
        <h1>siukles</h1>
        <h2> <?php print $data; ?> pirksiu geles</h2>
    </body>
</html>