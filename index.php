
<?php
$months = 12;
$kisene = 1000;
$alga = 700;
$menesis = 0;

for ($x = 1; $x <= $months; $x++) {
    $islaidos = rand(0, 2000);
    $likutis = $kisene + $alga - $islaidos;
    $menesis++;
    if ($likutis <= 0) {
        break;
    }
}
?>
<html>
    <head>
        <title>For su katasuniais</title> 
    </head>
    <body>
        <p>Baik gerti, si menesi <?php print $menesis; ?> baigsis babkes .</p>
    </body>
</html>