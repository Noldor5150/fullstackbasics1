<?php
$sunny = rand(0, 1);
$rain = rand(0, 1);
$css_class = null;
$oras = null;

if ($sunny) {
    if ($rain) {
        $oras = "Lietus su saule";
        $css_class = "sun_rain";
    } else {
        $oras = "Sauleta";
        $css_class = "sunny";
    }
} else {
    if ($rain) {
        $oras = "lietus";
        $css_class = "rain";
    } else {
        $oras = "debesuotas";
        $css_class = "cloudy";
    }
}
?>
<html> 
    <head>
        <link rel="stylesheet" href="css/main.css">
        <title>Oru lentele</title>
    </head>
    <body>
        <div class="<?php print $css_class; ?>"> 
            <p><?php print $oras; ?> </p>
        </div>
    </body>
</html>
