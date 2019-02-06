<?php

function pakelt_kvadratu($x) {
    $x = $x * $x;
    return $x;
}

$atsakymas = 0;
if (isset($_POST['skaicius'])) {
    $skaicius = $_POST['skaicius'];

    if (empty($skaicius)) {
        $atsakymas = 'jobstvajumat';
    } else {
        $atsakymas = pakelt_kvadratu($skaicius);
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
            <div> Ka pakelt kvadratu?
                <input type="text" name ="skaicius" placeholder="iveskite skaiciu">
                <input type="submit" value="PASHLO">
            </div>
        </form>
        <h1>Atsakymas: <?php print $atsakymas; ?></h1>
    <body>
</html>