<?php
$words = ['man', 'jei', 'daug', 'gersiu', 'Ona', 'neduos', ', bet', 'Aliona', 'duos', 'isvada', 'nori', 'nenori', 'negerk'];
$rasinys = '';
//$skirybos_zenklas = ['!', '.', '?'];
while (strlen($rasinys) < 500) {
    $kadataskas = rand(1, 2);
    for ($i = 0; $i <= $kadataskas && strlen($rasinys) < 500; $i++) {
        if ($i == 0 && $i === ',bet') {
            $rasinys .= str_replace( ",bet", "Bet" ,$rasinys)  . $words[rand(0, count($words) - 1)] . ' ';
        } else if ($i == 0) {
            $rasinys .= ucfirst($words[rand(0, count($words) - 1)]) . ' ';
        } else if ($i < $kadataskas) {
            $rasinys .= $words[rand(0, count($words) - 1)] . ' ';
        } else {
            $rasinys .= $words[rand(0, count($words) - 1)] . '.' . ' ';//. $skirybos_zenklas [rand(0, count($skirybos_zenklas) - 1)] . ' ';
        }
    }
};

str_replace('. , bet', '. Bet', $rasinys);
$rasinys_simboliais = str_split($rasinys);

$rasinys_simboliais[count($rasinys_simboliais) - 1] = '...';
$output = implode($rasinys_simboliais) . ' (' . strlen($rasinys) . ')';

//$ar = preg_split('/.,\s*/', $output, NULL, 
     //   PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
//var_dump($ar);
?>
<html>
    <head>
        <title>Rasinys</title>
    </head>
    <body>
        <p><?php print $output; ?></p>
    </body>
</html>







