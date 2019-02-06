<?php

function pachmielas($vodke_ml) {
    $id = $vodke_ml;
    var_dump("ID: $id - Iškviesta funkcija, vodke_ml = $vodke_ml");
    $pachmielas_val = 0;
    if ($vodke_ml > 0) {
        var_dump("ID: $id - $vodke_ml > 0, geriam stoparika");
        $vodke_ml -= 50;
        var_dump("ID: $id - Funkciją vėl, paduodami vodke_ml = $vodke_ml");
        $pachmielas_val += pachmielas($vodke_ml);
        var_dump("ID: $id - Grįžo paskaičiuotas pachmielas_val = $pachmielas_val");
        $pachmielas_val += 0.5 + $pachmielas_val * 0.15;
        var_dump("ID: $id - Pridedam 0.5 + pachmielas_val * 0.15. Dabar pachmielas_val = $pachmielas_val");
    }
    var_dump("ID: $id - Returninam pachmielas_val = $pachmielas_val");
    return $pachmielas_val;
}

$x = round(pachmielas(100), 2);
print $x;
?>