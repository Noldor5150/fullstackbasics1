<?php
$words = ['man', 'jei', 'daug', 'gersiu', 'Ona', 'neduos', 'bet', 'Aliona', 'duos', 'isvada', 'nori', 'nenori', 'negerk'];
   $rasinys = ''; 
while (strlen($rasinys) < 300) {
    $kadataskas = rand(4, 7);
    for ($i = 0; $i <= $kadataskas && strlen($rasinys) < 300; $i++) {
        if ($i == 0) {
            $rasinys .= ucfirst($words[rand(0, count($words) - 1)]) . ' ';
        } else if ($i < $kadataskas) {
            $rasinys .= $words[rand(0, count($words) - 1)] . ' ';
        } else {
            $rasinys .= $words[rand(0, count($words) - 1)] . '. ';
        }
    };
};
$rasinys_simboliais = str_split($rasinys);
$rasinys_simboliais[count($rasinys_simboliais) - 1] = '...';
$output = implode($rasinys_simboliais) . ' (' . strlen($rasinys) . ')';
?>
<html>
    <head>
        <title>Rasinys</title>
    </head>
    <body>
        <p><?php print $output; ?></p>
    </body>
</html>







