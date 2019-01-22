<?php
$sudas1 = rand(1, 100);
$sudas2 = rand(101, 200);
$sudas3 = rand(201, 300);
?>
<html>
    <head>
        <title>3 taskas</title>
    </head>
    <body>
        <h1>Skolos skaiciuokle</h1>
        <h2>Jei paemei <?php print $sudas1; ?> jievru</h2>
        <h2>Su dviem kabanciais grazinsi <?php print $sudas2; ?></h2>
        <h2>Su vienu kabanciu grazinsi <?php print $sudas3; ?></h2>
    </body>
</html>