<?php
$months = 12;
$kisene = 1000;
$alga = 700;
for ($i = 1; $i <= $months; $i++) {
    $islaidos = rand(400, 1200);
    $kisene += $alga - $islaidos;
    if ($kisene <= 0) {
        $message = "Bloga prognozė: $i mėnesį gali baigtis piginai! Atsargiai!";
        break;
    } else {
        $message = "Likutis po $i mėn. yra $kisene Eur.";
    }
}
?>
<html>
    <head>
        <title>Kišenė</title>
    </head>
    <body>
        <h2><?php print $message; ?></h2>
    </body>
</html>