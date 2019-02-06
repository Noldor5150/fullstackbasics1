<?php
//function pachmielas($vodke_ml) {
//    $pachmielas_val = 0;
//    if ($vodke_ml > 0) {
//        $vodke_ml -= 50;
//        $pachmielas_val += pachmielas($vodke_ml);
//        $pachmielas_val += 0.5 + $pachmielas_val * 0.15;
//    }
//    return $pachmielas_val;
//}
//
//$x = round(pachmielas(1000), 2);
//print $x;
function babuska_kvepia($kvepalu_kiekis_ml) {
    $atstumas_metrais = 0;
    if ($kvepalu_kiekis_ml > 50) {
        $kvepalu_kiekis_ml = $kvepalu_kiekis_ml * 0.8;
        $atstumas_metrais += 1 + babuska_kvepia($kvepalu_kiekis_ml);
    }
    return $atstumas_metrais;
}
$y = babuska_kvepia(100);
print $y;

?>