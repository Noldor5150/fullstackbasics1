<?php
$_POST = filter_input_array(INPUT_POST,['vardas' =>FILTER_SANITIZE_SPECIAL_CHARS] );
?>

<html>
    <head>
        <title>Hack me</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <h1><?php print $_POST['vardas']?? '';?></h1>
        <h2> hack this page</h2>
                <form method="POST">
            <input type="text" name = "vardas">
            <input type="submit">
        </form>
    <body>
</html>