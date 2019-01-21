<?php
$size = date('s') * 10;
?>

<html>
    <head>
    <title>Bombike</title> 
        <link rel="stylesheet" href="css/main.css">
         <style>
            .bomba {
                height: <?php print $size; ?>px;
                width: <?php print $size; ?>px; 
            }
        </style>
    </head>
    <body>
        <div><img class="bomba" src="images/bomb.png"></div>
        <div>Sprogsim: <?php print date('s'); ?></div>
    </body>
</html>