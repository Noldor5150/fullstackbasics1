
<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);

$katasunis = 0;
for ($x = 1; $x <= $kates; $x++) {
    for ($i = 1; $i <= $sunys; $i++) {
        $success = rand(0, 1);
        if ($success) {
            $katasunis += 1;
            break;
        }
    }
}
?>
<html>
    <head>
        <title>For su katasuniais</title> 
    </head>
    <body>
        <p>Evente dalyvavo <?php print $kates; ?> ir <?php print $sunys; ?> sunys.</p>
        <p>Katasuniu iseiga: <?php print $katasunis; ?></p>          
    </body>
</html>