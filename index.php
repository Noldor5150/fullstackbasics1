<?php
$siusklines_turis = 40;
$dienos_siuksliu_turis = rand(0, 10);
$max_kaupo_turis = rand(1, 3);
$dienos = ($siusklines_turis + $max_kaupo_turis)/$dienos_siuksliu_turis ;
?>
<html>
    <head>
        <title>3 taskas</title>
    </head>
    <body>
        <h1>Skolos skaiciuokle</h1>
        <h2>Jei paemei <?php print (round ($dienos)); ?> dienu pirksiu geles</h2>
        
    </body>
</html>