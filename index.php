<?php
$days = 365;
$pakelio_kaina = 3.75;
$ciza = $pakelio_kaina / 20;
$cizu_kiekis = 0;
$cizu_kiekis_pirm_ketv = 0;
for ($i = 1; $i <= $days; $i++) {
    $savaites_diena = date('N', strtotime("+ $i day"));
    $ciza_mon_thu = rand(10, 20);
    $ciza_fri = rand(20, 30);
    $ciza_sat_sun = rand(5, 10);
    if ($savaites_diena <= 4) {
        $cizu_kiekis += $ciza_mon_thu;
        $cizu_kiekis_pirm_ketv += $ciza_mon_thu;
    } elseif ($savaites_diena == 5) {
        $cizu_kiekis += $ciza_fri;
    } else {
        $cizu_kiekis += $ciza_sat_sun;
    }
}
$viso_islaidos = $cizu_kiekis * $ciza;
$mon_thu_kaina = $cizu_kiekis_pirm_ketv * $ciza;
$rukymo_laikas_min = 0;

for ($y = 1; $y <= $cizu_kiekis; $y++) {
    $rukymo_laikas_min = $cizu_kiekis * 5;
}
$rukymo_laikas_h = $rukymo_laikas_min / 60;
?>
<html>
    <head>
        <title>Fucking rookymas</title>
    </head>
    <body>
        <h2>Prarookau valandu per metus <?php print $rukymo_laikas_h; ?> isleidau <?php print $viso_islaidos; ?> jevru</h2>
    </body>
</html>