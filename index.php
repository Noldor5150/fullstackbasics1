<?php
function paxmas($kiekis) {
    $valandos = 0;
    $stopke = 50;
    $kiekis= $kiekis - $stopke;
    
    if ($kiekis > 0) {
        $paxmo_valandos = paxmas($kiekis);
        $valandos = $valandos + 0.5 + 0.15 * $paxmo_valandos + $paxmo_valandos;
    }
   $valandos = round($valandos, 2);
    return $valandos;
}
print paxmas(1000);
?>           