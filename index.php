<?php
$sertifikatas = '';
$vardas = '';
$pavarde = '';
$amzius = '';
$lygis = '';
if (isset($_POST['vardas']) && isset($_POST['pavarde']) && isset($_POST['amzius']) && isset($_POST['lygis'])) {
    $vardas = $_POST['vardas'];
    $pavarde = $_POST['pavarde'];
    $amzius = $_POST['amzius'];
    $lygis = $_POST['lygis'];

    if (!empty($vardas && $pavarde)) {
        $vardas = $vardas;
        $pavarde = $pavarde;
        $amzius = $amzius;
        $lygis = $lygis;
        $sertifikatas = 'SERTIFIKATAS';
    } else {
        $vardas = 'daunas';
        $pavarde = 'klaidu pridirbai';
        $amzius = 'ilgai negyvensi';
        $lygis = 'noobas';
        $sertifikatas = 'BYBY tau o ne sertifikata, duxe';
    }
}
?>

<html>
    <head>
        <title>About</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <form method="POST">
            <div>
                <input type="text" name = "vardas" placeholder ="rašyk  savo vardą ,Duxas">
                <input type="text" name = "pavarde" placeholder ="dabar pavardę, ple">
                <input type="number" name = "amzius" placeholder ="kiek laiko Žemė nešioja?">
                <select name="lygis">
                    <option value ="Rookie" selected>Rookie</option>
                    <option value ="Advanced">Advanced</option>
                    <option value ="Prokofieff">Prokofieff</option>
                </select>
                <input type="submit" name = "submit" value="getcha PULL">
            </div>
        </form>
            <h1><?php print $sertifikatas; ?></h1>
                <h2><?php print $vardas . ' ' . $pavarde; ?></h2>
                   <p><?php print $amzius; ?></p>
                   <p><?php print $lygis; ?></p>
    <body>
</html>