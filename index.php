<?php
$paskola = rand(1, 100);
$skolos_grazinimas1 = rand(101, 200);
$skolos_grazinimas2 = rand(201, 300);
?>
<html>
    <head>
        <title>3 taskas</title>
    </head>
    <body>
        <h1>Skolos skaiciuokle</h1>
        <h2>Jei paemei <?php print $paskola; ?> jievru</h2>
        <h2>Su dviem kabanciais grazinsi <?php print $skolos_grazinimas1; ?></h2>
        <h2>Su vienu kabanciu grazinsi <?php print $skolos_grazinimas2; ?></h2>
    </body>
</html>