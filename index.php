<?php
$atsakymas = 0;
if (isset($_POST['atsakymas'])) {
    $atsakymas = $_POST['atsakymas'] + 1;
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
                <input type="submit" name = "atsakymas" value="<?php print $atsakymas; ?>">
                <?php for ($i = 0; $i < $atsakymas; $i++): ?>
                    <img src="images/rain.gif" height="100" width="250">
                <?php endfor; ?> 
            </div>
        </form>
        <h1>Atsakymas: <?php print $atsakymas; ?></h1>
    <body>
</html>